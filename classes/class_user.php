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

        header('Location: ../index.php');
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

    public static function registreren($username, $achternaam, $password, $klas) {
        $database = new Connection;
        $db = $database->OpenVerbinding();

        $query = $db->prepare('INSERT INTO users (username, achternaam, password, klas) VALUES (:username, :achternaam, :password, :klas)');
        $query->execute(array(
           ':username' => $username,
           ':achternaam' => $achternaam,
           ':password' => password_hash($password, PASSWORD_BCRYPT),
           ':klas' => $klas
        ));
    }

    public static function deleteUser($id) {
        $database = new Connection;
        $db = $database->OpenVerbinding();

        $query = $db->prepare('DELETE FROM users WHERE id = :id');
        $query->execute(array(
           ':id' => $id
        ));
    }

}

?>