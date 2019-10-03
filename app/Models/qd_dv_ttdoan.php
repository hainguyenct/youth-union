<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class qd_dv_ttdoan extends Model
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
    protected $table = 'qd_dv_ttdoan';

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
                  'DV_TT_DOAN_ID',
                  'DOANVIEN_THANHNIEN_ID',
                  'DUYET_TTD'
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
     * Get the DvTtDoan for this model.
     *
     * @return App\Models\DvTtDoan
     */
    public function DvTtDoan()
    {
        return $this->belongsTo('App\Models\dv_tt_doan','DV_TT_DOAN_ID','ID');
    }

    /**
     * Get the DoanvienThanhnien for this model.
     *
     * @return App\Models\DoanvienThanhnien
     */
    public function DoanvienThanhnien()
    {
        return $this->belongsTo('App\Models\doanvien_thanhnien','DOANVIEN_THANHNIEN_ID','ID');
    }



}
