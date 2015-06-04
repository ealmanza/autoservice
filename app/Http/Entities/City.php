<?php namespace Autoservice\Http\Entities;
/**
 * Created by PhpStorm.
 * User: laravel
 * Date: 02/06/2015
 * Time: 07:41 PM
 */

use Illuminate\Database\Eloquent\Model;

class City extends Model {

    public function county()
    {
        return $this->belongsTo('Autoservice\Http\Entities\County');
    }

}