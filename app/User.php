<?php

namespace App;

use Goodechilde\CommonContact\Traits\HasAddresses;
use Goodechilde\CommonContact\Traits\HasEmailAddresses;
use Goodechilde\CommonContact\Traits\HasPhones;
use Goodechilde\CommonContact\Traits\HasSocialMediaAddresses;
use Goodechilde\GcNotes\Traits\HasNotes;
use Goodechilde\GcTags\Traits\HasTags;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    use HasNotes;
    use HasAddresses;
    use HasPhones;
    use HasEmailAddresses;
    use HasSocialMediaAddresses;
    use HasTags;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
