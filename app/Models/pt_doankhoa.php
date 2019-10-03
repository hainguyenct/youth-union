<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pt_doankhoa extends Model
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
    protected $table = 'pt_doankhoa';

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
                  'LOAI_PT_ID',
                  'DOANKHOA_ID',
                  'DOANPHI_CHI_DK_ID',
                  'HOCKY_ID',
                  'TEN_PT_DK',
                  'NGAY_BT_PT_DK',
                  'NGAY_KT_PT_DK',
                  'GHICHU_PT_DK'
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
     * Get the LoaiPt for this model.
     *
     * @return App\Models\LoaiPt
     */
    public function LoaiPt()
    {
        return $this->belongsTo('App\Models\loai_pt','LOAI_PT_ID','ID');
    }

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
     * Get the DoanphiChiDk for this model.
     *
     * @return App\Models\DoanphiChiDk
     */
    public function DoanphiChiDk()
    {
        return $this->belongsTo('App\Models\doanphi_chi_dk','DOANPHI_CHI_DK_ID','ID');
    }

    /**
     * Get the Hocky for this model.
     *
     * @return App\Models\Hocky
     */
    public function Hocky()
    {
        return $this->belongsTo('App\Models\hocky','HOCKY_ID','ID');
    }

    /**
     * Get the thanhtichThamgium for this model.
     *
     * @return App\Models\ThanhtichThamgium
     */
    public function thanhtichThamgium()
    {
        return $this->hasOne('App\Models\thanhtich_thamgia','PT_DOANKHOA_ID','ID');
    }

    /**
     * Set the NGAY_BT_PT_DK.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYBTPTDKAttribute($value)
    {
        $this->attributes['NGAY_BT_PT_DK'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Set the NGAY_KT_PT_DK.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYKTPTDKAttribute($value)
    {
        $this->attributes['NGAY_KT_PT_DK'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAY_BT_PT_DK in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYBTPTDKAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

    /**
     * Get NGAY_KT_PT_DK in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYKTPTDKAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
