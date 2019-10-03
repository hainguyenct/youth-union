<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitiet_ktkl extends Model
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
    protected $table = 'chitiet_ktkl';

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
                  'KHENTHUONG_KYLUAT_ID',
                  'NOIDUNG_KTKL',
                  'NGAYBATDAU'
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
     * Get the KhenthuongKyluat for this model.
     *
     * @return App\Models\KhenthuongKyluat
     */
    public function KhenthuongKyluat()
    {
        return $this->belongsTo('App\Models\khenthuong_kyluat','KHENTHUONG_KYLUAT_ID','ID');
    }

    /**
     * Set the NGAYBATDAU.
     *
     * @param  string  $value
     * @return void
     */
    public function setNGAYBATDAUAttribute($value)
    {
        $this->attributes['NGAYBATDAU'] = !empty($value) ? \DateTime::createFromFormat('[% date_format %]', $value) : null;
    }

    /**
     * Get NGAYBATDAU in array format
     *
     * @param  string  $value
     * @return array
     */
    public function getNGAYBATDAUAttribute($value)
    {
        return \DateTime::createFromFormat($this->getDateFormat(), $value)->format('j/n/Y g:i A');
    }

}
