<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'quantity', 'pro_desc', 'image'];


    public function getNamePriceAttribute(){
        return $this->name . " .. " . $this->price;
    }

    // public function name(): Attribute {
    //     return $this->name()->strtolower();
    // }

}
