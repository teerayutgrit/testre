<?php
date_default_timezone_set('Asia/Bangkok');

include("dbcon.php");

$dateselect = $_GET["dateKeyword"];
$datede1 = date('Y-m-d', strtotime($dateselect . ' -1 days'));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ReportWarehouse KM52</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/4.0.11/css/tableexport.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.3/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/cr-2.0.0/date-1.5.2/fc-5.0.0/fh-4.0.1/kt-2.12.0/r-3.0.1/rg-1.5.0/rr-1.5.0/sc-2.4.1/sb-1.7.0/sp-2.3.0/sl-2.0.0/sr-1.4.0/datatables.min.css" rel="stylesheet">
 
</head>

<body>
    <br>
    <h3 class=" text-center">Report KM52 Warehouse 01</h3>
     <h5 class="text-center">activity</h5>
    <div class="container-fluid">
    <form class="text-center" name="frmSearch" method="get">
            <div class="nativeDatePicker">
                <label for="bday">เลือกวันที่</label>
                <input type="date" id="dateKeyword" name="dateKeyword" min="2024-01-01"  value="<?php echo $dateselect; ?>" />
                <span class="validity"></span>
                <button type="submit" class="btn btn-primary">ค้นหาข้อมูล</button>
                <a class="btn btn-danger" href="#" role="button">ย้อนกลับ</a>
            </div>
        </form>
        <div class="row py-2">
    <div class="col-lg-12 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-5 bg-white rounded">
          <div class="table-responsive-sm">
          <?php
            $stmt = "SELECT * from Stockcard_K38 WHERE  (date_sl ='" . $dateselect . "') order by Posting_Date desc ";
           ?>     
            <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>

                <th class="text-center">Status</th>
                <th class="text-center">Date</th>
                <th class="text-center">PD Code</th>
                <th class="text-center">PD Name</th>
                <th class="text-center">Brand</th>
                <!-- <th class="text-center">Lot</th> -->
                <th class="text-center">Fulllot</th>
                <th class="text-center">Invoice</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Pcs</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
                    $query= sqlsrv_query($conn, $stmt);
                    while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                ?>
            <tr>
                    <td><?php echo $result["Status_Received"];  ?></td>
                    <td class="text-nowrap"><?php echo $result["Date_sl"];  ?></td>
                    <td class="text-nowrap"><?php echo $result["PD_CODE"];  ?></td>
                    <td><?php echo $result["Product_Name"];  ?></td>
                    <td><?php echo $result["Brand"];  ?></td>
                    <!-- <td><?php echo $result["Lot"];  ?></td> -->
                    <td class="text-nowrap"><?php echo $result["FullLot"];  ?></td>
                    <td class="text-nowrap"><?php echo $result["Invoice"];  ?></td>
                    <td class="text-center"><?php echo $result["Quantity"];  ?></td>
                    <td class="text-center"><?php echo $result["Pcs"];  ?></td>
                    
            </tr>
            <?php
                }
                ?>
        </tbody>
        <!-- <tfoot>
            <tr>
                <th class="text-center">Product Code</th>
                <th class="text-center">Brand</th>
                <th class="text-center">Product Name</th>
                <th class="text-center">Full Lot</th>
                <th class="text-center">Qty</th>
                <th class="text-center">Pcs</th>
                <th class="text-center">Location</th>
            </tr>
        </tfoot> -->
    </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.11.10/xlsx.core.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/blob-polyfill/1.0.20150320/Blob.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.3/FileSaver.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/TableExport/4.0.11/js/tableexport.min.js"></script>




    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    

    <script>
        TableExport(document.getElementsByTagName("table"), {
            headers: true, // (Boolean), display table headers (th or td elements) in the <thead>, (default: true)
            footers: true, // (Boolean), display table footers (th or td elements) in the <tfoot>, (default: false)
            formats: ['csv', 'txt', ], // (String[]), filetype(s) for the export, (default: ['xls', 'csv', 'txt'])
            filename: 'ReportWarehouseKM52', // (id, String), filename for the downloaded file, (default: 'id')
            bootstrap: true, // (Boolean), style buttons using bootstrap, (default: true)
            exportButtons: true, // (Boolean), automatically generate the built-in export buttons for each of the specified formats (default: true)
            position: 'top', // (top, bottom), position of the caption element relative to table, (default: 'bottom')
            ignoreRows: null, // (Number, Number[]), row indices to exclude from the exported file(s) (default: null)
            ignoreCols: null, // (Number, Number[]), column indices to exclude from the exported file(s) (default: null)
            trimWhitespace: true // (Boolean), remove all leading/trailing newlines, spaces, and tabs from cell text in the exported file(s) (default: false)
        });
    </script>
    <script>
    $(document).ready( function () {
  $('#example').dataTable( {
    "lengthMenu": [[15,50, 100], [15,50,100]]
  } );
} );
    </script> -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.bootstrap5.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.colVis.min.js"></script>
<script>
// new DataTable('#example', {
//     layout: {
//         topStart: {
//             buttons: [
//                 {
//                     extend: 'csv',
//                     split: ['pdf', 'excel']

//                 }
//             ]
//         }
//     }
    
// });

// $(document).ready(function() {
// $('#example').DataTable( {
//     "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
// } );
// } );
new DataTable('#example', {
    layout: {
        topStart: {
            buttons: ['copy', 'csv', 'excel', 'print']
        }
    }
});

</script>
</body>

</html>
