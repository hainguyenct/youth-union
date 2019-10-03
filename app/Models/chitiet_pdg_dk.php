<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitiet_pdg_dk extends Model
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
    protected $table = 'chitiet_pdg_dk';

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
                  'PHIEUDANHGIA_DOANKHOA_ID',
                  'NOIDUNG_PDG_ID',
                  'DIEM_DUYET_PDGDK',
                  'DIEM_DK_TUDANHGIA',
                  'GHICHU_PDGDK'
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
     * Get the NoidungPdg for this model.
     *
     * @return App\Models\NoidungPdg
     */
    public function NoidungPdg()
    {
        return $this->belongsTo('App\Models\noidung_pdg','NOIDUNG_PDG_ID','ID');
    }



}
