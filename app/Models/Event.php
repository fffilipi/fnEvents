<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $casts = [
        'itens' => 'array'
    ];

    protected $dates = ['date'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }
}
