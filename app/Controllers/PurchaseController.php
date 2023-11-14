<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\LocationModel;

use \Hermawan\DataTables\DataTable;

class PurchaseController extends BaseController
{
    public function index()
    {
        $location = new LocationModel();

        $data = [
            'title' => 'Pembelian',
            'sub_title' => 'Master',
            'page_title' => 'Faktur Pembelian',
            'location' => $location->findAll()
        ];
        helper('url');
        return view('zpurchases/purchase_list', $data);
    }

    public function ajaxPurchaseList()
    {
        $db = db_connect();
        $builder = $db->table('tbl_imhd a')
            ->select('a.notransaksi as notrans, a.tanggal as date, b.nama as supname, a.keterangan as desc, a.totalakhir as total, a.user1 as userx, a.user2 as userz, a.kantortujuan as loc')
            ->join('tbl_supel b', 'b.kode = a.kodesupel', 'left')
            ->where('a.tipe', 'BL');
        // ->orderBy('a.tanggal', 'desc');


        return DataTable::of($builder)
            ->setSearchableColumns(['a.notransaksi', 'b.nama'])
            ->filter(function ($builder, $request) {

                if ($request->location)
                    $builder->where('a.kantortujuan', $request->location);
                if ($request->date1)
                    $builder->where('a.tanggal >=', $request->date1);
                if ($request->date2)
                    $builder->where('a.tanggal <=', $request->date2);
            })

            ->add('action', function () {
                return '<a href="javascript: void(0);" class="fs-16 px-1"> <i class="bi bi-pencil-square text-primary"></i></a>';
            })



            ->toJson(true);
    }
}
