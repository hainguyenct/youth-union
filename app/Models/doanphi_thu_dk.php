<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doanphi_thu_dk extends Model
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
    protected $table = 'doanphi_thu_dk';

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
                  'DOANKHOA_ID',
                  'THANGNAM_ID',
                  'NGAY_DONG_DK'
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
     * Get the Doankhoa for this model.
     *
     * @return App\Models\Doankhoa
     */
    public function Doankhoa()
    {
        return $this->belongsTo('App\Models\doankhoa','DOANKHOA_ID','ID');
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
     * Set the NGAY_DONG_DK.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYDONGDKAttribute($value)
    {
        $this->attributes['NGAY_DONG_DK'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
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
     * Get NGAY_DONG_DK in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYDONGDKAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
