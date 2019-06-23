<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $id_user
 * @property int $id_bahan_baku
 * @property int $stok
 * @property int $harga
 * @property User $user
 * @property BahanBaku $bahanBaku
 */
class Penjualan extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'penjualan';

    /**
     * @var array
     */
    protected $fillable = ['id_user', 'id_bahan_baku', 'stok', 'harga'];

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
    public function bahanBaku()
    {
        return $this->belongsTo('App\BahanBaku', 'id_bahan_baku');
    }
}
