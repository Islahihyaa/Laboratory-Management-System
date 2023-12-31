<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $primaryKey = 'inventoryId';

    protected $guarded = ['inventoryId'];

    protected $fillable = ['roomCapacity', 'computerAvaiable', 'screenProjector', 'screenProjector', 'projector', 'id'];

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class, 'id', 'id');
    }
}
