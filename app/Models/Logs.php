<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logs extends Model
{
    use HasFactory;

     /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'logs';

    /**
     * The attributes that are mass assignable
     * 
     * @var array<int, string>
     */
    
     
    protected $fillable = [
        'userid',
        'ip_address',
        'message',
        'log_time',
        'user_agent',
    ];

    protected $dates = [
        'log_time',
    ];
}
