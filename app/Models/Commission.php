<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commission extends Model
{
    //
     use HasFactory;
    protected $table ='commission';
    public function salary()
{
    return $this->belongsTo(Salary::class);
}

}
