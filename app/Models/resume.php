<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'care_of',
        'village',
        'post_office',
        'upazila',
        'district',
        'phone',
        'email',
        'contact_status',
        'education_status',
        'skill_status',
        'personal_status',
        'honours_institue',
        'honours_versity',
        'honours_subject',
        'honours_result',
        'honours_passing',
        'hsc_institue',
        'hsc_board',
        'hsc_result',
        'hsc_group',
        'hsc_passing',
        'ssc_institue',
        'ssc_board',
        'ssc_group',
        'ssc_result',
        'ssc_passing'

    ];
}