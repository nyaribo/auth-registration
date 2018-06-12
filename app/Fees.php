<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fees extends Model
{
  
public $timestamps = false;
  protected $fillable = [
     'student_id', 'amount', 'date',
  ];
}
