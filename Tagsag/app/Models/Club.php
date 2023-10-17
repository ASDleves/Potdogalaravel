<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $primaryKey = 'club_id';

    protected $fillable = [
        'establishment',
        'location',
        'max_number'
    ];
    public function memberships()
    {
        return $this->hasMany(Membership::class, 'club_id');
    }
}
