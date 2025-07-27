<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Siswa extends Model
{
    use HasFactory;
    protected $fillable=['nama','kelas'];
    
    public function nilais(){
        return $this->hasMany('Nilai::class');
    }
}
