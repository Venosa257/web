<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_type extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $table = 'contact_type';
    public function contact() {
        return $this->hasMany(Contact::class);
    }

}