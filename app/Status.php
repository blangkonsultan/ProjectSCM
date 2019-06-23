<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $status
 */
class Status extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'status';

    /**
     * @var array
     */
    protected $fillable = ['status'];

}
