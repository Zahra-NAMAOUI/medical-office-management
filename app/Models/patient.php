<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $fillable = ['nom','prenom','email','ville','genre', 'phone', 'cin', 'date_rendez_vous', 'tour'];
}
