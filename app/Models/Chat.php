
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Chat extends Model
{
    protected $fillable = [
        'post_id',
        'applicant_id',
    ];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    public function applicant(): BelongsTo
    {
        return $this->belongsTo(
            User::class,
            'applicant_id'
        );
    }

    public function messages(): HasMany
    {
        return $this->hasMany(Message::class);
    }
}
