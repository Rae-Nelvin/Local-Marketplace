<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    
    /**
     * Has-many relations to PesananDetail
     *
     * @return void
     */
    public function PesananDetail()
    {
        return $this->hasMany('App\PesananDetail','barang_id','id');
    }

}
