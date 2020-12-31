<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'commandes_addresses';

    protected $fillable = [
        'wilaya_id',
        'district_id',
        'daira_id',
        'street'
    ];

    public function user(){
        $this->belongsTo(User::class);
    }

    public function wilaya(){
        $this->hasOne(Wilaya::class);
    }
    public function district() {
        $this->hasOne(District::class);
    }
    public function daria() {
        $this->hasOne(Daira::class);
    }
}
