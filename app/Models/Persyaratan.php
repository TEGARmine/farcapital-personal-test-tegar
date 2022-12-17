<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persyaratan extends Model
{
    use HasFactory;
    public $guarded = ["id"];
    protected $table = "persyaratan";

    public function persyaratan()
    {
        return $this->hashMany(Pendaftaran::class, 'id');
    }
}
