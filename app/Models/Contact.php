<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'contact';
    public function contact() {
        return $this->belongsTo(Contact_type::class);
    }
}