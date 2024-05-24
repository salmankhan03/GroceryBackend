<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductBrand extends Model
{

    use HasFactory, SoftDeletes;

    public $timestamps = true;

    protected $guarded = ['id'];

    protected $table = 'product_brand';

    protected $fillable = [
        'name', 
    ];

    protected $hidden = [
        'deleted_at',
        'created_at',
        'updated_at',
    ];
}