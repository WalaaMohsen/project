<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $fiilable =['id','name','email','phone','address','product_name','quantity','price'];

}
