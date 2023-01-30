<?php
include_once 'models/User.php';
class UserController {
    // goi thoi trang danh sach
    public function index() {
        // goi model
        $objUser = new User();
        // Model thao tac voi CSDL, tra ve controller
        $items = $objUser->all();

        include_once 'views/users/list.php';
    }
}