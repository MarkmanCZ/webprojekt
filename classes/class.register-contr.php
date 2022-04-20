<?php

class RegisterController extends Database{

    protected $data;

    public function __construct($name, $email, $nick, $pwd, $pwdCheck) {
        Database::__construct();

        $this->data = [
            "1" => $name,
            "2" => $email,
            "3" => $nick,
            "4" => $pwd,
            "5" => $pwdCheck,
        ];
    }

    public function checkEmptyInputs() {
        for($i = 1; $i <= count($this->data); $i++) {
            if(empty($this->data[$i])) {
                return true;
            }
            return false;
        }
        return false;
    }

    public function verifyEmail() {
        if(!filter_var($this->data[2], FILTER_VALIDATE_EMAIL)) {
            return true;
        }
        return false;
    }

    public function verifyNickName() {
        if(!preg_match("/^[a-yA-Z0-9]*$/", $this->data[3])) {
            return true;
        }
        return false;
    }

    public function checkPwdMatch() {
        if($this->data[4]!== $this->data[5]) {
            return true;
        }
        return false;
    }

    protected function hashPwd() {
        return password_hash($this->data[4], PASSWORD_DEFAULT);
    }

    protected function generateUserId() {
        return uniqid('', true);
    }

    public function checkUid() {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE user_email = ? OR user_nickname = ?;");
        $stmt->bind_param("ss", $this->data[2], $this->data[3]);
        $stmt->execute();
        if($stmt->num_rows() > 0) {
            return true;
        }
        return false;
    }

    protected function realEsc() {
        for($i = 0;$i < count($this->data);$i++) {
            $this->data[$i] = mysqli_real_escape_string($this->conn, $this->data[$i]);
        }
    }
}