<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_pemesanan
 * @property string $nama
 * @property string $no_rek
 * @property string $tanggal_bayar
 * @property string $bukti
 * @property Pemesanan $pemesanan
 */
class Pembayaran extends Model
{
    public $timestamps = false;
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pembayaran';

    /**
     * @var array
     */
    protected $fillable = ['id_pemesanan', 'nama', 'no_rek', 'tanggal_bayar', 'bukti'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pemesanan()
    {
        return $this->belongsTo('App\Pemesanan', 'id_pemesanan', 'id_pemesanan');
    }
}
