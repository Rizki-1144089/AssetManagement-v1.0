<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use App\Models\KategoriBarang;
use App\Models\Lokasi;
use Illuminate\Http\Request;
use App\Repositories\BarangRepository;
use DB;

class BarangController extends Controller
{
    private $barang;

    public function __construct(BarangRepository $barang)
    {
      $this->barang = $barang;
    }

    // public function getAll()
    // {
    //    $applies = $this->apply->getAllPage(10);
    //    return view('content.apply.apply', compact('applies'));
    // }

    public function index()
    {
        //return view('TampilBarang');
        $with = ['kategori','lokasi'];
        // $barang = Barang::all();
        $barang = $this->barang->getAllWith($with);
        // $barang = Barang::with($kategori)->get();
        // dd($barang);

        return view('content.Barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = KategoriBarang::all();
        $lokasi = Lokasi::all();
        return view('content.Barang.add', compact('kategori','lokasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'nama_barang' => 'required',
        'id_kategori' => 'required',
        'id_lokasi' => 'required',
        'tahun' => 'required'
    ]);
        $attributes = $request->only('nama_barang','id_kategori','id_lokasi','tahun');
        $barang = $this->barang->create($attributes);
        // dd($barang);
        return redirect('Barang/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $with = ['kategori','lokasi'];
        $barang = $this->barang->getWith($with,$id);
        // $barang = $this->barang->getById($id);
        // dd($barang);
        return view('content.Barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = KategoriBarang::all();
        $lokasi = Lokasi::all();
        $barang = $this->barang->getById($id);
        return view('content.Barang.edit', compact('barang','kategori','lokasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     $attributes = $request->only('nama_barang','id_kategori','id_lokasi','tahun');
    //     $barang = $this->barang->update($attributes, $id);
    //     $barang = $this->barang->getById($id);
    //     return redirect('barang/');
    // }

    public function update($id, Request $request)
    {
        $attributes = $request->only('nama_barang','id_kategori','id_lokasi','tahun');
        $barang = $this->barang->update($id, $attributes);
        $barang = $this->barang->getById($id);
        // dd($barang);
        return redirect('Barang/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barang = $this->barang->destroy($id);
        return back();
    }
}
