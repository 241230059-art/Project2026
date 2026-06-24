<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (!Schema::hasColumn('documentation_files', 'file type')) {
            return;
        }

        Schema::create('documentation_files_new', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file_name')->nullable();
            $table->string('file_path');
            $table->string('file_type')->nullable();
            $table->timestamps();
        });

        DB::statement(
            'INSERT INTO documentation_files_new (id, title, file_name, file_path, file_type, created_at, updated_at) SELECT id, title, file_name, file_path, COALESCE(file_type, "file type"), created_at, updated_at FROM documentation_files'
        );

        Schema::drop('documentation_files');
        Schema::rename('documentation_files_new', 'documentation_files');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (!Schema::hasTable('documentation_files')) {
            return;
        }

        Schema::create('documentation_files_old', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file_name')->nullable();
            $table->string('file_path');
            $table->string('file type')->nullable();
            $table->string('file_type')->nullable();
            $table->timestamps();
        });

        DB::statement(
            'INSERT INTO documentation_files_old (id, title, file_name, file_path, "file type", file_type, created_at, updated_at) SELECT id, title, file_name, file_path, file_type, file_type, created_at, updated_at FROM documentation_files'
        );

        Schema::drop('documentation_files');
        Schema::rename('documentation_files_old', 'documentation_files');
    }
};
