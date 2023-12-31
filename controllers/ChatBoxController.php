<?php
include_once 'DAO/ChatBoxDAO.php';
class ChatBoxController
{
    public function index()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 4) {
                include_once "views/chatbox/admin/users.php";
            } else {
                $ChatBoxDAO = new User();
                $id = $ChatBoxDAO->getId();
                include_once "views/chatbox/user/chatbox.php";
            }
        } else {
            header("Location: index.php?controller=login");
        }
    }
    public function chat()
    {
        if (isset($_SESSION['role'])) {
            if ($_SESSION['role'] != 4) {
                include_once "views/chatbox/admin/chatbox.php";
            } else {
                $ChatBoxDAO = new User();
                $id = $ChatBoxDAO->getId();
                include_once "views/chatbox/user/chatbox.php";
            }
        } else {
            header("Location: index.php?controller=login");
        }
    }
}
