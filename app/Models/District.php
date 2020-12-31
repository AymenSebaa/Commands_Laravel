<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'commandes_districts';

    protected $fillable = [
        'code',
        'name',
        'wilaya_id'
    ];

    public function wilaya(){
        $this->belongsTo(Wilaya::class);
    }
}
