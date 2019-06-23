<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $nama
 * @property int $stock
 * @property int $harga
 */
class BahanBaku extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'bahan_baku';

    /**
     * @var array
     */
    protected $fillable = ['nama', 'stock'];

}
