<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pdfmodel extends Model
{
    use HasFactory;

    protected $fillable = ['pdf_path', 'user_id', 'pdf_name'];
}