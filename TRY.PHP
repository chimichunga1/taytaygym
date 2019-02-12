<?php
$date = date("m/d/Y");
$date = date("m/d/Y");
$date1= date("m/d/YhiA");
$yesterday=date ("m/d/Y",strtotime("-1 day",strtotime("now")));
$last7days=date ("m/d/Y",strtotime("-6 day",strtotime("now")));;
$last30days=date ("m/d/Y",strtotime("-29 day",strtotime("now")));;
$thismonth=date ("m/d/Y",strtotime("first day of this month",strtotime("now")));;
$last=date ("m/d/Y",strtotime("first day of last month",strtotime("now")));;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../daterangepicker/daterangepicker-bs3.css">
  <!-- Theme style -->

  <!-- Google Font: Source Sans Pro -->
<style type="text/css">


 body {
        color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
        background: #fff;
        padding: 20px 25px;
        margin: 30px 0;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
	.table-title {        
		padding-bottom: 15px;
		background: #435d7d;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
    }
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
    table.table-striped tbody tr:nth-of-type(odd) {
    	background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }	
    table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
        margin: 0 5px;
    }
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #F44336;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
    .pagination {
        float: right;
        margin: 0 0 5px;
    }
    .pagination li a {
        border: none;
        font-size: 13px;
        min-width: 30px;
        min-height: 30px;
        color: #999;
        margin: 0 2px;
        line-height: 30px;
        border-radius: 2px !important;
        text-align: center;
        padding: 0 6px;
    }
    .pagination li a:hover {
        color: #666;
    }	
    .pagination li.active a, .pagination li.active a.page-link {
        background: #03A9F4;
    }
    .pagination li.active a:hover {        
        background: #0397d6;
    }
	.pagination li.disabled i {
        color: #ccc;
    }
    .pagination li i {
        font-size: 16px;
        padding-top: 6px
    }
    .hint-text {
        float: left;
        margin-top: 10px;
        font-size: 13px;
    }    
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {    
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 400px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
    .modal .modal-title {
        display: inline-block;
    }
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}	
	.modal form label {
		font-weight: normal;
	}
	.status {
		font-size: 30px;
		margin: 2px 2px 0 0;
		display: inline-block;
		vertical-align: middle;
		line-height: 10px;
	}
.text-success {
        color: #10c469;

  }

    .text-warning {
        color: #FFC107;
    }
    .text-danger {
        color: #ff5b5b;
    }	
</style>

</head>
<body>
       	<form method="post" name="test"	>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
						<font size="5"><strong>Sales<strong></font><br><br>
                  <label>FILTER BY DATE</label><br><button class="btn btn-info btn-filter-go" name="filter" onclick="remain();" type="submit"><i class="fa fa-filter mrg5R"></i>&nbsp;Filter</button>

                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input type="text" class="form-control" name="" value="" id="reservation">
				<input type="hidden" name="Ttal">
        </div>              
					</div>
					<div class="col-sm-6">
				<input type="hidden" name="start" id="start" value="">
			<input type="hidden" name="end" id="end" value="">
				</div>
                </div>
            </div>
            <table id ="example" class="table table-striped table-hover" >
			<thead>
					<?php $start;?>
                    <tr>
                        <th>Date & Time</th>
						<th>Invoice No.</th>
                        <th>Customer</th>
						<th>Staff/s</th>
						<th>Service/s</th>
						<th>Addon</th>
						<th>Sales</th>
						<th>Net</th>
						<th>Payments</th>
						<th>Added By</th>
                    </tr>
                </thead>
				<tbody>
				 <?php 
				 if(isset($_POST['filter'])){
				$TTT=0;
				$start= $_POST['start'];
				$end= $_POST['end'];
                    $sql="SELECT * FROM tbl_sales WHERE PDate BETWEEN '$start' AND '$end';";
                   $result = $conn->query($sql);
                    if ($result->num_rows > 0) {	
                        while($row = $result->fetch_assoc()) 	{
							$invoice =$row['PInvoice'];
							$total =$row['PTotal'];
							$addon =$row['PAddon'];
							$service =$row['PService'];
							$staff =$row['PStaff'];
							$customer =$row['PCustomer'];
							$commission =$row['Pcommission'];
							$start1 =$row['PStart'];
								$end1 =$row['PEnd'];
							$added =$row['PAddedby'];
							$TTT +=$total;
							?>

                    <tr>
<td width="120px"> <?php echo $start1;?></td>
<td width="130px"><?php echo $invoice; ?>  </td>
<td> <?php echo $customer;?></td>
<td width="100px"> <?php echo $staff;?></td>
<td width="200px"> <?php echo $service;?></td>
<td> <?php echo $addon;?></td>
<td width="150px">PHP <?php echo $total; ?>.00</td>
<td width="150px">PHP <?php echo $total; ?>.00</td>
<td width="130px">PHP <?php echo $total; ?>.00</td>
<td> <?php echo $added;?> <br>(<?php echo $end1;?>)</td>

           </tr>	
<?php	//echo '<script>window.location.href="sales.php"</script>';


						}  
						
						
					}
?>	
				
				<h2><center><?php echo $start."&nbsp&nbsp&nbsp-&nbsp&nbsp&nbsp&nbsp".$end;	?></center><h2>
					<input type="hidden" name="try1" id="end" value="<?php echo $start?>">
			<input type="hidden" name="try2" id="end" value="<?php echo $end?>">
			<input type="hidden" name="today" id="" value="<?php echo $date?>">
				<input type="hidden" name="yesterday" id="" value="<?php echo $yesterday?>">
				<input type="hidden" name="last7days" id="" value="<?php echo $last7days?>">
				<input type="hidden" name="last30days" id="" value="<?php echo $last30days?>">
				<input type="hidden" name="thismonth" id="" value="<?php echo $thismonth?>">
				<input type="hidden" name="last" id="" value="<?php echo $last?>">
					<input type="hidden" name="pre" id="" value="PREPARED BY: <?php echo $session_username;?>">
						<input type="hidden" name="da" id="" value="<?php echo $date1;?>">

				
			<?php	 }	
				 
				 
					?>	
					</tbody>
					<tfoot>
				<tr>
				<?php
				 if(isset($_POST['filter'])){ ?>
				<td width="120px"></td>
				<td width="130px"></td>
				<td></td>
				<td width="100px"></td>
				<td width="120px"></td>
				<td></td>
				<td width="150px">PHP <?php echo $TTT;?>.00</td>
				<td width="150px">PHP <?php echo $TTT;?>.00</td>
				<td width="130px">PHP <?php echo $TTT;?>.00</td>
				<td ></td>
				</tr>
				
				<?php } ?>
					 </tfoot>
            </table>
			   </div>
    </div>		   
    </div>
</form>	
</body>

			
			<script src="../daterangepicker/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../daterangepicker/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../daterangepicker/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../daterangepicker/jquery.inputmask.js"></script>
<script src="../daterangepicker/jquery.inputmask.date.extensions.js"></script>
<script src="../daterangepicker/jquery.inputmask.extensions.js"></script>		
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../daterangepicker/daterangepicker.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="../daterangepicker/daterangepicker.js"></script>		
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.3.1.js
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<!-- Page script -->
   <script>
  $(document).ready(function() {
	var z= "SALES&nbsp";
	var a= "TODAY SALES&nbsp";
	var b="YESTERDAY SALES&nbsp";
	var c="LAST 7 DAYS SALES&nbsp";
	var d="LAST 30 DAYS SALES&nbsp";
	var e="THIS MONTH SALES&nbsp";
	var f="LAST MONTH SALES&nbsp";
	var to= a.fontsize(6)
	var yes= b.fontsize(6)
	var l7= c.fontsize(6)
	var l30= d.fontsize(6)
	var tm= e.fontsize(6)
	var lm= f.fontsize(6)
	var sal= z.fontsize(6)
	var ser= "-";
	var test4=ser.fontsize(3)
	var test=document.getElementsByName('try1')[0].value 
	var test2=test.fontsize(3)
	var test1=document.getElementsByName('try2')[0].value 
	var test3=test1.fontsize(3)
	var today=document.getElementsByName('today')[0].value 
	var yesterday=document.getElementsByName('yesterday')[0].value 
	var last7days=document.getElementsByName('last7days')[0].value 
	var last30days=document.getElementsByName('last30days')[0].value 
	var thismonth=document.getElementsByName('thismonth')[0].value 
	var last=document.getElementsByName('last')[0].value 
	var pre1=document.getElementsByName('pre')[0].value 
	var pre =pre1.fontsize(6)
	var g= "SALES";
	var h= "TODAY SALES";
	var i="YESTERDAY SALES";
	var j="LAST 7 DAYS SALES";
	var k="LAST 30 DAYS SALES";
	var l="THIS MONTH SALES";
	var m="LAST MONTH SALES";
	var da=document.getElementsByName('da')[0].value 
    $('#example').DataTable( {
        dom: 'Bfrtip',
    buttons: [{
      extend: 'print', footer: true ,
	  title: 'AZUL SPA',
      filename: 'AzulSpaSales'+da,
	  messageBottom: pre,
	  messageTop:function () {
                    if ( test === today) {
                        return to+test2;
                    }
                    else if ( test == yesterday){
                        return  yes+test2;
                    }
					 else if ( test == last7days){
                        return l7+test+test4+test3;
                    }
					 else if ( test == last30days){
                        return l30+test2+test4+test3;
                    }
					else if ( test == thismonth){
                        return tm+test2+test4+test3;
                    }
					else if ( test == last){
                        return lm+test2+test4+test3;
                    }
					else {
						return sal+test2+test4+test3;
					}
					
	  }
	  
      
    }, {
      extend: 'excel', footer: true ,
	   title: 'AZUL SPA',
      filename: 'AzulSpaSales'+da,
	  messageBottom: pre1,
	  messageTop:function () {
                    if ( test === today) {
                        return h+' '+test;
                    }
                    else if ( test == yesterday){
                        return  i+' '+test;
                    }
					 else if ( test == last7days){
                        return j+' '+test+ser+test1;
                    }
					 else if ( test == last30days){
                        return k+' '+test+ser+test1;
                    }
					else if ( test == thismonth){
                        return l+' '+test+ser+test1;
                    }
					else if ( test == last){
                        return m+' '+test+ser+test1;
                    }
					else {
						return g+' '+test+ser+test1;
					}
					
	  }
	  
    }]
  });
});
</script>


<script>
function remain(){
	document.getElementById('start').value = document.getElementById('start').value ;
}
</script>

<!-- Page script -->
<script>
  $(function() {

    var start = moment();
    var end = moment();

    function cb(start, end) {
        $('#reservation span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
		var st = start.format('MM/DD/YYYY')
		var et = end.format('MM/DD/YYYY')
		$('#start').val(st);
		$('#end').val(et);		
		
    }

    $('#reservation').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        }
    }, cb);

    cb(start, end);

});
		
		
</script>
</html>                                		                            