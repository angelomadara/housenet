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
        // update middle_name to nullable
        Schema::table('clients', function (Blueprint $table) {
            $table->string('middle_name')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // revert middle_name to not nullable
        Schema::table('clients', function (Blueprint $table) {
            $table->string('middle_name')->nullable(false)->change();
        });
    }
};
