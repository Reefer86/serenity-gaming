<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class DiscordMember extends Model
{
    use Notifiable;

    /**
     * Database table
     */
    protected $table = 'discord_members';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'discord_id'
    ];
}
