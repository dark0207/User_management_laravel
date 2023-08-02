<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sessions';

    /**
     * The attributes that are mass assignable
     * 
     * @var array<int, string>
     */
    
    protected $fillable = [
        'user_id',
        'ip_address',
        'last_activity',
    ];
}
