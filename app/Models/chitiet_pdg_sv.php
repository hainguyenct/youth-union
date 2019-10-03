<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitiet_pdg_sv extends Model
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
    protected $table = 'chitiet_pdg_sv';

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
                  'PHIEUDANHGIA_SINHVIEN_ID',
                  'NOIDUNG_PDG_ID',
                  'DIEM_DUYET_PDGSV',
                  'DIEM_SV_TUDANHGIA',
                  'GHICHU_PDGSV'
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
     * Get the PhieudanhgiaSinhvien for this model.
     *
     * @return App\Models\PhieudanhgiaSinhvien
     */
    public function PhieudanhgiaSinhvien()
    {
        return $this->belongsTo('App\Models\phieudanhgia_sinhvien','PHIEUDANHGIA_SINHVIEN_ID','ID');
    }

    /**
     * Get the NoidungPdg for this model.
     *
     * @return App\Models\NoidungPdg
     */
    public function NoidungPdg()
    {
        return $this->belongsTo('App\Models\noidung_pdg','NOIDUNG_PDG_ID','ID');
    }



}
