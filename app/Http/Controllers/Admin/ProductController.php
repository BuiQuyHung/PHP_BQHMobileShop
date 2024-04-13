<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service\Sach\SachServiceInterface;

use App\Service\TheLoaiSach\TheLoaiSachServiceInterface;
use App\Service\NhaXuatBan\NhaXuatBanServiceInterface;
use App\Service\NhaCungCap\NhaCungCapServiceInterface;
use App\Service\TacGia\TacGiaServiceInterface;

class ProductController extends Controller
{
    private $sachService;
    private $theloaisachService;
    private $nhaxuatbanService;
    private $tacgiaService;
    private $nhacungcapService;


    public function __construct(SachServiceInterface $sachService, TheLoaiSachServiceInterface $theloaisachService, NhaXuatBanServiceInterface $nhaxuatbanService, TacGiaServiceInterface $tacgiaService, NhaCungCapServiceInterface $nhacungcapService)
    {
        $this->sachService = $sachService;
        $this->theloaisachService = $theloaisachService;
        $this->nhaxuatbanService = $nhaxuatbanService;
        $this->tacgiaService = $tacgiaService;
        $this->nhacungcapService = $nhacungcapService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sachs = $this->sachService->searchAndPaginate('TenSach', $request->get('search'));
        return view('admin.product.index', compact('sachs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $theloaisach = $this->theloaisachService->all();
        $nhaxuatban = $this->nhaxuatbanService->all();
        $tacgia = $this->tacgiaService->all();
        $nhacungcap = $this->nhacungcapService->all();

        return view('admin.product.create', compact('theloaisach', 'nhaxuatban', 'tacgia', 'nhacungcap'));
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
        $sach = $this->sachService->create($data);
        return redirect('admin/product/' . $sach->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($MaSach)
    {
        $sach = $this->sachService->find($MaSach);
        return view('admin.product.show', compact('sach'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($MaSach)
    {
        $sach = $this->sachService->find($MaSach);
        $theloaisach = $this->theloaisachService->all();
        $nhaxuatban = $this->nhaxuatbanService->all();
        $tacgia = $this->tacgiaService->all();
        $nhacungcap = $this->nhacungcapService->all();

        return view('admin.product.edit', compact('theloaisach', 'nhaxuatban', 'tacgia', 'nhacungcap', 'sach'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $MaSach)
    {
        $data = $request->all();
        $this->sachService->update($data, $MaSach);
        return redirect('admin/product/' . $MaSach);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($MaSach)
    {
        $this->sachService->delete($MaSach);
        return redirect('admin/product/');
    }
}
