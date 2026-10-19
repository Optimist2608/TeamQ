
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'user_id',
        'game_id',
        'title',
        'description',
        'mic_required',
        'status',
        'preferred_role',
        'preferred_rating',
        'players_needed',
    ];

    protected function casts(): array
    {
        return [
            'mic_required' => 'boolean',
            'players_needed' => 'integer',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function game(): BelongsTo
    {
        return $this->belongsTo(Game::class);
    }

    public function chats(): HasMany
    {
        return $this->hasMany(Chat::class);
    }
}
