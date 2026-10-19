<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('game_id')->constrained()->restrictOnDelete();
            $table->string('title', 160);
            $table->text('description');
            $table->boolean('mic_required')->default(false);
            $table->string('status', 20)->default('open');
            $table->string('preferred_role', 100)->nullable();
            $table->string('preferred_rating', 100)->nullable();
            $table->unsignedTinyInteger('players_needed')->default(1);
            $table->timestamps();

            $table->index(['game_id', 'status', 'created_at']);
            $table->index(['user_id', 'created_at']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
