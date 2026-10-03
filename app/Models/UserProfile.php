<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserProfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',

        /*
        |--------------------------------------------------------------------------
        | Personal Information
        |--------------------------------------------------------------------------
        */

        'first_name',
        'last_name',
        'display_name',
        'avatar',

        /*
        |--------------------------------------------------------------------------
        | Professional Information
        |--------------------------------------------------------------------------
        */

        'job_title',
        'department',
        'phone',
        'bio',

        /*
        |--------------------------------------------------------------------------
        | Address
        |--------------------------------------------------------------------------
        */

        'address_line_1',
        'address_line_2',
        'city',
        'state',
        'postal_code',
        'country',

        /*
        |--------------------------------------------------------------------------
        | Account Preferences
        |--------------------------------------------------------------------------
        */

        'timezone',
        'locale',
        'date_format',
        'theme',
    ];

    /**
     * Get the user that owns the profile.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
