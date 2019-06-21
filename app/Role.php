<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $level
 * @property User[] $users
 */
class Role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['level'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\User', 'id_level');
    }
}
