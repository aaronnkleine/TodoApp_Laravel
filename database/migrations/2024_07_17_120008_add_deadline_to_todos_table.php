<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeadlineToTodosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::table('todos', function (Blueprint $table) {
        $table->date('deadline')->nullable();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
{
    Schema::table('todos', function (Blueprint $table) {
        $table->dropColumn('deadline');
    });
}
};
