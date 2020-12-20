<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static
 */
class Rnc extends Model
{
    use HasFactory;

    public function scopeBusquedaRnc($query, $rnc)
    {
        return $query->where('rnc_empresa', $rnc);
    }
}
