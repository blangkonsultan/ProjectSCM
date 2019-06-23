<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $jenis
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

}
