<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
            protected $table='Products';
            protected $fillable=['id','Product_name','Product_image','Qty_in_stock','Product_price'];
            
            
}
