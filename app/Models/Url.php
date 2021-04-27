<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Url extends Model
{
    use HasFactory;

    protected $fillable = ['url','user_id'];
    public $timestamps = false;

    public function user()
    {
       return $this->belongsTo('App\Models\User');

    }
}
