<?php
session_start();

function signin($user, $pass)
{
    $sql = "SELECT * FROM  `user` WHERE user='$user' and pass='$pass'";
    $user = pdo_query_one($sql);

    if ($user != false) {
        $_SESSION['user'] = $user;
    } else {
        return "<span class='text-danger'>Thông tin tài khoản sai</span>";
    }
}

function logout()
{
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}

function loadone_user($id)
{
    $sql = "SELECT * FROM `user` WHERE id= $id";
    $user = pdo_query_one($sql);
    return $user;
}

function insert_user($user, $pass, $email, $role)
{
    $sql = "INSERT INTO `user`(`user`, `pass`, `email`, `role`) VALUES ('$user', '$pass', '$email', $role)";
    pdo_execute($sql);
}

function send_mail($email)
{
    $sql = "SELECT * FROM `user` WHERE email = '$email'";
    $user = pdo_query_one($sql);
    if ($user != false) {
        send_mail_pass($email, $user['user'], $user['pass']);
        return "<span class='text-success'>Kiểm tra email.</span>";
    } else {
        return "<span class='text-danger'>Email không tồn tại !</span>";
    }
}

function send_mail_pass($email, $user, $pass)
{
    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;
        $mail->isSMTP();
        $mail->Host       = 'sandbox.smtp.mailtrap.io';
        $mail->SMTPAuth   = true;
        $mail->Username   = '13b51e5edb13b9';
        $mail->Password   = '8b0bc562a06fbd';
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('vanhai@example.com', 'Van Hai');
        $mail->addAddress($email, $user);

        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Quen mat khau';
        $mail->Body    = 'Mat khau cua ban la: ' . $pass;

        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

// thuong nguyen

function selectAllUsers()
{
    $sql = "SELECT * FROM user ORDER BY id DESC";
    $stmt = pdo_query($sql);
    return $stmt;
}

function updateOneUser($user, $pass, $email, $role, $id)
{
    $sql = "UPDATE user SET user = ?, pass = ?, email = ?, role = ? WHERE id = ?";
    pdo_execute($sql, $user, $pass, $email, $role, $id);
}


function deleteOneUser($id){
    $sql = "DELETE FROM user WHERE id = $id";
    pdo_delete_one($sql);
}