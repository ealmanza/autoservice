<?php namespace Autoservice\Http\Entities;
/**
 * Created by PhpStorm.
 * User: laravel
 * Date: 02/06/2015
 * Time: 07:30 PM
 */

use Illuminate\Database\Eloquent\Model;

class County extends Model {

    public function cities(){
        return $this->hasMany('Autoservice\Http\Entities\City');
    }


}