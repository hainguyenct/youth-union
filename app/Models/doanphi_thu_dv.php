<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doanphi_thu_dv extends Model
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
    protected $table = 'doanphi_thu_dv';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'ID';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'DOANVIEN_THANHNIEN_ID',
                  'THANGNAM_ID',
                  'NGAY_DONG_DP_DV'
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
     * Get the DoanvienThanhnien for this model.
     *
     * @return App\Models\DoanvienThanhnien
     */
    public function DoanvienThanhnien()
    {
        return $this->belongsTo('App\Models\doanvien_thanhnien','DOANVIEN_THANHNIEN_ID','ID');
    }

    /**
     * Get the Thangnam for this model.
     *
     * @return App\Models\Thangnam
     */
    public function Thangnam()
    {
        return $this->belongsTo('App\Models\thangnam','THANGNAM_ID','ID');
    }

    /**
     * Set the THANGNAM_ID.
     *
     * @param  string  $value
     * @return void
     */
    public function setTHANGNAMIDAttribute($value)
    {
        $this->attributes['THANGNAM_ID'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Set the NGAY_DONG_DP_DV.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYDONGDPDVAttribute($value)
    {
        $this->attributes['NGAY_DONG_DP_DV'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get THANGNAM_ID in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getTHANGNAMIDAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

    /**
     * Get NGAY_DONG_DP_DV in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYDONGDPDVAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
