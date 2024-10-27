<?php

// controllers/UserController.php
require_once 'models/UserModel.php';

class UserController {
    private $userModel;

    public function __construct($db) {
        $this->userModel = new UserModel($db);
    }

    public function index() {
        $users = $this->userModel->getAllUsers();
        require 'views/user/index.php';
    }

    public function detail($id) {
        $user = $this->userModel->getUserById($id);
        require 'views/user/detail.php';
    }
}
?>