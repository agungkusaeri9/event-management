<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('company_profiles', function (Blueprint $table) {
            $table->renameColumn('facebook', 'youtube');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('company_profiles', function (Blueprint $table) {
            $table->renameColumn('youtube', 'facebook');

        });
    }
};
