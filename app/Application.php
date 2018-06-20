<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Application extends Model
{
    use Notifiable;

    /**
     * Database table
     */
    protected $table = 'applications';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'age', 'location', 'game', 'current', 'conduct', 'reference', 'status'
    ];
}
