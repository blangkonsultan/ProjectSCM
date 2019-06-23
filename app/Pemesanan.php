<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_jenis
 * @property int $id_status
 * @property int $id_barang
 * @property string $tgl_pesan
 * @property int $jumlah
 * @property int $total_harga
 * @property StatusBayar $statusBayar
 * @property User $user
 * @property JenisBarang $jenisBarang
 * @property Status $status
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
    protected $fillable = ['id_user', 'id_jenis', 'id_status', 'id_barang', 'tgl_pesan', 'jumlah', 'total_harga'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function statusBayar()
    {
        return $this->belongsTo('App\StatusBayar', 'id_status', 'id_status');
    }

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function status()
    {
        return $this->belongsTo('App\Status', 'id_status');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pembayarans()
    {
        return $this->hasMany('App\Pembayaran', 'id_pemesanan');
    }
}
