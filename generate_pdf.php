    <?php
include 'conn.php';
if(isset($_POST['generate_pdf.php'])){

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('logo.png',10,-1,70);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'developers List',1,0,'C');
    // Line break
    $this->Ln(20);
}
 
// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
 
$db = new dbObj();
$connString =  $db->getConnstring();
$display_heading = array('id'=>'ID', 'developers_name'=> 'name', 'developers_skills'=> 'skills','developers_address'=> 'address','developers_gender'=>'gender','developers_designation'=>'designation','developers_age'=>'age','developers_image'=>'image');
 
$result = mysqli_query($connString, "SELECT id, developers_name, developers_skills, developers_address, developers_gender, developers_designation, developers_age, developers_image FROM developers") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM developers");
 
$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
$pdf->Cell(40,12,$display_heading[$heading['Field']],1);
}
foreach($result as $row) {
$pdf->Ln();
foreach($row as $column)
$pdf->Cell(40,12,$column,1);
}
}
$pdf->Output()
?>

