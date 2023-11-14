<?php

namespace App\Models;

use CodeIgniter\Model;

class MasterModel extends Model
{
    protected $table = 'tbl_item';
    protected $primaryKey = 'kodeitem';
    protected $allowedFields = ['kodeitem', 'namaitem'];
}
