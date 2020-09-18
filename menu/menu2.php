<div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="../" ><img src="../<?php echo $gambar; ?>" alt="Myself"> <span class="text-primary">.</span></a>
                </div>                 
               
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="../">Home</a></li>
                        <?php 
                    

                    $sqlmenu1 = mysqli_query($mysqli, "select * from categories where active='yes'");
                    
                        while($datamenu1 = mysqli_fetch_array($sqlmenu1)) {
                          echo'
                        <li class="has-submenu">
                            <a href="javascript:void(0)">'.$datamenu1['category_name'].'</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">';
                            $idmenu=$datamenu1['category_id'];
                            $sqlsubmenu = mysqli_query($mysqli, "select * from pages where category_id='$idmenu'  AND active='yes'");    
                            while($datasubmenu1 = mysqli_fetch_array($sqlsubmenu)) 
                            {
                              echo'
                                <li>
                                    <ul>
                                        
                                        <li><a href="../'.urlencode($datasubmenu1['page_title']).'">'.$datasubmenu1['page_title'].'</a></li> 
                                    </ul>
                                </li>';                          
						
                              }
                          echo'
                                
                            </ul>
                        </li>';
				
                      }
                    ?>
        <li class="has-submenu">
       
                            <a href="javascript:void(0)">Foto</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="../projek">Foto Projek </a></li>
                                <li><a href="../team">Foto Team </a></li>
                                
                            </ul>
                        </li>
                        <li class="nav-item">
          <a class="nav-link" href="../shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../blog">Artikel/Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../contact">Contact</a>
        </li>
                    </ul><!--end navigation menu-->
                    
                </div><!--end navigation-->
            </div><!--end container-->