

<?php
//including the database koneksi file
include_once("./../../config.php");
$id=$_GET['id'];
	$result=mysqli_query($mysqli, "SELECT * FROM komentar WHERE id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $avatar = $res['avatar'];
        $author = $res['author'];
        $approved = $res['approved'];
        $comment = $res['comment'];
        

        
    }
?>
 <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Edit Post</h4>
            </div>
            <div class="modal-body">
            <form action="prosesedit/pkoedit.php" name="modal_popup" enctype="multipart/form-data" method="POST" >
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                    <div class="form-line">
                    <p> <b>Foto</b> </p>
                                                    <div class="profile-image float-md-right"> <img src="./../<?php echo $avatar; ?>" alt=""> </div>
                            
                            </div>
                            </div>
                
                
                <div class="form-group">
                    <div class="form-line">
                    
                        <input type="text" class="form-control" name="author" placeholder="author" Readonly value="<?php echo $author; ?> | Yang Komentar"  >
                  
                    </div>
                </div>
                <div class="form-group">
                <div class="form-line">
                                <p> <b>approved</b> </p>
                                <select name="approved" id="approved"  class="form-control show-tick ms select2" data-placeholder="Select">
                                <option value="<?php echo $approved; ?>">Please select (Kategori) | <?php echo $approved; ?></option>
                               
<option value="Yes">Yes</option>
<option value="No">No</option>

                                </select>
                            </div>
                            </div>
                <div class="form-group">
                    <div class="form-line">
                    <p> <b>Isi Postingan yang di Komentari</b> </p>
                        <textarea class="form-control no-resize" name="comment" placeholder="Event Description..." Readonly ><?php echo $comment; ?> </textarea>
                    </div>
                </div> 
                
            <div class="modal-footer">
                <button  type="submit" class="btn btn-primary btn-round waves-effect" name="update" value="update">Update</button>
                <button type="button" class="btn btn-simple btn-round waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
   </form>
        </div>
    </div>