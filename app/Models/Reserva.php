<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Reserva extends Model
{
    use HasFactory;

    static $rules =  [
        'start' => 'required',
        'end'=> 'required'
    ];

    protected $fillable = ['start', 'end'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
