<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_penjualan
 * @property int $id_status
 * @property string $tgl_pesan
 * @property int $jumlah
 * @property int $total_harga
 * @property User $user
 * @property Status $status
 * @property Penjualan $penjualan
 * @property Pembayaran[] $pembayarans
 */
class Pemesanan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pemesanan';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_penjualan', 'id_status', 'tgl_pesan', 'jumlah', 'total_harga'];

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
    public function status()
    {
        return $this->belongsTo('App\Status', 'id_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function penjualan()
    {
        return $this->belongsTo('App\Penjualan', 'id_penjualan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pembayarans()
    {
        return $this->hasMany('App\Pembayaran', 'id_pemesanan');
    }
}
