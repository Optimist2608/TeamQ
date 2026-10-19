<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();

            $table->string('discord_tag', 100)->nullable();
            $table->string('timezone', 100)->nullable();
            $table->unsignedTinyInteger('age')->nullable();
            $table->string('role', 20)->default('user');
            $table->boolean('is_banned')->default(false);
            $table->string('avatar_path')->nullable();

            $table->timestamps();

            $table->index(['role', 'is_banned']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
