<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriItem extends Model
{
    use HasFactory;

    public function masterItems(){
        return $this->belongsTo(
            MasterItem::class,
            'kategori_master_item'
        );
    } 
}
