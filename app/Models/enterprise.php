<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enterprise extends Model
{
    use HasFactory;

    protected $table = "ac_enterprises";
    // protected $primaryKey = 'ID_EMP';
    public $timestamps = false;
}
