<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class thangnam extends Model
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
    protected $table = 'thangnam';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'thangnam',
                  'namhoc_id',
                  'sotien'
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
        return $this->belongsTo('App\Models\Namhoc','namhoc_id','id');
    }



}
