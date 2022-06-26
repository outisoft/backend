<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    use HasFactory;
    protected $table = 'propiedades';
    protected $fillable = ['name','description','address_id','price','rooms','beds','baths','tipo'];

    public function address()
    {
        return $this->belongsToMany(Address::class);
    }
    public function tipos()
    {
        return $this->belongsToMany(Tipo::class);
    }
}
