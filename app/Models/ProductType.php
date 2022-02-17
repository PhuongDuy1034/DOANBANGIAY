<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'name',
        'status',
    ];

    public function productTypes(){
        return $this->hasMany(Product::class,'id','productTypeId');
    }
}
