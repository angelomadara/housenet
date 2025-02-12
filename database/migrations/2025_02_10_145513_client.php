<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // client picture upload, status and notes
        Schema::table('clients', function (Blueprint $table) {
            $table->string('picture')->nullable();
            $table->string('status')->nullable();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->dropColumn('picture');
            $table->dropColumn('status');
            $table->dropColumn('notes');
        });
    }
};
