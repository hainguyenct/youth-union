<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dv_tt_doan extends Model
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
    protected $table = 'dv_tt_doan';

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
                  'NGAYTTDOAN'
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
     * Get the qdDvTtdoan for this model.
     *
     * @return App\Models\QdDvTtdoan
     */
    public function qdDvTtdoan()
    {
        return $this->hasOne('App\Models\qd_dv_ttdoan','DV_TT_DOAN_ID','ID');
    }

    /**
     * Set the NGAYTTDOAN.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYTTDOANAttribute($value)
    {
        $this->attributes['NGAYTTDOAN'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAYTTDOAN in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYTTDOANAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
