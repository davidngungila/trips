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
        Schema::table('permissions', function (Blueprint $table) {
            if (!Schema::hasColumn('permissions', 'name')) {
                $table->string('name')->after('id');
            }
            if (!Schema::hasColumn('permissions', 'guard_name')) {
                $table->string('guard_name')->default('web')->after('name');
            }
            
            if (!Schema::hasColumn('permissions', 'name') || !Schema::hasColumn('permissions', 'guard_name')) {
                $table->unique(['name', 'guard_name']);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            if (Schema::hasColumn('permissions', 'name') && Schema::hasColumn('permissions', 'guard_name')) {
                $table->dropUnique(['name', 'guard_name']);
                $table->dropColumn(['name', 'guard_name']);
            }
        });
    }
};
