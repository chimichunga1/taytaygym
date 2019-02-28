<?php
//call the FPDF library
include("connection.php");
require('fpdf/fpdf.php');

$total_sales = 0;
$get_memberid = $_POST['get_memberid'];

$table2 = "SELECT * FROM member WHERE member_id = '$get_memberid'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
            $total_sales = $total_sales + $row['annual_amount'];
            $final_sales = $total_sales;
            $member_image = $row['member_image'];

            $get_filetype=explode('.',$member_image);
            $filetype=$get_filetype[1];

$member_firstname = $row['member_firstname'];
$member_middlename = $row['member_middlename'];
$member_lastname = $row['member_lastname'];
$member_birthdate = $row['member_birthdate'];
$member_address = $row['member_address'];
$member_gender = $row['member_gender'];
$member_contact = $row['member_contact'];
$member_height = $row['member_height'];
$member_weight = $row['member_weight'];
$member_targetweight = $row['member_targetweight'];
$member_medicalhistory = $row['member_medicalhistory'];
$member_package = $row['member_package'];
$member_age = $row['member_age'];
$membership_registered = $row['membership_registered'];
$membership_expired = $row['membership_expired'];
$annual_expire = $row['annual_expire'];



        }

if(!isset($final_sales)){
$final_sales = "00";
}
/*$userid = $_SESSION["user_id"];
$username = $_SESSION["get_user"];
$eventname = $_SESSION["get_event"];
$timestart = $_SESSION["get_start"];
$timeend = $_SESSION["get_end"];
$get_datehere = $_SESSION["get_date"];
            $table2 = "SELECT * FROM event_tbl WHERE event_name = '$eventname'";
            $run_query2b = mysqli_query($c1,$table2);
            while($row = mysqli_fetch_array($run_query2b))
        {
            $get_event = $row["event_id"];
        }
//A4 width :*/ 
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm
//create pdf object
$image1 = "logo.png";
$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();
//output the result
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);
//Cell(width , height , text , border , end line , [align] )


$pdf->Image('banner2.jpg',150,10,50,0,'JPG');

$pdf->Cell(178 ,15,'POUND FOR POUND FITNESS',0,0,'C');
$pdf->Cell(59 ,8,'',0,1);//end of line
//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);
$pdf->Cell(182 ,10,'Club Manila East, Taytay Rizal',0,0,'C');
$pdf->Cell(64 ,5,'',0,1);//end of line
$pdf->Cell(181 ,10,'Bianca Denice De Guzman Concepcion',0,0,'C');
$pdf->Cell(59 ,5,'',0,1);//end of line
$pdf->Cell(180 ,10,'Non-VAT Reg TIN:706-133-524-000',0,0,'C');



/*$pdf->Cell(183 ,13,'Maybunga, Pasig City',0,0,'C');*/
/*$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line GET DATE TAS PASOK DITO
$pdf->Cell(130 ,5,'Phone [+578-17-50]',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);//end of line RESERVATION ID
$pdf->Cell(25 ,5,'Customer ID : ',0,0);*/

/*$pdf->Cell(34 ,5,$userid,0,1);//end of line USER ID*/
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
//billing address
$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,5,'',0,1);

$pdf->Cell(120 ,10   ,'DATA AS OF : '.date("Y-m-d h:i A"),0,1);//end of line
$pdf->SetFont('Arial','B',24);

$pdf->Cell(195 ,10,'MEMBERSHIP FORM ',0,0,'C');

$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,10,'',0,1);


$pdf->Image($member_image,160,40,30,0,$filetype);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(26 ,10,'Full Name :',1,0,'C');
$pdf->Cell(70 ,10,$member_lastname.', '.$member_firstname.' '.$member_middlename,1,0,'C');
$pdf->Cell(26 ,10,'Contact :',1,0,'C');
$pdf->Cell(30 ,10,$member_contact,1,0,'C');
$pdf->Cell(20 ,10,'Gender :',1,0,'C');
$pdf->Cell(22 ,10,$member_gender,1,0,'C');

$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(48 ,10,'Membership Package :',1,0,'C');
$pdf->Cell(70 ,10,$member_package,1,0,'C');
$pdf->Cell(30 ,10,'Address :',1,0,'C');
$pdf->Cell(46 ,10,$member_address,1,0,'C');
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(22 ,10,'Height :',1,0,'C');
$pdf->Cell(22 ,10,$member_height.' Ft.',1,0,'C');
$pdf->Cell(22 ,10,'Weight :',1,0,'C');
$pdf->Cell(22 ,10,$member_weight.' Kg.',1,0,'C');
$pdf->Cell(32 ,10,'Target Weight :',1,0,'C');
$pdf->Cell(22 ,10,$member_targetweight.' Kg.',1,0,'C');
$pdf->Cell(32 ,10,'Age :',1,0,'C');
$pdf->Cell(20 ,10,$member_age.' Years old',1,0,'C');
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(38 ,10,'Date Registered :',1,0,'C');
$pdf->Cell(28 ,10,substr($membership_registered, 0, 10),1,0,'C');
$pdf->Cell(32 ,10,'Date Expired :',1,0,'C');
$pdf->Cell(28 ,10,$membership_expired,1,0,'C');
$pdf->Cell(36 ,10,'Annual Expired :',1,0,'C');
$pdf->Cell(32 ,10,$annual_expire,1,0,'C');
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(36 ,10,'Medical History :',1,0,'C');
$pdf->Cell(158 ,10,$member_medicalhistory,1,0,'');







//add dummy cell at beginning of each line for indentation
/*$pdf->Cell(80 ,5,'Customer Name : ',0,0);
$pdf->Cell(20 ,5,$username,0,1);
$pdf->Cell(80 ,5,'Event Reserved : ',0,0);
$pdf->Cell(20 ,5,$eventname,0,1);
$pdf->Cell(80 ,5,'Event Requirements : ',0,0);
$pdf->Cell(20 ,5,$eventname,0,1);*/
/*if( $get_event == "1")
{
    $pdf->Cell(20 ,5,'WEDDING REQUIREMENTS HERE',0,1);
}
elseif( $get_event == "2")
{
    $pdf->Cell(20 ,5,'BAPTISM ( SOLO ) REQUIREMENTS HERE',0,1);
}
elseif( $get_event == "3")
{
    $pdf->Cell(20 ,5,'BAPTISM (MANY) REQUIREMENTS HERE',0,1);
}
else
{
    $pdf->Cell(20 ,5,'FUNERAL REQUIREMENTS HERE',0,1);
}*/
/*$pdf->Cell(80 ,5,'Starting Time : ',0,0);
$pdf->Cell(20 ,5,$timestart,0,1);
$pdf->Cell(80 ,5,'End Time : ',0,0);
$pdf->Cell(20 ,5,$timeend,0,1);
$pdf->Cell(80 ,5,'Scheduled Date : ',0,0);
$pdf->Cell(20 ,5,$get_datehere,0,1);*/
/*$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(130 ,5,'NOTE : PROCEED TO THE OFFICE OF OUR LADY OF THE HOLY PARISH',0,0);
$pdf->Cell(20 ,5,'',0,1);
$pdf->Cell(80 ,5,'FOR THE SUBMISSION OF REQUIREMENTS',0,0);
$pdf->Cell(20 ,5,'',0,1);*/
//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line
//invoice contents
$pdf->SetFont('Arial','B',12);
$pdf->Output();
?>