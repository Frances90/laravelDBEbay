<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('listings', function (Blueprint $table) {
            // Prüfen, ob die Spalte schon existiert
            if (!Schema::hasColumn('listings', 'category_id')) {
                // Spalte hinzufügen
                $table->foreignId('category_id')
                    ->nullable() // oder default auf existierende Kategorie
                    ->constrained('categories')
                    ->cascadeOnDelete()
                    ->after('id');
            }
        });

        DB::table('listings')->whereNull('category_id')->update(['category_id' => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('listings', function (Blueprint $table) {
            // Entferne die Fremdschlüssel-Constraint
            $table->dropForeign(['category_id']);

            // Setze die Spalte zurück (optional)
            $table->dropColumn('category_id');
        });
    }
};
