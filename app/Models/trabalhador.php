<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trabalhador extends Model
{
    use HasFactory;

    protected $fillable = ['nome','profissao','salario'];
}
