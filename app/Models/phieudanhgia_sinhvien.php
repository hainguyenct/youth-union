<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phieudanhgia_sinhvien extends Model
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
    protected $table = 'phieudanhgia_sinhvien';

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
                  'MAUPHIEU_ID',
                  'NAMHOC_ID',
                  'SINHVIEN_ID',
                  'XEPLOAI_SV_ID',
                  'TEN_PDGSV',
                  'DIEMRENLUYEN',
                  'DIEMTRUNGBINH'
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
     * Get the Mauphieu for this model.
     *
     * @return App\Models\Mauphieu
     */
    public function Mauphieu()
    {
        return $this->belongsTo('App\Models\mauphieu','MAUPHIEU_ID','ID');
    }

    /**
     * Get the nAMHOC for this model.
     *
     * @return App\Models\NAMHOC
     */
    public function nAMHOC()
    {
        return $this->belongsTo('App\Models\namhoc','NAMHOC_ID');
    }

    /**
     * Get the Sinhvien for this model.
     *
     * @return App\Models\Sinhvien
     */
    public function Sinhvien()
    {
        return $this->belongsTo('App\Models\sinhvien','SINHVIEN_ID','id');
    }

    /**
     * Get the xEPLOAISV for this model.
     *
     * @return App\Models\XEPLOAISV
     */
    public function xEPLOAISV()
    {
        return $this->belongsTo('App\Models\xeploai_sv','XEPLOAI_SV_ID');
    }



}
