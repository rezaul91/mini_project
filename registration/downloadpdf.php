<?php
if (urlencode(@$_REQUEST['action']) == "getpdf") {
        mysql_connect("localhost", "root", "");
        mysql_select_db("phonebook");
        
        include ('fpdf/fpdf.php');
        $pdf = new FPDF();
        $pdf->AddPage();

        $pdf->SetFont('Helvetica', '', 14);
        $pdf->Write(5, 'Phone Book');
        $pdf->Ln();

        $pdf->SetFontSize(10);
        $pdf->Write(5, 'Batch:13 Group: Codewarrior');
        $pdf->Ln();

        $pdf->Ln(5);

        
        $pdf->SetFont('Helvetica', 'B', 10);
        $pdf->Cell(50 ,7, 'Full Name', 1);
        // $pdf->Cell(30 ,7, 'Nick Name', 1);
        $pdf->Cell(35 ,7, 'Mobile Number', 1);
        $pdf->Cell(35 ,7, 'Gender', 1);
        $pdf->Cell(75 ,7, 'Address', 1);
        $pdf->Ln();

        $pdf->SetFont('Helvetica', '', 10);

        
        $result=mysql_query("SELECT * FROM tbl_info order by info_id desc");

        while ($row = mysql_fetch_array($result)) {
            $pdf->Cell(50, 7, $row['fname'] . " ". $row['lname'], 1);
            // $pdf->Cell(30, 7, $row['nname'], 1);
            $pdf->Cell(35, 7, $row['mobile'], 1);
            $pdf->Cell(35, 7, $row['gender'], 1);
            $pdf->Cell(75, 7, $row['address'], 1);
            $pdf->Ln();
        }
        $pdf->Output();
        exit;
        
        
        $pdf->Output();
        exit;
    }
?>