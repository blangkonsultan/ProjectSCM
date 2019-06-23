<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $jenis
 * @property Pemesanan[] $pemesanans
 */
class JenisBarang extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'jenis_barang';

    /**
     * @var array
     */
    protected $fillable = ['jenis'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan', 'id_jenis');
    }
}
