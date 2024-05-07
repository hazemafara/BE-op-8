<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductPerAllergie extends Model
{
    public $timestamps = false;
    protected $fillable = ['product_id', 'allergen_id'];
    use HasFactory;
}
