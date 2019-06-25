<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_penjualan
 * @property int $jumlah
 * @property User $user
 * @property Penjualan $penjualan
 */
class Keranjang extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'keranjang';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_penjualan', 'jumlah'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penjualan()
    {
        return $this->belongsTo('App\Penjualan', 'id_penjualan');
    }
}
