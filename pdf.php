<?php
include "db.php";

require_once 'tcpdf/tcpdf.php';

$result = $conn->query("select * from book4");

$pdf = new TCPDF();
$pdf->AddPage();

$pdf->SetFont('times', 'B', 12);
$pdf->Cell(0, 10, 'Emp_table', 0, 1, 'C');

$html = '<table border="1">
<tr>
    <td>ID</td>
    <tdTitle</td>
    <td>Author</td>
    <td>Genre</td>
    <td>Available copies</td>
</tr>';

while ($row = $result->fetch_assoc()) {
    $html .= '<tr>
        <td>'.$row["id"].'</td>
        <td>'.$row["title"].'</td>
        <td>'.$row["auth"].'</td>
        <td>'.$row["genre"].'</td>
        <td>'.$row["copies"].'</td>
    </tr>';
}

$html .= '</table>';

$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('Books.pdf', 'D');
?>