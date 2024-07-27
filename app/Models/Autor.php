<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
    protected $fillable = ['Nome', 'Email'];
    public function livroAutors(){
        return $this->hasMany('App\Models\LivroAutor', 'autor_id');
    }
}
