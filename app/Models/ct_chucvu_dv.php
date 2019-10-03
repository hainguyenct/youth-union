<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ct_chucvu_dv extends Model
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
    protected $table = 'ct_chucvu_dv';

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
                  'CHUCVU_DV_ID',
                  'NGAYBD_CV',
                  'NGAYKT_CV'
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
     * Get the ChucvuDv for this model.
     *
     * @return App\Models\ChucvuDv
     */
    public function ChucvuDv()
    {
        return $this->belongsTo('App\Models\chucvu_dv','CHUCVU_DV_ID','ID');
    }

    /**
     * Set the NGAYBD_CV.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYBDCVAttribute($value)
    {
        $this->attributes['NGAYBD_CV'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Set the NGAYKT_CV.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYKTCVAttribute($value)
    {
        $this->attributes['NGAYKT_CV'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAYBD_CV in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYBDCVAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

    /**
     * Get NGAYKT_CV in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYKTCVAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
