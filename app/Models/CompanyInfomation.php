<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyInfomation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'favicon',
        'logo',
        'email',
        'gmail',
        'landline',
        'phone1',
        'phone2',
        'whatsapp',
        'location',
        'facebook',
        'twitter',
        'instagram',
        'linkedin',
        'mission',
        'vision',
        'about',
    ];
}
