<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function stringFirstLetterToUppecase($str) : string{
        return Ucwords($str);
    }

    public function replaceElementInString($oldEl,$newEl,$str) :string{
        return str_replace($oldEl , $newEl , $str);
    }

    public $timestaps = false;
}