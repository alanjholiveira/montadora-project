<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'matrix', 'name', 'fantasy', 'cnpj', 'ie', 'address', 'zip_code',
        'city', 'state', 'country', 'phone', 'email', 'responsible',
    ];
}
