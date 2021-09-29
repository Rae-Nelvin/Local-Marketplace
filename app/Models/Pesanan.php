<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    
    /**
     * Has-many relations to user ID
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo('App\User','user_id','id');
    }
    
    /**
     * Has-many relations to PesananDetail
     *
     * @return void
     */
    public function PesananDetail()
    {
        return $this->hasMany('App\PesananDetail','pesanan_id','id');
    }
    
}
