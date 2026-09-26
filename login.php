<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Sarabun:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>รับสมัครนักศึกษา</title>
</head>
<body>
    <!-- ================= HEADER ================= -->
    <?php include 'header.php'; ?>
    <!-- ================= NAVBAR ================= -->

    <?php include 'navbar.php'; ?>
    <!-- ================= BANNER ================= -->
    <?php include 'banner.php'; ?>
    <div class="login-container">
        <form action="" method="post">
            <h1>เข้าสู่ระบบ</h1>
            <div class="login-container-body">
                <div class="username">
                    <h4 for="username">ชื่อผู้ใช้:</h4>
                    <input type="text" id="username" name="username" placeholder="กรอกชื่อผู้ใช้" required>
                </div>
                <div class="password">
                    <h4 for="password">รหัสผ่าน:</h4>
                    <input type="password" id="password" name="password" placeholder="รหัสผ่าน" required>
                </div>
            </div>
            <div class="login-container-bottom">
                <input type="reset" class="btn-cancel" value="ยกเลิก">
                <input type="submit" class="btn-submit" value="ตกลง">
            </div>
        </form>
    </div>
    <!-- ================= FOOTER ================= -->
    <?php include 'footer.php'; ?>
</body>