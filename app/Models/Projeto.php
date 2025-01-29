<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ['nome', 'descricao', 'data_inicio', 'status']; // Os campos que podem ser preenchidos

    use HasFactory; 
}
