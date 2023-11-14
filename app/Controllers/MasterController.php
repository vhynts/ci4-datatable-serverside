<?php

namespace App\Controllers;

use \CodeIgniter\Controller;

use App\Models\LocationModel;

use \Hermawan\DataTables\DataTable;

class MasterController extends Controller
{

    public function index()
    {
        $location = new LocationModel();

        $data = [
            'title' => 'Item',
            'sub_title' => 'Master',
            'page_title' => 'Daftar Item',
            'location' => $location->findAll()
        ];
        helper('url');
        return view('zmaster/item', $data);
    }

    public function ajaxMasterItem()
    {
        $db = db_connect();
        $builder = $db->table('tbl_item a')
            // ->select('kodeitem as a, namaitem, satuan, hargapokok, dept');
            ->select('a.kodeitem as itemcode, a.namaitem as itemname, a.satuan as unit, b.stok as stock, a.hargapokok as price, b.kantor as loc')
            ->join('tbl_itemstok b', 'b.kodeitem = a.kodeitem', 'left');
        // ->orderBy('itemname', 'asc');
        // $builder = $db
        //     ->table('tbl_item')
        //     ->select('kodeitem, namaitem, satuan, hargapokok, dept');

        return DataTable::of($builder)
            ->setSearchableColumns(['a.kodeitem', 'a.namaitem'])
            ->filter(function ($builder, $request) {

                if ($request->location)
                    $builder->where('b.kantor', $request->location);
            })

            ->add('action', function () {
                return '<a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-pencil-square text-primary"></i></a>';
            })

            //it will return data output with numbering on first column
            ->toJson(true);
    }

    public function item_detail()
    {
        $data = [
            'title' => 'Item',
            'sub_title' => 'Master',
            'page_title' => 'Detail Item'
        ];
        helper('url');
        return view('zmaster/item_detail', $data);
    }
}
