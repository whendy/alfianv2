<!-- Footer Start -->
<footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-12 mb-0 mb-md-4 pb-0 pb-md-2">
                        <a class="logo-footer" href="../"><img src="../<?php echo $gambar; ?>" alt="<?php echo $nama; ?>"><span class="text-primary">.</span></a>
                        <p class="mt-4"><?php echo $penjelasan; ?></p>
                    </div><!--end col-->
                    
                    <div class="col-lg-2 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Link</h4>
                        <ul class="list-unstyled footer-list mt-4">
                            <li><a href="projek" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Project</a></li>
                            <li><a href="blog" class="text-foot"><i class="mdi mdi-chevron-right mr-1"></i> Blog</a></li>
                        </ul>
                    </div><!--end col-->
                    
                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Like Jika Suka</h4>
                        <div class="fb-page" data-href="https://www.facebook.com/jasawebbekasino1/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/jasawebbekasino1/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/jasawebbekasino1/">Jasa Pembuatan Website  Bekasi No1</a></blockquote></div>
                    </div><!--end col-->

                    <div class="col-lg-3 col-md-4 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <h4 class="text-light footer-head">Artikel Terpopuler</h4>
                        <?php
$batas   = 4;
$query  = "select post.idpost,post.tanggal_post,post.penulis,post.judul,post.isi,post.userfile,kategori.namakategori from post,kategori where post.idkategori=kategori.idkategori order by views desc LIMIT $batas ";
$blog = mysqli_query($mysqli, $query);
?>
                                <div class="mt-4">
                                <?php
		while($blog_res = mysqli_fetch_array($blog)) {		
            $isi = strip_tags($blog_res['isi']);

            $des = htmlentities(strip_tags($blog_res['isi'])); // membuat paragraf pada isi berita dan mengabaikan tag html
            $isi = substr($des,0,100); // ambil sebanyak 220 karakter
            $isi= substr($des,0,strrpos($isi," ")); // potong per spasi kalimat
			
          echo '
                                    <div class="clearfix post-recent">
                                        <div class="post-recent-thumb float-left"> <a href="../blog/'.urlencode($blog_res['judul']).'"> <img alt="img" src="../'.$blog_res['userfile'].'" class="img-fluid rounded" style="height:60px;"></a></div>
                                        <div class="post-recent-content float-left"><a href="../blog/'.urlencode($blog_res['judul']).'">'.($blog_res['judul']).'</a><span class="text-muted mt-2"> '.($blog_res['tanggal_post']).'</span></div>
                                    </div>
                                    ';
                  }?>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <footer class="footer footer-bar">
            <div class="container text-center">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <div class="text-sm-left">
                            <p class="mb-0">© 2020 <?php echo $nama; ?>. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="http://www.dwiki.id/" target="_blank" class="text-success">Dwiki.id</a>.</p>
                        </div>
                    </div><!--end col-->

                    <div class="col-sm-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <ul class="list-unstyled social-icon social text-sm-right mb-0">
                            <li class="list-inline-item mb-0"><a href="<?php echo $sosial_fb; ?>" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="<?php echo $sosial_ig; ?>" class="rounded"><i class="mdi mdi-instagram" title="Instagram"></i></a></li>
                            <li class="list-inline-item mb-0"><a href="<?php echo $sosial_twitter; ?>" class="rounded"><i class="mdi mdi-twitter" title="Twitter"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </footer><!--end footer-->
        <!-- Footer End -->
        <!-- Back to top -->
        <a href="#" class="back-to-top rounded text-center" id="back-to-top"> 
            <i class="mdi mdi-chevron-up d-block"></i>
        </a>
        <!-- Back to top -->