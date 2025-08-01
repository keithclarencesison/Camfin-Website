<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSubmission extends Model
{
    protected $fillable = [
        'fullname',
        'applying_for',
        'contact_no',
        'message'
    ];
}
