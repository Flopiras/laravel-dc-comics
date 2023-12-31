<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    public function get_abstract()
    {
        return substr(($this->description), 0, 30);
    }

    protected $fillable = ['title', 'description', 'thumb', 'price', 'series', 'sale_date', 'type', 'artists', 'writers'];
}
