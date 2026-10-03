<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EmailTwoFactorAuthentication extends Model
{
    protected $fillable = [
        'user_id',
        'enabled',
        'confirmed_at',
    ];

    protected function casts(): array
    {
        return [
            'enabled' => 'boolean',
            'confirmed_at' => 'datetime',
        ];
    }

    /**
     * Get the user that owns this email 2FA configuration.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
