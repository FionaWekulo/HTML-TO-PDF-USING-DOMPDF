<?php
require_once 'dompdf/autoload.inc.php'; // Include Dompdf library

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "information";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Retrieve data from database
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

// Generate HTML
$html = '<table>';

while ($row = mysqli_fetch_assoc($result)) {
    $html .= '<tr>';
    $html .= '<td>' . $row['name'] . '</td>';
    $html .= '<td>' . $row['email'] . '</td>';
    $html .= '<td>' . $row['phonenumber'] . '</td>';

    $html .= '</tr>';
}
$html .= '</table>';

// Convert HTML to PDF
$dompdf = new Dompdf\Dompdf();
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Output PDF
$dompdf->stream();

?>
