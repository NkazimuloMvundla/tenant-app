<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'property_address', 'rental_history', 'employment_details', // Add more fields as needed
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
