<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_jenis
 * @property int $id_barang
 * @property int $stok
 * @property int $harga
 * @property User $user
 * @property JenisBarang $jenisBarang
 * @property Pemesanan[] $pemesanans
 */
class Penjualan extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'penjualan';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_jenis', 'id_barang', 'stok', 'harga'];

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
    public function jenisBarang()
    {
        return $this->belongsTo('App\JenisBarang', 'id_jenis');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan', 'id_penjualan');
    }
}
