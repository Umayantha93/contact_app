<?php

namespace App\Models;

use App\Scopes\FilterScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'address', 'company_id'];

    public function company(){
       return $this->belongsTo(Company::class);
    }

    public function scopeLatestFirst($query) {
        return $query->orderBy('id', 'desc');
    }

    public static function boot() {

        parent::boot();

        static::addGlobalScope(new FilterScope);

    }
}
