<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Post extends Model
{
    protected $fillable = [
        'name',
        'description',
        'address',
        'benefit',
        'created_by'
    ];
    /**
     * @return hasOne
     */

     public function creator(): hasOne
     {
        return $this->hasOne(Profile::class, 'created_by');
     }
}
