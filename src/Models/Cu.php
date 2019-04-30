<?php

namespace generator\project\Models ;

use Illuminate\Database\Eloquent\Model;

class Cu extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'cu';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'cu_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array   cu_id	cu_idModulo	cu_carpeta	cu_nombre	cu_status
     */
    protected $fillable = ['cu_id','cu_idModulo','cu_carpeta','cu_nombre','car_status'];

}
