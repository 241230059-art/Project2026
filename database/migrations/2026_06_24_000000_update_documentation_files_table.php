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
        Schema::table('documentation_files', function (Blueprint $table) {
            if (!Schema::hasColumn('documentation_files', 'file_name')) {
                $table->string('file_name')->nullable();
            }

            if (!Schema::hasColumn('documentation_files', 'file_type')) {
                $table->string('file_type')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documentation_files', function (Blueprint $table) {
            if (Schema::hasColumn('documentation_files', 'file_name')) {
                $table->dropColumn('file_name');
            }

            if (Schema::hasColumn('documentation_files', 'file_type')) {
                $table->dropColumn('file_type');
            }
        });
    }
};
