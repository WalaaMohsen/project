<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orders extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
    protected $fiilable =['order_status','quantity','total','register_id'];
}
