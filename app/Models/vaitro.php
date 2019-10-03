<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class vaitro extends Model
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
    protected $table = 'vaitro';

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
                  'TEN_VT'
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



}
