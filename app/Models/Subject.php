<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $fillable = ['name','code','department_id','file'];
    public function department(){
        return $this->hasOne(Department::class,'id','department_id');

    }
}
