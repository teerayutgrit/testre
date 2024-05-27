<?php
date_default_timezone_set('Asia/Bangkok');

include("dbcon.php");
// $stmt = "SELECT * FROM mt_check ";
// $params = array();
// $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
// $controws = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BoilerDailyCheck</title>
  <link rel="shortcut icon" type="image/x-icon" href="images/logonew.png.png" />

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Inconsolata'>
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'>

  <link rel="stylesheet" href="test.css">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php
  $stmt = "SELECT TOP 25 * FROM mt_check order by id desc";
  $params = array();
  $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
  // $controws = 0;
  ?>
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
    <br>
    <div class="row justify-content-center">
      <div class="d-grid gap-2">
        <a class="btn btn-primary" href="insertform.php" role="button">บันทึก</a>
      </div>
    </div>
    <br>
    <div class="table-responsive-sm">
      <table id="myTable" class="table table-sm table-hover sm-2">
        <thead>
          <tr>
            <th class="text-center text-nowrap">เวลา</th>
            <th class="text-center">วันที่</th>
            <th class="text-center">ผู้บันทึก</th>
            <th class="text-center">ลายละเอียด</th>
          </tr>
        </thead>

        <tbody>
          <?php
          $query2 = sqlsrv_query($conn, $stmt, $params, $options);
          while ($result = sqlsrv_fetch_array($query2, SQLSRV_FETCH_ASSOC)) {
            // $controws = $controws + 1;
          ?>
            <tr>
              <form action="update.php" method="post">
                <!-- <td class="text-center"><?php echo $result["id"];  ?></td> -->
                <td class="text-center"><?php echo $result["date1"];  ?></td>
                <td class="text-center text-nowrap"><?php echo date_format($result["date_sl"], 'd-m-Y');  ?></td>
                <td class="text-nowrap"><?php echo $result["mt_name"];  ?></td>
                <!-- <td class="text-center"><?php echo $result["depatment"];  ?></td> -->
                <td class="text-center">
                  <font size="+1" color="#3745B5"><strong><input name="reqid" type="hidden" value="<?php echo $result["id"]; ?>" />
                      <input name="Submit" type="submit" class="btn btn-sm btn-primary" value="Detail" enctype="multipart/form-data" />
                    </strong></font>
                </td>
              </form>
            </tr>
          <?php
          }
          ?>
        <tbody>
      </table>
    </div>
    <div class="row ">
      <div class="col-6 justify-content-center">
        <a class="btn btn-primary" href="reporttest.php" role="button">ข้อมูลสรุปรายวัน</a>
      </div>
    </div>
  </div>
  </div>
  <!-- <script src="test.js"></script> -->
</body>

</html>