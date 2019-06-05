<?php

class User {

    private $fields = [];

    public function __construct($id) {
        $database = new Connection;
        $db = $database->openVerbinding();

        $query = $db->prepare('SELECT * FROM users WHERE id = :id');
        $query->execute(array(
            ':id' => $id
        ));

        if ($query->rowCount() == 1) {
            foreach ($query->fetch() as $key => $value) {
                $this->fields[$key] = $value;
            }
        }
    }

    public function data($key) {

        if (isset($this->fields[$key]) && $key !== 'password') {
            return $this->fields[$key];
        }

        return false;
    }

    public function login($password) {
        return password_verify($password, $this->fields['password']);
    }

    public function logout() {
        if (isset($_SESSION['id'])) {
            unset($_SESSION['id']);
            session_destroy();
        }

        header('Location: aanmelden.php');
    }

    public static function loggedinUser() {
        return isset($_SESSION['id']);
    }

    public static function checkUser($username) {
        $database = new Connection;
        $db = $database->openVerbinding();

        $query = $db->prepare('SELECT * FROM users WHERE username = :username');
        $query->execute(array(
            ':username' => $username
        ));

        if ($query->rowCount() == 1) {
            $getUserId = $query->fetch();
            return new self($getUserId['id']);
        }

        return false;
    }

}

?>