<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class chitiet_bau_ut extends Model
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
    protected $table = 'chitiet_bau_ut';

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
                  'PHIEUDANHGIA_DOANVIEN_ID',
                  'PHIEUBAU_UUTU_ID',
                  'SOPHIEU_DONGY',
                  'DUYET_BAU'
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
     * Get the PhieudanhgiaDoanvien for this model.
     *
     * @return App\Models\PhieudanhgiaDoanvien
     */
    public function PhieudanhgiaDoanvien()
    {
        return $this->belongsTo('App\Models\phieudanhgia_doanvien','PHIEUDANHGIA_DOANVIEN_ID','ID');
    }

    /**
     * Get the PhieubauUutu for this model.
     *
     * @return App\Models\PhieubauUutu
     */
    public function PhieubauUutu()
    {
        return $this->belongsTo('App\Models\phieubau_uutu','PHIEUBAU_UUTU_ID','ID');
    }



}
