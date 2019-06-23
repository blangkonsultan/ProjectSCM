<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * @property integer $id
 * @property int $id_level
 * @property string $name
 * @property string $email
 * @property string $no_hp
 * @property string $email_verified_at
 * @property string $password
 * @property string $alamat
 * @property string $no_ktp
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property Role $role
 */
class User extends Authenticatable
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */

    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['id_level', 'name', 'email', 'email_verified_at', 'password', 'alamat', 'no_hp', 'no_ktp', 'no_ijin', 'remember_token'];
    protected $hidden = ['password', 'remember_token'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Role', 'id_level');
    }

    public function getRole(){
        return $this->role()->first()->level;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pemesanans()
    {
        return $this->hasMany('App\Pemesanan', 'id_user');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function penjualans()
    {
        return $this->hasMany('App\Penjualan', 'id_user');
    }
}

