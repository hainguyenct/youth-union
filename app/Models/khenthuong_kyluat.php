<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class khenthuong_kyluat extends Model
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
    protected $table = 'khenthuong_kyluat';

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
                  'LOAI_KTKL_ID',
                  'HINHTHUC_KTKL_ID',
                  'TEN_KTKL'
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
     * Get the LoaiKtkl for this model.
     *
     * @return App\Models\LoaiKtkl
     */
    public function LoaiKtkl()
    {
        return $this->belongsTo('App\Models\loai_ktkl','LOAI_KTKL_ID','ID');
    }

    /**
     * Get the HinhthucKtkl for this model.
     *
     * @return App\Models\HinhthucKtkl
     */
    public function HinhthucKtkl()
    {
        return $this->belongsTo('App\Models\hinhthuc_ktkl','HINHTHUC_KTKL_ID','ID');
    }

    /**
     * Get the chitietKtkl for this model.
     *
     * @return App\Models\ChitietKtkl
     */
    public function chitietKtkl()
    {
        return $this->hasOne('App\Models\chitiet_ktkl','KHENTHUONG_KYLUAT_ID','ID');
    }



}
