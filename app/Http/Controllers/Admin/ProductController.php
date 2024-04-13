<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\SanPham\SanPhamServiceInterface;

use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;
use App\Service\NhaCungCap\NhaCungCapServiceInterface;

class ProductController extends Controller
{
    private $sanphamService;
    private $theloaisanphamService;
    private $nhacungcapService;


    public function __construct(SanPhamServiceInterface $sanphamService, TheLoaiSanPhamServiceInterface $theloaisanphamService, NhaCungCapServiceInterface $nhacungcapService)
    {
        $this->sanphamService = $sanphamService;
        $this->theloaisanphamService = $theloaisanphamService;
        $this->nhacungcapService = $nhacungcapService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sanphams = $this->sanphamService->searchAndPaginate('TenSP', $request->get('search'));
        return view('admin.product.index', compact('sanphams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloaisanpham = $this->theloaisanphamService->all();
        $nhacungcap = $this->nhacungcapService->all();

        return view('admin.product.create', compact('theloaisanpham', 'nhacungcap'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $sanpham = $this->sanphamService->create($data);
        return redirect('admin/product/' . $sanpham->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($MaSP)
    {
        $sanpham = $this->sanphamService->find($MaSP);
        return view('admin.product.show', compact('sanpham'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($MaSP)
    {
        $sanpham = $this->sanphamService->find($MaSP);
        $theloaisanpham = $this->theloaisanphamService->all();
        $nhacungcap = $this->nhacungcapService->all();

        return view('admin.product.edit', compact('theloaisanpham', 'nhacungcap', 'sanpham'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaSP)
    {
        $data = $request->all();
        $this->sanphamService->update($data, $MaSP);
        return redirect('admin/product/' . $MaSP);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaSP)
    {
        $this->sanphamService->delete($MaSP);
        return redirect('admin/product/');
    }
}
