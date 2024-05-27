<?php
date_default_timezone_set('Asia/Bangkok');

include("dbcon.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ReportWarehouse KM52</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/TableExport/4.0.11/css/tableexport.css" rel="stylesheet">
    

</head>

<body>
    <h1 class="display-4 text-center">Report</h1>
    <h5 class="text-center">Warehouse KM 52 </h5>
    <div class="container-fluid">
        <div class="row py-2">
    <div class="col-lg-12 mx-auto">
      <div class="card rounded shadow border-0">
        <div class="card-body p-3 bg-white rounded">
          <div class="table-responsive-sm">
          <?php
            $stmt = "SELECT * from WH_KM52_Sum order by Product_Name ";
           ?>
            <table id="example" style="width:100%" class="table table-striped table-bordered"><thead>
                <tr>
                    <th class="text-center">Product Code</th>
                    <th class="text-center">Brand</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center">Full Lot</th>
                    <th class="text-center">Qty</th>
                    <th class="text-center">Pcs</th>
                    <th class="text-center">Location</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $query= sqlsrv_query($conn, $stmt);
                    while ($result = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo $result["PD_CODE"];  ?></td>
                    <td><?php echo $result["Brand"];  ?></td>
                    <td><?php echo $result["Product_Name"];  ?></td>
                    <td><?php echo $result["FullLot"];  ?></td>
                    <td><?php echo $result["Total_qty"];  ?></td>
                    <td><?php echo $result["Total_pcs"];  ?></td>
                    <td><?php echo $result["Location_FG"];  ?></td>
                </tr>
                <?php
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            formats: ['csv' ], // (String[]), filetype(s) for the export, (default: ['xls', 'csv', 'txt'])
            filename: 'WarehouseKM52_0001', // (id, String), filename for the downloaded file, (default: 'id')
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
    </script>

</body>

</html>