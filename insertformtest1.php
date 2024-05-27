<?php
include("dbcon.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Inconsolata'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="test.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="test.js"> -->

</head>

<body>
  <div class="cardform">
    <div class="card-box">
      <div class="back">
        <div class="logohd">
          <img src="images/logonew.png.png" style="width: 40px; margin:4px; white-space: nowrap;" alt="">
        </div>
        <div class="texthd">
          <h3>Boiler Daily Check</h3>
        </div>
      </div>
    </div>
    <form action="insertdatatest.php" method="POST" class="was-validated align-items-center">
      <div class="row">
        <div class=" col-12">
          <label for="mt_name-01" class="form-label">ผู้บันทึก</label>
          <select class="form-select" name="mt_name" required aria-label="select example">
            <option value=""></option>
            <option value="พรชัย ตุละ">พรชัย ตุละ</option>
            <option value="มานิต หล้าแดง">มานิต หล้าแดง</option>
            <option value="อื่นๆ">อื่นๆ</option>
          </select>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col-12">
          <label for="date_sl-01" class="form-label"></label>
          <div class="nativeDatePicker">
            <label for="bday">เลือกวันที่</label>
            <input type="date" name="date_sl" value="" />
            <span class="validity"></span>
          </div>
        </div>
      </div>
      <br>
      <div class="row">
        <div class=" col-6">
          <label for="date1-01" class="form-label">รอบเวลา</label>
          <select class="form-select" name="date1" required aria-label="select example">
            <option value=""></option>
            <option value="08.00">08.00</option>
            <option value="09.00">09.00</option>
            <option value="10.00">10.00</option>
            <option value="11.00">11.00</option>
            <option value="12.00">12.00</option>
            <option value="13.00">13.00</option>
            <option value="14.00">14.00</option>
            <option value="15.00">15.00</option>
            <option value="16.00">16.00</option>
            <option value="17.00">17.00</option>
            <option value="18.00">18.00</option>
            <option value="19.00">19.00</option>
            <option value="20.00">20.00</option>
            <option value="21.00">21.00</option>
            <option value="22.00">22.00</option>
            <option value="23.00">23.00</option>
            <option value="00.00">00.00</option>
            <option value="01.00">01.00</option>
            <option value="02.00">02.00</option>
            <option value="03.00">03.00</option>
            <option value="04.00">04.00</option>
            <option value="05.00">05.00</option>
            <option value="06.00">06.00</option>
            <option value="07.00">07.00</option>
          </select>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
        <div class=" col-6">
          <label for="waterlevel_boiler-01" class="form-label">waterlevel_boiler</label>
          <select class="form-select" name="waterlevel_boiler" required aria-label="select example">
            <option value="">ระดับน้ำบอยเลอร์</option>
            <option value="ปกติ">ปกติ</option>
            <option value="ไม่ปกติ">ไม่ปกติ</option>
          </select>
          <div class="invalid-feedback"></div>
        </div>
      </div>

      <div class="row">
        <div class=" col-4">
          <label for="id_fan-01" class="form-label">ID-Fan</label>
          <input type="number" step="any" name="id_fan" class="form-control is-valid" maxlength="5" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
        <div class=" col-4">
          <label for="fd_fan-01" class="form-label">FD-Fan</label>
          <input type="number" step="any" name="fd_fan" class="form-control is-valid" maxlength="5" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
        <div class=" col-4">
          <label for="gear_box-01" class="form-label">เกียร์ตะกรับ</label>
          <input type="number" step="any" name="gear_box" class="form-control is-valid" maxlength="5" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <label for="furnace_temp-01" class="form-label">อุณหภูมิเตาเผา</label>
          <input type="number" step="any" name="furnace_temp" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
        <div class="col-4">
          <label for="steam_pressure-01" class="form-label">ความดันไอน้ำ</label>
          <input type="number" step="any" name="steam_pressure" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message . -->
          </div>
        </div>
        <div class=" col-4">
          <label for="exhaust_temp-01" class="form-label">อุณหภูมิไอเสีย</label>
          <input type="number" step="any" name="exhaust_temp" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class=" col-6">
          <label for="waterlevel_tank-01" class="form-label">waterlevel_tank</label>
          <select class="form-select" name="waterlevel_tank" required aria-label="select example">
            <option value="">ระดับน้ำถังเก็บน้ำ</option>
            <option value="ปกติ">ปกติ</option>
            <option value="ไม่ปกติ">ไม่ปกติ</option>
          </select>
          <!-- <div class="invalid-feedback">Please enter a message.</div> -->
        </div>
        <div class=" col-6">
          <label for="deaerator_level-01" class="form-label">deaerator_level</label>
          <select class="form-select" name="deaerator_level" required aria-label="select example">
            <option value="">ระดับน้ำถังดีแอร์</option>
            <option value="ปกติ">ปกติ</option>
            <option value="ไม่ปกติ">ไม่ปกติ</option>
          </select>
          <!-- <div class="invalid-feedback">Please enter a message.</div> -->
        </div>
      </div>

      <div class="row">
        <div class=" col-6">
          <label for="deaerator_temp-01" class="form-label">อุณหภูมิน้ำถังดีแอร์</label>
          <input type="number" step="any" name="deaerator_temp" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col-6">
          <label for="tunneltemp_left-01" class="form-label">อุณหภูมิอุโมงหน้าซ้าย</label>
          <input type="number" step="any" name="tunneltemp_left" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
        <div class=" col-6">
          <label for="tunneltemp_right-01" class="form-label">อุณหภูมิอุโมงหน้าขวา</label>
          <input type="number" step="any" name="tunneltemp_right" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class=" col-6">
          <label for="economizer_temp-01" class="form-label">economizer-temp</label>
          <input type="number" step="any" name="economizer_temp" class="form-control is-valid" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col-8">
          <label for="water_meter-01" class="form-label">เลขที่มิเตอร์วัดน้ำ</label>
          <input type="number" step="any" name="water_meter" class="form-control is-valid" maxlength="10" id="validationTextarea" value="" required>
          <div class="invalid-feedback">
            <!-- Please enter a message. -->
          </div>
        </div>
      </div>
      <div class="row">
        <div class=" col-8">
          <label for="fuel_amount-01" class="form-label">ปริมาณเชื้อเพลิง</label>
          <select class="form-select" name="fuel_amount" required aria-label="select example">
            <option value=""></option>
            <option value="800">1 ถุง</option>
            <option value="0">ไม่ได้เติม</option>
          </select>
          <!-- <div class="invalid-feedback">Please enter a message.</div> -->
        </div>
      </div>
      <br>
      <div class="row">
        <div class=" col-12">
          <div class="form-floating">
            <textarea class="form-control" name="mt_comment" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
            <label for="mt_comment-01">หมายเหตุ</label>
          </div>
        </div>
      </div>
      <br>
      <div class="row justify-content-center">
        <div class="col-4">
          <button class="btn btn-success" type="submit">บันทึก</button>
        </div>
        <div class="col-4">
          <a class="btn btn-danger" href="index.php" role="button">ย้อนกลับ</a>
        </div>
      </div>
    </form>
  </div>
  <script src="test.js"></script>

</body>

</html>