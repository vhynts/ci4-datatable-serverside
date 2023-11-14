<?php

namespace App\Models;

use CodeIgniter\Model;

class LocationModel extends Model
{
    protected $table = 'tbl_kantor';
    protected $primaryKey = 'kodekantor';
    protected $allowedFields = ['kodekantor', 'namakantor'];
}
