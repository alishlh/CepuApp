<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ComplaintResponse;

class Complaint extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'status',
        'image',
        'guest_name',
        'guest_telp',
        'guest_email',
        'user_id'
    ];

    public function complaint()
    {
        return $this->hasMany(ComplaintResponse::class);
    }
}
