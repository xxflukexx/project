<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลการศึกษา</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <?php include 'navbar.php'; ?>


    <div class="register-page">

        <div class="register-box">

            <h2>ข้อมูลการศึกษา</h2>

            <form>


                <!-- ชื่อสถานศึกษา -->
                <div class="form-group">

                    <label>ชื่อสถานศึกษาเดิม</label>

                    <input
                        type="text"
                        placeholder="ชื่อสถานศึกษาเดิม">

                </div>


                <!-- วุฒิการศึกษา -->
                <div class="form-group">

                    <label>วุฒิการศึกษาที่จบ</label>

                    <div class="radio-group">

                        <label>
                            <input
                                type="radio"
                                name="education"
                                value="ม.6">
                            ม.6
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="education"
                                value="ปวช">
                            ปวช.
                        </label>

                        <label>
                            <input
                                type="radio"
                                name="education"
                                value="ปวส">
                            ปวส.
                        </label>

                    </div>

                </div>


                <!-- แผนการเรียน -->
                <div class="form-group">

                    <label>แผนการเรียน</label>

                    <input
                        type="text"
                        placeholder="รายวิชา/แผนการเรียน">

                </div>


                <!-- สาขาวิชา -->
                <div class="form-group">

                    <label>สาขาวิชา</label>

                    <input
                        type="text"
                        placeholder="สาขาวิชา">

                </div>


                <!-- เกรด -->
                <div class="form-group">

                    <label>เกรดเฉลี่ยสะสม</label>

                    <input
                        type="number"
                        step="0.01"
                        min="0"
                        max="4"
                        placeholder="เกรดเฉลี่ย">

                </div>


                <!-- แนบเอกสาร -->
                <div class="form-group">

                    <label>แนบใบสมัคร</label>

                    <div class="upload-box">

                        <div class="upload-icon">
                            ☁
                        </div>

                        <p>Browse Files to upload</p>

                        <input type="file">

                    </div>

                </div>


                <!-- ปุ่ม -->
                <div class="form-button">

                    <button
                        type="button"
                        class="back-button"
                        onclick="location.href='register.php'">

                        ย้อนกลับ

                    </button>


                    <button
                        type="button"
                        onclick="location.href='register3.php'">

                        ถัดไป

                    </button>

                </div>

            </form>

        </div>

    </div>


    <?php include 'footer.php'; ?>

</body>
</html>