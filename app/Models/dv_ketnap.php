<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dv_ketnap extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'dv_ketnap';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ID';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'NGAYKETNAP'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the qdDvKetnap for this model.
     *
     * @return App\Models\QdDvKetnap
     */
    public function qdDvKetnap()
    {
        return $this->hasOne('App\Models\qd_dv_ketnap','DV_KETNAP_ID','ID');
    }

    /**
     * Set the NGAYKETNAP.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYKETNAPAttribute($value)
    {
        $this->attributes['NGAYKETNAP'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAYKETNAP in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYKETNAPAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
