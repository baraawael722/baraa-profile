<?php
    session_start(); // بداية الجلسة

    // استدعاء ملف الاتصال بقاعدة البيانات
    include("connection.php");

    // تحقق من أن النموذج قد تم إرساله
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['UserName'];
        $password = $_POST['Password']; 

        // استعلام للتحقق مما إذا كان اسم المستخدم وكلمة المرور صحيحة
        $sql = "SELECT * FROM login WHERE UserName = '$username' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);

       // إذا وُجدت نتيجة واحدة فقط، يعني أن المستخدم صحيح
if($count == 1) {
    // بدء جلسة للمستخدم
    $_SESSION['UserName'] = $username;
    // توجيه المستخدم إلى الصفحة المطلوبة بعد تسجيل الدخول بنجاح
    header("location: welcome.php");
} else {
    // عرض رسالة الخطأ باستخدام JavaScript دون إعادة توجيه المستخدم
    echo '<script>alert("Login Failed. Invalid username or password!"); window.history.back();</script>';
}

    }
?>
