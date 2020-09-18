



<?php
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update']))
{	
	
    $id = $_POST['id'];
    $approved		= $_POST['approved'];

   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    
    
	// checking empty fields
	if(empty($approved)) {
				
		if(empty($approved)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
       
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE komentar SET approved='$approved' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/komentar.php'</script>";	
	}
}
?>
