<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    
    protected $guarded = [
        "id"
    ];
    protected $fillable = [
        'name',
        'about',
        'photo'
    ];
    public $table = 'siswa';

    public function project() {
        return $this->hasMany(Project::class);
    }

    public function contact() {
        return $this->hasMany(Contact::class);
    }
}