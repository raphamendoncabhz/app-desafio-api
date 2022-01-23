<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LicensePlate extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'client_id',];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
