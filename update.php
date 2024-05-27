<?php
include("dbcon.php");

$reqid = $_POST["reqid"];
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
          <img src="images/logo_tsi_100-squashed.png" style="width: 40px; margin:4px; white-space: nowrap;" alt="">
        </div>
        <div class="texthd">
          <h3>wh15</h3>
        </div>
      </div>
    </div>
    <?php
    $stmt = "SELECT * FROM BKP_WH_15 WHERE Product_Code='$reqid' ";
    $params = array();
    $options = array("Scrollable" => SQLSRV_CURSOR_KEYSET);
    ?>
    <?php

    $query = sqlsrv_query($conn, $stmt);
    $i = 0;
    $sumamt = 0;
    $unit = "";
    while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
    ?>
      <form action="updatedata.php" method="POST" class="was-validated align-items-center">
        <div class="row">
          <div class=" col-12">
            <!-- <label for="Status_Received-01" class="form-label">Status</label>
            <select class="form-select" name="Status_Received" required aria-label="select example">
              <option value="<?php echo $result["Status_Received"];  ?>"><?php echo $result["Status_Received"];  ?></option>
            </select>
            <div class="invalid-feedback">
              Please enter a message.
            </div> -->
            <fieldset disabled>
              <div class="form-group">
                <label for="Status_Received-01">Status</label>
                <input type="text" name="Status_Received" id="disabledTextInput" class="form-control" placeholder="<?php echo $result["Status_Received"]; ?>">
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class=" col-12">
            <!-- <label for="Date_sl-01" class="form-label">Date</label>
            <input type="text" step="any" name="Date_sl" class="form-control is-valid" maxlength="" id="validationTextarea" value="<?php echo $result["Date_sl"]; ?>" required>
            <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $result["Date_sl"]; ?>">
            <div class="invalid-feedback">
              Please enter a message.
            </div> -->
            <fieldset disabled>
              <div class="form-group">
                <label for="Date_sl-01">Date</label>
                <input type="text" name="Date_sl" id="disabledTextInput" class="form-control" placeholder="<?php echo $result["Date_sl"]; ?>">
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <!-- <div class="col-12">
            <label for="Product_Code-01" class="form-label">Product Code</label>
            <input type="text" step="any" name="Product_Code" class="form-control is-valid" id="validationTextarea"  placeholder="<?php echo $result["Product_Code"]; ?>" required>
            <div class="invalid-feedback">
              Please enter a message.
            </div>
          </div> -->
          <fieldset disabled>
              <div class="form-group">
                <label for="Product_Code">Key</label>
                <input type="text" name="Product_Code"  id="disabledTextInput" class="form-control" placeholder="<?php echo $result["Product_Code"]; ?>">
              </div>
            </fieldset>
        </div>
        <div class="row">
          <div class=" col-12">
            <!-- <label for="PD_CODE-01" class="form-label">PD CODE</label>
            <input type="text" step="any" name="PD_CODE" class="form-control is-valid" id="validationTextarea" value="<?php echo $result["PD_CODE"]; ?>" required>
            <div class="invalid-feedback">
              Please enter a message.
            </div> -->
            <fieldset disabled>
              <div class="form-group">
                <label for="PD_CODE">PD Code</label>
                <input type="text" name="PD_CODE"  id="disabledTextInput" class="form-control" placeholder="<?php echo $result["PD_CODE"]; ?>">
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class=" col-12 ">
            <!-- <label for="Product_Name-01" class="form-label mb-3">Product Name</label>
            <textarea class="form-control" aria-label="<?php echo $result["Product_Name"]; ?>"></textarea>
            <div class="invalid-feedback">
              Please enter a message.
            </div> -->
            <fieldset disabled>
              <div class="form-group">
                <label for="Product_Name">Key</label>
                <!-- <input type="text" id="disabledTextInput" class="form-control" placeholder="<?php echo $result["Product_Name"]; ?>"> -->
                <textarea class="form-control" name="Product_Name" aria-label="With textarea"><?php echo $result["Product_Name"]; ?></textarea>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row">
          <div class=" col-6">
            <label for="Quantity-01" class="form-label">Quantity</label>
            <input type="text" step="any" name="Quantity" class="form-control is-valid" id="validationTextarea" value="<?php echo $result["Quantity"]; ?>" required>
            <div class="invalid-feedback">
              <!-- Please enter a message. -->
            </div>
          </div>
          <div class=" col-6">
            <label for="Pcs-01" class="form-label">Pcs</label>
            <input type="text" step="any" name="Pcs" class="form-control is-valid" id="validationTextarea" value="<?php echo $result["Pcs"]; ?>" required>
            <div class="invalid-feedback">
              <!-- Please enter a message. -->
            </div>
          </div>
        </div>
        <br>
        <div class="row justify-content-center">
          <div class="col-4">
            <button class="btn btn-success" type="submit">บันทึก</button>
            &nbsp;
            <input type="hidden" id="reqid01" name="reqid01" value="<?php echo $result["Product_Code"]; ?>">
          </div>
          <div class="col-4">
            <a class="btn btn-danger" href="index.php" role="button">ย้อนกลับ</a>
          </div>

        </div>
      <?php } ?>
  </div>
  <script src="test.js"></script>

</body>

</html>