<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    
    /**
     * Has-many relations to Stock
     *
     * @return void
     */
    public function barang()
    {
        return $this->belongsTo('App\Stock','barang_id','id');
    }
    
    /**
     * Has-many relations to Pesanan
     *
     * @return void
     */
    public function pesanan()
    {
        return $this->belongsTo('App\Pesanan','pesanan_id','id');
    }

}
