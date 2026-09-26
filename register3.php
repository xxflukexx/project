<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลการสมัคร</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <?php include 'header.php'; ?>

    <?php include 'navbar.php'; ?>

    <div class="register-page">

        <div class="register-box">

            <h2>ข้อมูลการสมัคร</h2>

            <form action="register4.php" method="post">

                <!-- คณะ -->
                <div class="form-group">

                    <label>เลือกคณะ</label>

                    <select>

                        <option value="">
                            เลือกคณะ
                        </option>

                        <option>
                            คณะเทคโนโลยีสารสนเทศ
                        </option>

                        <option>
                            คณะวิศวกรรมศาสตร์
                        </option>

                        <option>
                            คณะบริหารธุรกิจ
                        </option>

                        <option>
                            คณะเกษตรศาสตร์
                        </option>

                    </select>

                </div>


                <!-- สาขา -->
                <div class="form-group">

                    <label>เลือกสาขา</label>

                    <select>

                        <option value="">
                            เลือกสาขา
                        </option>

                        <option>
                            เทคโนโลยีสารสนเทศ
                        </option>

                        <option>
                            วิศวกรรมสารสนเทศและเครือข่าย
                        </option>

                        <option>
                            วิทยาการคอมพิวเตอร์
                        </option>

                        <option>
                            การจัดการ
                        </option>

                    </select>

                </div>


                <!-- รอบ -->
                <div class="form-group">

                    <label>รอบที่สมัคร</label>

                    <select>

                        <option value="">
                            เลือกรอบ
                        </option>

                        <option>
                            รอบที่ 1
                        </option>

                        <option>
                            รอบที่ 2
                        </option>

                        <option>
                            รอบที่ 3
                        </option>

                        <option>
                            รอบที่ 4
                        </option>

                    </select>

                </div>


                <!-- สาขาลำดับที่สอง -->
                <div class="form-group">

                    <label>เลือกสาขาลำดับที่สอง</label>

                    <select>

                        <option value="">
                            เลือกสาขาลำดับที่สอง
                        </option>

                        <option>
                            สาขาเทคโนโลยีสารสนเทศ
                        </option>

                        <option>
                            สาขาวิศวกรรมสารสนเทศและเครือข่าย
                        </option>

                        <option>
                            สาขาเทคโนโลยีเครื่องกลและกระบวนการผลิต
                        </option>

                    </select>

                </div>


                <!-- ปุ่ม -->
                <div class="form-button">

                    <div class="button-group">

                        <a
                            href="register2.php"
                            class="back-button">
                            ย้อนกลับ
                        </a>

                        <button type="submit">
                            ถัดไป
                        </button>

                    </div>

                </div>

            </form>

        </div>

    </div>

    <?php include 'footer.php'; ?>

</body>
</html>