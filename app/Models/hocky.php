<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class hocky extends Model
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
    protected $table = 'hocky';

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
                  'NAMHOC_ID',
                  'TEN_HK'
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
     * Get the Namhoc for this model.
     *
     * @return App\Models\Namhoc
     */
    public function Namhoc()
    {
        return $this->belongsTo('App\Models\namhoc','NAMHOC_ID','ID');
    }

    /**
     * Get the ptChidoan for this model.
     *
     * @return App\Models\PtChidoan
     */
    public function ptChidoan()
    {
        return $this->hasOne('App\Models\pt_chidoan','HOCKY_ID','ID');
    }

    /**
     * Get the ptDoankhoa for this model.
     *
     * @return App\Models\PtDoankhoa
     */
    public function ptDoankhoa()
    {
        return $this->hasOne('App\Models\pt_doankhoa','HOCKY_ID','ID');
    }



}
