<?php

namespace App\Http\Controllers;

use App\Models\KategoriItem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class KategoriItemsController extends Controller
{
    public function index(){
        return view('kategori_items.index.index');
    }

    public function search(Request $request)
    {
        $kode = $request->kode;
        $nama = $request->nama;

        $data_search = KategoriItem::query();

        if (!empty($kode)) $data_search = $data_search->where('kode', $kode);
        if (!empty($nama)) $data_search = $data_search->where('nama', 'LIKE', '%' . $nama . '%');

        $data_search = $data_search->select('kode', 'nama')->orderBy('id')->get();

        return json_encode([
            'status' => 200,
            'data' => $data_search
        ]);
    }

     public function formView($method, $id = 0)
    {
        if ($method == 'new') {
            $item = [];
        } else {
            $item = KategoriItem::find($id);
        }
        $data['item'] = $item;
        $data['method'] = $method;
        return view('kategori_items.form.index', $data);
    }

     public function formSubmit(Request $request, $method, $id = 0)
    {
        if ($method == 'new') {
            $data_item = new KategoriItem;
        } else {
            $data_item = KategoriItem::find($id);
        }
        
        $data_item->kode = $request->kode;
        $data_item->nama = $request->nama;
        $data_item->save();

        return redirect('kategori-items');
    }

    public function singleView($kode)
    {
        $data['data'] = KategoriItem::where('kode', $kode)->first();
        return view('kategori_items.single.index', $data);
    }

    public function delete($id)
    {
        KategoriItem::findOrFail($id)->delete();
        return redirect('kategori-items');
    }

    public function exportPdf($kode)
{
    $data = KategoriItem::where('kode', $kode)->firstOrFail();

    $pdf = Pdf::loadView('kategori_items.single.pdf', [
        'data' => $data
    ])->setPaper('A4', 'portrait');

    return $pdf->download('kategori-item-' . $data->kode . '.pdf');
}
}
