<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InventoryRoom extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_inventory_room';

    protected $guarded = ['id_inventory_room'];

    protected $fillable = ['projector', 'projector_screen', 'computer', 'room_capacity', 'id_ruangan'];
}