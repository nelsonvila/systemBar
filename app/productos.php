<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $descripcion
 * @property string $codigo
 * @property float $precio
 * @property float $costo
 * @property integer $stock
 * @property string $created_at
 * @property string $updated_at
 */
class productos extends Model
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
    protected $fillable = ['descripcion', 'codigo', 'precio', 'costo', 'stock', 'created_at', 'updated_at'];

}
