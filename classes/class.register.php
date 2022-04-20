<?php

class Register extends RegisterController {

    public function __construct($full_name, $email, $nick, $pwd, $pwdCheck) {
        RegisterController::__construct($full_name, $email, $nick, $pwd, $pwdCheck);
    }

    public function registerUser() {
        $this->realEsc();
        $userId = $this->generateUserId();

        $stmt = $this->conn->prepare("INSERT INTO users (user_id, user_name, user_email, user_nickname, user_password) VALUES (?, ?,?,?,?)");
        $stmt->bind_param("issss", $userId,$this->data[1], $this->data[2], $this->data[3], $this->hashPwd());
        $stmt->execute();

        $stmt2 = $this->conn->prepare("INSERT INTO users_pictures (user_id) VALUES (?)");
        $stmt2->bind_param("i", $userId);
        $stmt2->execute();
    }

}