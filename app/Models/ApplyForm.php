<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyForm extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function ApplyList(){
        return $this(Circular::class,'apply_id','id');
    }

}
