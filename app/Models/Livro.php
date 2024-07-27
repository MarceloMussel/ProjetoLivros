<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
    protected $fillable = ['Titulo', 'AnoPublicacao'];
    public function livroAutors(){
        return $this->hasMany('App\Models\LivroAutor', 'livro_id');
    }
}
