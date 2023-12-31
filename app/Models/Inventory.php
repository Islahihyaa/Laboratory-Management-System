<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $guarded = ['id'];

    protected $fillable = ['roomCapacity', 'computerAvaiable', 'screenProjector', 'screenProjector', 'projector', 'labolatoryId'];

    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class, 'laboratoryId', 'id');
    }
}
