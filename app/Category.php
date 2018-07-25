<?php
/**
 * Created by PhpStorm.
 * User: GIANG TINH
 * Date: 25/07/2018
 * Time: 2:53 CH
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    public $timestamps = false;
}