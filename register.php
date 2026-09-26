<<<<<<< HEAD
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครนักศึกษา</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<div class="register-page">

    <div class="register-box">

        <h2>สมัครนักศึกษา</h2>
        <form action="register2.php" method="get">>

            <div class="form-row">

                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" placeholder="ชื่อ">
                </div>

                <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" placeholder="นามสกุล">
                </div>

            </div>


            <div class="form-group">
                <label>อีเมล</label>
                <input type="email" placeholder="example@gmail.com">
            </div>


            <div class="form-row">

                <div class="form-group">
                    <label>รหัสผ่าน</label>
                    <input type="password" placeholder="รหัสผ่าน">
                </div>

                <div class="form-group">
                    <label>ยืนยันรหัสผ่าน</label>
                    <input type="password" placeholder="ยืนยันรหัสผ่าน">
                </div>

            </div>


            <div class="form-group">
                <label>เบอร์โทร</label>
                <input type="tel" placeholder="000-000-0000">
            </div>


            <div class="form-group">
                <label>เลขบัตรประชาชน</label>
                <input type="text" placeholder="0-0000-00000-00-0">
            </div>


            <div class="form-group">
                <label>สัญชาติ</label>
                <input type="text" placeholder="สัญชาติ">
            </div>


            <div class="form-group">
                <label>ศาสนา</label>
                <input type="text" placeholder="ศาสนา">
            </div>


            <div class="form-group">
                <label>วันเกิด</label>
                <input type="date">
            </div>


            <div class="form-group">

                <label>เพศ</label>

                <div class="radio-group">

                    <label>
                        <input type="radio" name="gender">
                        ชาย
                    </label>

                    <label>
                        <input type="radio" name="gender">
                        หญิง
                    </label>

                    <label>
                        <input type="radio" name="gender">
                        อื่นๆ
                    </label>

                </div>

            </div>


            <div class="form-group">

                <label>ที่อยู่</label>

                <textarea
                    rows="4"
                    placeholder="ที่อยู่"></textarea>

            </div>


            <div class="form-button">
    <a href="login.php" class="login-link">
        มีบัญชีอยู่แล้ว? | เข้าสู่ระบบ
    </a>

    <button type="submit">ถัดไป</button>
</div>

            </div>

        </form>

</div>


<?php include 'footer.php'; ?>

</body>
=======
<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครนักศึกษา</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<?php include 'header.php'; ?>

<?php include 'navbar.php'; ?>


<div class="register-page">

    <div class="register-box">

        <h2>สมัครนักศึกษา</h2>
        <form action="register2.php" method="get">>

            <div class="form-row">

                <div class="form-group">
                    <label>ชื่อ</label>
                    <input type="text" placeholder="ชื่อ">
                </div>

                <div class="form-group">
                    <label>นามสกุล</label>
                    <input type="text" placeholder="นามสกุล">
                </div>

            </div>


            <div class="form-group">
                <label>อีเมล</label>
                <input type="email" placeholder="example@gmail.com">
            </div>


            <div class="form-row">

                <div class="form-group">
                    <label>รหัสผ่าน</label>
                    <input type="password" placeholder="รหัสผ่าน">
                </div>

                <div class="form-group">
                    <label>ยืนยันรหัสผ่าน</label>
                    <input type="password" placeholder="ยืนยันรหัสผ่าน">
                </div>

            </div>


            <div class="form-group">
                <label>เบอร์โทร</label>
                <input type="tel" placeholder="000-000-0000">
            </div>


            <div class="form-group">
                <label>เลขบัตรประชาชน</label>
                <input type="text" placeholder="0-0000-00000-00-0">
            </div>


            <div class="form-group">
                <label>สัญชาติ</label>
                <input type="text" placeholder="สัญชาติ">
            </div>


            <div class="form-group">
                <label>ศาสนา</label>
                <input type="text" placeholder="ศาสนา">
            </div>


            <div class="form-group">
                <label>วันเกิด</label>
                <input type="date">
            </div>


            <div class="form-group">

                <label>เพศ</label>

                <div class="radio-group">

                    <label>
                        <input type="radio" name="gender">
                        ชาย
                    </label>

                    <label>
                        <input type="radio" name="gender">
                        หญิง
                    </label>

                    <label>
                        <input type="radio" name="gender">
                        อื่นๆ
                    </label>

                </div>

            </div>


            <div class="form-group">

                <label>ที่อยู่</label>

                <textarea
                    rows="4"
                    placeholder="ที่อยู่"></textarea>

            </div>


            <div class="form-button">
    <a href="login.php" class="login-link">
        มีบัญชีอยู่แล้ว? | เข้าสู่ระบบ
    </a>

    <button type="submit">ถัดไป</button>
</div>

            </div>

        </form>

</div>


<?php include 'footer.php'; ?>

</body>
>>>>>>> 59faa798f3c39e3bec38979dae8c9e652eeea3b9
</html>