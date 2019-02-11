<?php
//call the FPDF library
include("connection.php");
require('fpdf/fpdf.php');

$total_sales = 0;

$day = date('d');

$month = date('F');
$year = date('Y');
$table2 = "SELECT member.amount,member.member_code,member.member_firstname,member.member_middlename,member.member_lastname,member_sales.member_sales_id,member_sales.date_log,member_sales.member_sales_id,member.member_sub_id,member.member_birthdate,member.member_address,member.member_gender,member.member_contact,member.member_sub_id,member.member_age,member.membership_registered,member.membership_expired,member.amount
 FROM member RIGHT JOIN member_sales ON member.member_id = member_sales.member_sales_id WHERE member.isDeleted = '0' AND member.isExpired= '0' AND member.isCancelled = '0' AND member.day = '$day' AND member.month = '$month' AND member.year = '$year'";
        
        
        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {
            $total_sales = $total_sales + $row['amount'];
            $final_sales = $total_sales;
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
$pdf->Cell(25 ,25,'',0,1);

$pdf->Cell(120 ,5   ,'DATA AS OF : '.date("Y-m-d h:i A"),0,1);//end of line




$pdf->SetFont('Arial','B',15);
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(96 ,10,'Full Name ',1,0,'C');
$pdf->Cell(98 ,10,'Contact Number',1,0,'C');
$pdf->SetFont('Arial','',12);
$pdf->Cell(25 ,4,'',0,1);

$table2 = "SELECT member.amount,member.member_code,member.member_firstname,member.member_middlename,member.member_lastname,member_sales.member_sales_id,member_sales.date_log,member_sales.member_sales_id,member.member_sub_id,member.member_birthdate,member.member_address,member.member_gender,member.member_contact,member.member_sub_id,member.member_age,member.membership_registered,member.membership_expired,member.amount
 FROM member RIGHT JOIN member_sales ON member.member_id = member_sales.member_sales_id WHERE member.isDeleted = '0' AND member.isExpired= '0' AND member.isCancelled = '0' AND member.day = '$day' AND member.month = '$month' AND member.year = '$year'";


        
        $run_query2b = mysqli_query($connect,$table2);

            while($row = mysqli_fetch_array($run_query2b))

        {

$pdf->Cell(25 ,6,'',0,1);
$pdf->Cell(96 ,6,$row['member_lastname'].', '.$row['member_firstname'].' '.$row['member_middlename'],1,0,'C');
$pdf->Cell(98 ,6,$row['member_contact'],1,0,'C');

}

$pdf->Cell(25 ,3,'',0,1);








$pdf->SetFont('Arial','B',15);
$pdf->Cell(25 ,10,'',0,1);
$pdf->Cell(54 ,10,'',0,0,'C');
$pdf->Cell(54 ,10,'',0,0,'C');
$pdf->Cell(54 ,10,'Total Sales : ',0,0,'C');
$pdf->Cell(30 ,10,"P".$final_sales.".00",0,0,'C');
$pdf->Cell(25 ,3,'',0,1);
$pdf->SetFont('Arial','',12);






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