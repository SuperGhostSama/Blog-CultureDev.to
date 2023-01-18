<?php
include_once __DIR__.'/../config/database.php';

class Users extends Database {
    private $id;
    private $email;
    private $password;
    private $fullName;

    public function register($email, $password, $fullName) {
        $this->email = $email;
        $this->password = $password;
        $this->fullName = $fullName;
        //check if email already exists
        $sql = "SELECT * FROM admin WHERE email = :email";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            $_SESSION['emailError'] = 'Email already exists.';
        } else {
            $sql = "INSERT INTO admin (email, password, username) VALUES (:email, :password, :username)";
            $stmt = $this->con->prepare($sql);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->bindParam(':username', $this->fullName);
            $stmt->execute();
            $_SESSION['registerSuccess'] = 'Registration successful. Please login.';
            header('Location: /Blog-CultureDev.to/pages/login.php');
        }

        
    }
    public function login($email, $password) {
        $this->email = $email;
        $this->password = $password;
        $sql = "SELECT * FROM admin WHERE email = :email";
        $stmt = $this->con->prepare($sql);
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            if (password_verify($this->password, $result['password'])) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['fullName'] = $result['username'];
                header('Location: /Blog-CultureDev.to/pages/dashboard.php');
            } else {
                $_SESSION['passwordError'] = 'Wrong password.';
            }
        } else {
            $_SESSION['emailError'] = 'This email does not exist.';
        }
    }
    public function logout() {
        session_destroy();
        header('Location: /Blog-CultureDev.to/pages/login.php');
    }
}