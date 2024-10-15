<?php
//add user
function user_insert($user_name, $email, $sdt, $pass,)
{
    $sql = "INSERT INTO user (id, user_name, email, sdt, pass ) VALUES (NULL, '$user_name', '$email', '$sdt', '$pass')";
    pdo_execute($sql);
}
function user_insert2($user_name, $email, $sdt, $pass, $diachi, $role)
{
    $sql = "INSERT INTO user (id, user_name, email, sdt, pass, diachi, role ) VALUES (NULL, '$user_name', '$email', '$sdt', '$pass', '$diachi', '$role')";
    pdo_execute($sql);
}
//hien thi bang user
function user_select_all()
{
    $sql = "SELECT * FROM user";
    $listuser = pdo_query($sql);
    return $listuser;
}
// edit user
function user_select_by_id($id)
{
    $sql = "SELECT * FROM user WHERE id=" . $id;
    $user = pdo_query_one($sql);
    return $user;
}
// update user

function user_update1($id, $user_name, $email, $sdt, $diachi)
{
    $sql = "UPDATE user SET user_name = '$user_name',
                                email = '$email', 
                                sdt = '$sdt',
                                diachi = '$diachi'
                                WHERE id=$id";
    pdo_execute($sql);
}

function user_update2($id, $user_name, $email, $sdt, $pass, $diachi, $role)
{
    $sql = "UPDATE user SET user_name = '$user_name',
                                email = '$email', 
                                sdt = '$sdt',
                                pass = '$pass',
                                diachi = '$diachi',
                                role = '$role' 
                                WHERE id=$id";
    pdo_execute($sql);
}
//xoa
function user_delete($id)
{
    $sql = "DELETE FROM user WHERE id=$id";
    pdo_execute($sql);
}

// check user_name & pass để đăng nhập
function checkuser($user_name, $pass)
{
    $sql = "SELECT * FROM user where user_name='" . $user_name . "' AND pass='" . $pass . "'";
    return pdo_query_one($sql);
}
//
function checkmail($email)
{
    $sql = "SELECT * FROM user WHERE email='" . $email . "'";
    $check = pdo_query_one($sql);
    if ($check != false) {
        sendmailpass($email, $check['pass']);
        return "Gửi mail thành công";
    } else {
        return "Email ko tồn tại trên hệ thống";
    }
}
function sendmailpass($email, $pass)
{

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF; //Enable verbose debug output
        $mail->isSMTP(); //Send using SMTP
        $mail->Host = 'sandbox.smtp.mailtrap.io'; //Set the SMTP server to send through
        $mail->SMTPAuth = true; //Enable SMTP authentication
        $mail->Username = '85fd53a8f75623'; //SMTP username
        $mail->Password = '0eda0719732eac'; //SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS; //Enable implicit TLS encryption
        $mail->Port = 587; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('vuviet071104@gmail.com', 'Vuviet');
        $mail->addAddress($email); //Add a recipient


        //Content
        $mail->isHTML(true); //Set email format to HTML
        $mail->Subject = 'Email mật khẩu';
        $mail->Body = 'Mật khẩu của bạn là : ' . $pass; // nôi dung


        $mail->send();
        // echo 'Message has been sent';
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

function doimk($newpass, $id)
{
    $sql = "UPDATE user SET 
        pass = '$newpass' WHERE id = $id";
    pdo_execute($sql);
}
function timuser($user_name)
{
    $sql = "SELECT * FROM user WHERE user_name = '$user_name'";
    return pdo_query_one($sql);

}