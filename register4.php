<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลติดต่อ</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <?php include 'navbar.php'; ?>


    <div class="register-page">

        <div class="register-box">

            <h2>ข้อมูลติดต่อ</h2>

            <form>

                <!-- จังหวัด -->
                <div class="form-group">
                    <label>จังหวัด</label>

                    <input
                        type="text"
                        placeholder="จังหวัด">
                </div>


                <!-- รหัสไปรษณีย์ -->
                <div class="form-group">
                    <label>รหัสไปรษณีย์</label>

                    <input
                        type="text"
                        placeholder="รหัสไปรษณีย์">
                </div>


                <!-- ผู้ติดต่อฉุกเฉิน -->
                <div class="form-group">
                    <label>ผู้ติดต่อฉุกเฉิน</label>

                    <input
                        type="text"
                        placeholder="ผู้ติดต่อฉุกเฉิน">
                </div>


                <!-- ความสัมพันธ์ -->
                <div class="form-group">
                    <label>ความสัมพันธ์</label>

                    <input
                        type="text"
                        placeholder="ความสัมพันธ์">
                </div>


                <!-- เบอร์โทรผู้ติดต่อ -->
                <div class="form-group">
                    <label>เบอร์โทรผู้ติดต่อ</label>

                    <input
                        type="tel"
                        placeholder="เบอร์โทรผู้ติดต่อ">
                </div>


                <!-- ปุ่ม -->
                <div class="form-button">

                    <button
                        type="button"
                        class="back-button"
                        onclick="location.href='register3.php'">

                        ย้อนกลับ

                    </button>


                    <button type="submit">

                        สมัครเรียน

                    </button>

                </div>

            </form>

        </div>

    </div>


    <?php include 'footer.php'; ?>

</body>
</html>