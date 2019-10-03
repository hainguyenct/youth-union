<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dantoc extends Model
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
    protected $table = 'dantoc';

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
                  'TEN_DT'
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
     * Get the doanvienThanhnien for this model.
     *
     * @return App\Models\DoanvienThanhnien
     */
    public function doanvienThanhnien()
    {
        return $this->hasOne('App\Models\doanvien_thanhnien','DANTOC_ID','ID');
    }



}
