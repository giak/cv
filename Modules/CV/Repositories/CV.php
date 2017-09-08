<?php
namespace Modules\CV\Entities;

use Illuminate\Database\Eloquent\Model;

class CV extends Model {
    protected $table    = 'cv';
    protected $fillable = [
        'nom',
        'prenom',
    ];
}
