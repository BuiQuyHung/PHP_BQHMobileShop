<?php

namespace App\Providers;

use App\Models\SanPham;
use App\Models\TheLoaiSanPham;
use App\Repositories\SanPham\SanPhamRepository;
use App\Repositories\SanPham\SanPhamRepositoryInterface;
use App\Service\SanPham\SanPhamService;
use App\Service\SanPham\SanPhamServiceInterface;
use App\Repositories\TheLoaiSanPham\TheLoaiSanPhamRepository;
use App\Repositories\TheLoaiSanPham\TheLoaiSanPhamRepositoryInterface;
use App\Service\TheLoaiSanPham\TheLoaiSanPhamService;
use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Service\User\UserService;
use App\Service\User\UserServiceInterface;


use App\Service\NhaXuatBan\NhaXuatBanService;
use App\Service\NhaXuatBan\NhaXuatBanServiceInterface;
use App\Repositories\NhaXuatBan\NhaXuatBanRepository;
use App\Repositories\NhaXuatBan\NhaXuatBanRepositoryInterface;

use App\Service\NhaCungCap\NhaCungCapService;
use App\Service\NhaCungCap\NhaCungCapServiceInterface;
use App\Repositories\NhaCungCap\NhaCungCapRepository;
use App\Repositories\NhaCungCap\NhaCungCapRepositoryInterface;

use App\Service\TacGia\TacGiaService;
use App\Service\TacGia\TacGiaServiceInterface;
use App\Repositories\TacGia\TacGiaRepository;
use App\Repositories\TacGia\TacGiaRepositoryInterface;



use App\Repositories\DonHang\DonHangRepository;
use App\Repositories\DonHang\DonHangRepositoryInterface;
use App\Service\DonHang\DonHangService;
use App\Service\DonHang\DonHangServiceInterface;


use App\Repositories\ChiTietDonHang\ChiTietDonHangRepository;
use App\Repositories\ChiTietDonHang\ChiTietDonHangRepositoryInterface;
use App\Service\ChiTietDonHang\ChiTietDonHangService;
use App\Service\ChiTietDonHang\ChiTietDonHangServiceInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //SanPham
        $this->app->singleton(
            SanPhamRepositoryInterface::class,
            SanPhamRepository::class
        );
        $this->app->singleton(
            SanPhamServiceInterface::class,
            SanPhamService::class
        );
        $this->app->singleton(
            TheLoaiSanPhamRepositoryInterface::class,
            TheLoaiSanPhamRepository::class
        );
        $this->app->singleton(
            TheLoaiSanPhamServiceInterface::class,
            TheLoaiSanPhamService::class
        );
        $this->app->singleton(
            DonHangRepositoryInterface::class,
            DonHangRepository::class
        );
        $this->app->singleton(
            DonHangServiceInterface::class,
            DonHangService::class
        );
        $this->app->singleton(
            ChiTietDonHangRepositoryInterface::class,
            ChiTietDonHangRepository::class
        );
        $this->app->singleton(
            ChiTietDonHangServiceInterface::class,
            ChiTietDonHangService::class
        );
        $this->app->singleton(
            UserRepositoryInterface::class,
            UserRepository::class
        );
        $this->app->singleton(
            UserServiceInterface::class,
            UserService::class
        );

        $this->app->singleton(
            NhaCungCapRepositoryInterface::class,
            NhaCungCapRepository::class
        );
        $this->app->singleton(
            NhaCungCapServiceInterface::class,
            NhaCungCapService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
