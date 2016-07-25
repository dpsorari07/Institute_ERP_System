<?
$name_of_uploaded_file=basename($_FILES['uploaded_file']['name']);

$upload_folder="/opt/lampp/htdocs/dpss";
$path_of_uploaded_file = $upload_folder . $name_of_uploaded_file;
$tmp_path = $_FILES["uploaded_file"]["tmp_name"];
 
if(is_uploaded_file($tmp_path))
{
  if(!copy($tmp_path,$path_of_uploaded_file))
  {
    $errors .= '\n error while copying the uploaded file';
  }
}
?>
