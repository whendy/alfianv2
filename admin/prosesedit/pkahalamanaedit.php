



<?php
// including the database koneksi file
include_once("./../../config.php");


if(isset($_POST['update']))
{	
	
    $category_id = $_POST['category_id'];
    $category_name		= $_POST['category_name'];
    $active		= $_POST['active'];

   
    // $direktori   = "foto/".$_FILES['foto']['name'];
    
    
	// checking empty fields
	if(empty($category_name) || empty($active)) {
				
		
        
       
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE categories SET category_name='$category_name', active='$active' WHERE category_id=$category_id");
		
		//redirectig to the display page. In our case, it is view.php
		echo "<script>window.alert('Data Berhasil DI Ubah')
        window.location='./../../admin/kahalaman'</script>";	
	}
}
?>
