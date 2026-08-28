<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <scrip src="js/bootstrap.bundle.js"></scrip>
</head>
<body>

    <div class="container">
        <center>
            <h2>สมัครสมาชิก</h2>
            <form name="form1"  method ="post" action="register2.php">
                <div class="card" style="width:800px">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">ชื่อ:</div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="name" id="name" placeholder="กรุณากรอกชื่อด้วย" required>
                            </div>
                            <div class="col-sm-3">นามสกุล:</div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="surname" id="surname" placeholder="กรุณากรอกนามสกุลด้วย" required>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3">Username:</div>
                            <div class="col-sm-3">
                                <input type="text" class="form-control" name="username" id="username" placeholder="กรุณากรอก Username" required>
                            </div>
                            <div class="col-sm-3">password:</div>
                            <div class="col-sm-3">
                                <input type="password" class="form-control" name="password" id="password" placeholder="กรุณากรอก password" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">ประเภทสมาชิก:</div>
                            
                            <div class="col-sm-9"  required>
                                <select class="form-select " name="type_member" id="type_member">
                                    <option value="">เลือกประเภทสมาชิก</option>
                                    <option value="สมาชิก">สมาชิก</option>
                                    <option value="ไม่เป็นสมาชิก">ไม่เป็นสมาชิก</option>
                                </select>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-3">ที่อยู่ปัจจุบัน:</div>
                            <div class="col-sm-9">
                                <textarea class="form-control" rows="5" id="address" name="address"></textarea>
                            </div>
                            </div>
                        </div>
                    <div class="card-footer">
                        <center>
                            <Button type="submit" name="kk" id="kk" class="btn btn-primary">ลงทะเบียน</Button>
                            <Button type="reset" name="kr" id="kr" class="btn btn-danger">Reset</Button>
                        </center>
                    </div>
                </div>
            </form>
        </center>
    </div>
    
    
</body>
</html>