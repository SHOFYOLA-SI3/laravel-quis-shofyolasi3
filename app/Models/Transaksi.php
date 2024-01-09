<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table = "tb__transaksi";

    protected $primaryKey = "id_pinjaman";

    protected $guarded = [];
}
