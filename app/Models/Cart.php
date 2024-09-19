<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


           protected $table=('Product');
           protected $priimaryKey='id';
           protected $fillable=['Product_image','Qty_in_stock','Product_price'];
           
        
}
