<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $table = 'store';
    protected $primarykey = 'id';

    protected $fillable = [
        'name_fantasya',
        'cnpj',
        'street',
        'number',
        'complement',
        'city',
        'state',
        'cellphone',
        'site',
        'email'
    ];
}
