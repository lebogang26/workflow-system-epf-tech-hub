<?php 

session_start();
$con = mysqli_connect('localhost','root','','epf_tech');
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


if (isset($_POST['btnUpload'])) {
    $fileName = $_FILES['fileUpload']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    // validate only excel file and allowed only files
    $allowed_ext = ['xls', 'csv', 'xlsx'];

    // check if we have the file extension or not
    if(in_array($file_ext, $allowed_ext)) 
    {
      $inputFileNamePath = $_FILES['fileUpload']['tmp_name'];

    /** Load $inputFileName to a Spreadsheet object **/
    $spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
    $data = $spreadsheet->getActiveSheet()->toArray();

    foreach($data as $row) 
    {
      $id = $row['0'];
      $name = $row['1'];
      $surnamme = $row['2'];
      $birthday = $row['3'];
      $month = $row['4'];
      $income = $row['5'];
      $expense = $row['6'];

      // query
      $employeeQuery = "INSERT INTO employee (id,name,surname,birthday,income, expense) 
      VALUES ('$id','$name','$surname','$birthday','$income','$expense')";
      $result = mysqli_query($con, $employeeQuery);
      $msg = true;
    }
    if (isset($msg)) {
      $_SESSION['message'] = "File Uploaded";
      header('Location: form.php');
      exit(0); 
    }
    else {
      $_SESSION['message'] = "File not uploaded";
      header('Location: form.php');
      exit(0);
    }

    }
    else 
    {
      $_SESSION['message'] = "Invalid File";
      header('Location: form.php');
      exit(0);
    }

}



?>