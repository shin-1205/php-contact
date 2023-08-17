<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "sillyss5021@gmail.com";  // 送信先のメールアドレスを設定
    $subject = "お問い合わせフォームからのメッセージ";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "メッセージが送信されました。";
    } else {
        echo "送信に失敗しました。";
    }
}
?>