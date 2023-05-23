<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payroll extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function salarystructure(){
        return $this->belongsTo(SalaryStructure::class,'salary_structure_id','id');
    }
}
