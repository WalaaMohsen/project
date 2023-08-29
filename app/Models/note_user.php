<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Controller;

class note_user extends Model
{
    use HasFactory;
    protected $guarded = [];
    public $timestamps = false;
}
