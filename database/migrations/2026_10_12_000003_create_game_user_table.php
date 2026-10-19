<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('game_user', function (Blueprint $table) {
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('game_id')->constrained()->cascadeOnDelete();
            $table->string('rating', 100)->nullable();
            $table->string('player_role', 100)->nullable();
            $table->timestamps();

            $table->primary(['user_id', 'game_id']);
            $table->index(['game_id', 'rating']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('game_user');
    }
};
