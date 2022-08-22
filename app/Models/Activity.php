<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;

    protected $fillable = ['name_event','description','start','end']; 
    // protected $dates = ['date_activity'];

    public function GetDateActivityFormatted(){
        $date = $this->atribute['date_activity'];
        $date = date_format('Y-m-d');
        return $date;
    }



}
