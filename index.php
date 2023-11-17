<?php
session_start();
include 'controllers/DangNhapController.php';
include 'controllers/TrangChuController.php';
include 'controllers/SanPhamController.php';
include 'controllers/GioHangController.php';
include 'controllers/LoaiSanPhamController.php';
include 'controllers/BoTruyenController.php';
include 'controllers/DonHangController.php';
include 'controllers/NhaPhatHanhController.php';
include 'controllers/NhaXuatBanController.php';
include 'controllers/TacGiaController.php';
include 'controllers/TaiKhoanController.php';
include 'controllers/ChatBoxController.php';
include 'controllers/BinhLuanController.php';

$controller = $_GET['controller'] ?? 'trangChu';
// routing controller
switch ($controller) {
    case 'trangChu':
        $trangChuController = new trangChuController();
        $trangChuController->index();
        break;
    case 'login':
        $DangNhapController = new DangNhapController();
        $DangNhapController->index();
        break;
    case 'signup':
        $DangNhapController = new DangNhapController();
        $DangNhapController->signup();
        break;
    case 'logout':
        $DangNhapController = new DangNhapController();
        $DangNhapController->logout();
        break;
    case 'forgot':
        break;
    case 'sanPham':
        $SanPhamController = new SanPhamController();
        $SanPhamController->index();
        break;
    case 'sanPham_Detail':
        $SanPhamController = new SanPhamController();
        $SanPhamController->sanPhamDetail();
        break;
    case 'nhaPhatHanh':
        $NhaPhathanhController = new NhaphathanhController();
        $NhaPhathanhController->index();
        break;
    case 'nhaPhatHanh_add':
        $NhaPhathanhController = new NhaphathanhController();
        $NhaPhathanhController->index();
        break;
    case 'nhaPhatHanh_fix':
        $NhaPhathanhController = new NhaphathanhController();
        $NhaPhathanhController->index();
        break;
    case 'nhaPhatHanh_delete':
        $NhaPhathanhController = new NhaphathanhController();
        $NhaPhathanhController->index();
        break;
    case 'nhaXuatBan':
        $NhaXuatController = new NhaXuatBanController();
        $NhaXuatController->index();
        break;
    case 'nhaXuatBan_add':
        $NhaXuatController = new NhaXuatBanController();
        $NhaXuatController->index();
        break;
    case 'nhaXuatBan_fix':
        $NhaXuatController = new NhaXuatBanController();
        $NhaXuatController->index();
        break;
    case 'nhaXuatBan_delete':
        $NhaXuatController = new NhaXuatBanController();
        $NhaXuatController->index();
        break;
    case 'donHang':
        $DonHangController = new DonHangController();
        $DonHangController->index();
        break;
    case 'donHang_add':
        $DonHangController = new DonHangController();
        $DonHangController->index();
        break;
    case 'donHang_fix':
        $DonHangController = new DonHangController();
        $DonHangController->index();
        break;
    case 'donHang_delete':
        $DonHangController = new DonHangController();
        $DonHangController->index();
        break;
    case 'boTruyen':
        $BoTruyenController = new BoTruyenController();
        $BoTruyenController->index();
        break;
    case 'boTruyen_add':
        $BoTruyenController = new BoTruyenController();
        $BoTruyenController->add();
        break;
    case 'boTruyen_fix':
        $BoTruyenController = new BoTruyenController();
        $BoTruyenController->index();
        break;
    case 'boTruyen_delete':
        $BoTruyenController = new BoTruyenController();
        $BoTruyenController->index();
        break;
    case 'loaisanpham':
        $loaiSanPhamController = new LoaiSanPhamController();
        $loaiSanPhamController->index();
        break;
    case 'loaisanpham_add':
        $loaiSanPhamController = new LoaiSanPhamController();
        $loaiSanPhamController->index();
        break;
    case 'loaisanpham_fix':
        $loaiSanPhamController = new LoaiSanPhamController();
        $loaiSanPhamController->index();
        break;
    case 'loaisanpham_delete':
        $loaiSanPhamController = new LoaiSanPhamController();
        $loaiSanPhamController->index();
        break;
    case 'tacGia':
        $TacGiaController = new TacGiaController();
        $TacGiaController->index();
        break;
    case 'tacGia_add':
        $TacGiaController = new TacGiaController();
        $TacGiaController->add();
        break;
    case 'tacGia_fix':
        $TacGiaController = new TacGiaController();
        $TacGiaController->update();
        break;
    case 'tacGia_delete':
        $TacGiaController = new TacGiaController();
        $TacGiaController->delete();
        break;
    case 'taiKhoan':
        $TaiKhoansController = new TaiKhoanController();
        $TaiKhoansController->index();
        break;
    case 'taiKhoan_add':
        $TaiKhoansController = new TaiKhoanController();
        $TaiKhoansController->add();
        break;
    case 'taiKhoan_fix':
        $TaiKhoansController = new TaiKhoanController();
        $TaiKhoansController->fix();
        break;
    case 'taiKhoan_delete':
        $TaiKhoansController = new TaiKhoanController();
        $TaiKhoansController->delete();
        break;
    case 'binhLuan':
        $BinhLuanController = new BinhLuanController();
        $BinhLuanController->index();
        break;
    case 'binhLuan_add':
        break;
    case 'binhLuan_delete':
        break;
    case 'theodoi':
        break;
    case 'theodoi_add':
        break;
    case 'theodoi_delete':
        break;
    case 'giohang':
        break;
    case 'giohang_add':
        break;
    case 'giohang_fix':
        break;
    case 'giohang_delete':
        break;
    case 'chatBox':
        $ChatBoxController = new ChatBoxController();
        $ChatBoxController->index();
        break;
    case 'chatBox_mes':
        $ChatBoxController = new ChatBoxController();
        $ChatBoxController->chat();
        break;
    default:
        break;
}
unset($_SESSION['error']);
