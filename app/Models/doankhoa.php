<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class doankhoa extends Model
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
    protected $table = 'doankhoa';

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
                  'PHIEUDANHGIA_DOANKHOA_ID',
                  'TEN_DK'
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
     * Get the PhieudanhgiaDoankhoa for this model.
     *
     * @return App\Models\PhieudanhgiaDoankhoa
     */
    public function PhieudanhgiaDoankhoa()
    {
        return $this->belongsTo('App\Models\phieudanhgia_doankhoa','PHIEUDANHGIA_DOANKHOA_ID','ID');
    }

    /**
     * Get the chidoan for this model.
     *
     * @return App\Models\Chidoan
     */
    public function chidoan()
    {
        return $this->hasOne('App\Models\chidoan','DOANKHOA_ID','ID');
    }

    /**
     * Get the doanphiChiDk for this model.
     *
     * @return App\Models\DoanphiChiDk
     */
    public function doanphiChiDk()
    {
        return $this->hasOne('App\Models\doanphi_chi_dk','DOANKHOA_ID','ID');
    }

    /**
     * Get the doanphiThuDk for this model.
     *
     * @return App\Models\DoanphiThuDk
     */
    public function doanphiThuDk()
    {
        return $this->hasOne('App\Models\doanphi_thu_dk','DOANKHOA_ID','ID');
    }

    /**
     * Get the ptDoankhoa for this model.
     *
     * @return App\Models\PtDoankhoa
     */
    public function ptDoankhoa()
    {
        return $this->hasOne('App\Models\pt_doankhoa','DOANKHOA_ID','ID');
    }



}
