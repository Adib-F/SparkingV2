<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    use HasFactory;
    protected $table = 'slot';
    protected $guarded = [];

    public function subzona()
    {
        return $this->belongsTo(Subzona::class, 'subzona_id');
    }

    public function logs()
    {
        return $this->hasMany(SlotLog::class, 'slot_id');
    }
}
