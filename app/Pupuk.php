<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $jenis
 * @property int $stock
 * @property int $harga
 * @property string $gambar
 */
class Pupuk extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'pupuk';

    /**
     * @var array
     */
    protected $fillable = ['jenis', 'stock', 'harga', 'gambar'];

}