<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeaseAgreement extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'agreement_type', 'content', // Add more fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
