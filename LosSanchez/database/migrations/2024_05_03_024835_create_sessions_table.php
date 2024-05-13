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
<<<<<<< HEAD
=======
<<<<<<< HEAD:LosSanchez/database/migrations/2024_05_03_024835_create_sessions_table.php
=======
>>>>>>> bc190505fa1c5f18449f4a518e0f47630fce12b5
        if(!Schema::hasTable('users')){
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

<<<<<<< HEAD
=======
>>>>>>> b094444514cf7208f194d4fb1f3658c245d6e0dc:LosSanchez/database/migrations/0001_01_01_000000_create_users_table.php
>>>>>>> bc190505fa1c5f18449f4a518e0f47630fce12b5
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
