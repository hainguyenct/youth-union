<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phieubau_uutu extends Model
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
    protected $table = 'phieubau_uutu';

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
                  'CHIDOAN_ID',
                  'SOPHIEU_TONG',
                  'NGAY_BAU'
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
     * Get the Chidoan for this model.
     *
     * @return App\Models\Chidoan
     */
    public function Chidoan()
    {
        return $this->belongsTo('App\Models\chidoan','CHIDOAN_ID','ID');
    }

    /**
     * Get the chitietBauUt for this model.
     *
     * @return App\Models\ChitietBauUt
     */
    public function chitietBauUt()
    {
        return $this->hasOne('App\Models\chitiet_bau_ut','PHIEUBAU_UUTU_ID','ID');
    }

    /**
     * Set the NGAY_BAU.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYBAUAttribute($value)
    {
        $this->attributes['NGAY_BAU'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAY_BAU in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYBAUAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
