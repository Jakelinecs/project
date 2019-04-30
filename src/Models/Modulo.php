<?php

namespace generator\project\Models ;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //mod_id	mod_monbre	mod_icono	mod_status
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modulo';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'mod_id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mod_id','mod_nombre','mod_icono','mod_status'];


}
