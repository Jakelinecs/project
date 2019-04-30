<?php

namespace generator\project\Models ;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cargo';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'car_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['car_id','car_nombre','car_descripcion','car_status'];

}
