<?php
include_once('DAO/TrangChuDAO.php');
class TrangChuController
{
    public function index()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 4) {
                $trangChuDAO = new TrangChuDAO();
                $doanh_thu = $trangChuDAO->show_thong_ke();
                $don_hang = $trangChuDAO->don_hang();
                $don_hanh_chua_giao = $trangChuDAO->don_hang_chua_giao();
                $lien_he = $trangChuDAO->phanhoi();
                $all_san_pham = $trangChuDAO->all_san_pahm();
                $san_pham = $trangChuDAO->List_san_pham();
                $bill = $trangChuDAO->all_don_hang();
                include_once('views/trangChu/admin/Home.php');
            } else {
                include_once('views/trangChu/user/Home.php');
            }
        } else {
            header("Location: index.php?controller=dangNhap");
        }
    }
}
