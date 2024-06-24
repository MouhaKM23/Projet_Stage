<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'interest_confirmation' ,'choice1','choice2','choice3'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
