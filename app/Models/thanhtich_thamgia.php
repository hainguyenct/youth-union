<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thanhtich_thamgia extends Model
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
    protected $table = 'thanhtich_thamgia';

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
                  'PT_DOANKHOA_ID',
                  'THANHTICH_ID',
                  'DIENGIAI'
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
     * Get the PtDoankhoa for this model.
     *
     * @return App\Models\PtDoankhoa
     */
    public function PtDoankhoa()
    {
        return $this->belongsTo('App\Models\pt_doankhoa','PT_DOANKHOA_ID','ID');
    }

    /**
     * Get the Thanhtich for this model.
     *
     * @return App\Models\Thanhtich
     */
    public function Thanhtich()
    {
        return $this->belongsTo('App\Models\thanhtich','THANHTICH_ID','ID');
    }



}
