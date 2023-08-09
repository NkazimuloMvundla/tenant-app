<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackgroundCheck extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'credit_result', 'criminal_result', // Add more fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
