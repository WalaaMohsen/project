<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class product extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $fiilable =['id','name','price','image'];
}
