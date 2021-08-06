<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;
    protected $table="certificates";
   
    protected $fillable=[
        'afm',
        'name',
        'surname',
        'course',
        'email',
        'platform',
        'tomeas',
        'course_id',
        'cert_date',
        'unigue_cert_id',
    ];
}
