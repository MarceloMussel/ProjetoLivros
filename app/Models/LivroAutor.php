<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LivroAutor extends Model
{
    use HasFactory;
    protected $fillable = ['autor_id', 'livro_id'];
    public function autor(){
        return $this->belongsTo('App\Models\Autor');
    }
    public function livro(){
        return $this->belongsTo('App\Models\Livro');
    }
}
