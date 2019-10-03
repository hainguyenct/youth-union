<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loai_pt extends Model
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
    protected $table = 'loai_pt';

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
                  'TEN_LOAI_PT'
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
     * Get the ptChidoan for this model.
     *
     * @return App\Models\PtChidoan
     */
    public function ptChidoan()
    {
        return $this->hasOne('App\Models\pt_chidoan','LOAI_PT_ID','ID');
    }

    /**
     * Get the ptDoankhoa for this model.
     *
     * @return App\Models\PtDoankhoa
     */
    public function ptDoankhoa()
    {
        return $this->hasOne('App\Models\pt_doankhoa','LOAI_PT_ID','ID');
    }



}
