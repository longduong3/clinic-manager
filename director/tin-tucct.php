<?php 
$id = $_GET['id'];
$query = "SELECT * FROM tin_tuc where id=$id";
          $query_run= mysqli_query($con,$query);
?>

        <div class="container-fluid py-2">
             <div class="container">
             <ol class="breadcrumb p-0 mb-0">
                            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tin Tức</li>
                </ol>
             </div>
         </div>   

         <div class="container-fluid pb-4">
             <div class="container">
                 <div class="row">
                    <div class="col-md-12">
                            <div class="card-body">
                              <div class="blog-post">
                                  <?php while ($row=mysqli_fetch_assoc($query_run)) 
                                    {            
                                  ?>      
                                    <h2 class="blog-post-title"><?= $row['TuaDe'];  ?></h2>
                                        <p class="date-time hidden-xs hidden-sm"><i class="fa fa-calendar" aria-hidden="true"></i> <span><td> <?php echo $row['NgayDang']; ?></td></span></p>                           
                                        <?php echo $row['TinTuc']; ?>
                                        <p> </p>
								  <a href="<?php echo $row['url'];?>">
								  <?php echo $row['ten_url'];?>
								  </a>
                           <?php } ?>
                              </div>
                            </div>
                        </div>
                    </div>

            </div>
         </div>
         </div>

    <?php 
  
?>

        
        <script>
                $(document).ready(function () {
                    $(".owl-carousel").owlCarousel({
                        loop: true,
                        margin: 30,
                        responsive: {
                            0: {
                                items: 1
                            },
                            1000: {
                                items: 4
                            }
                        }
                    });
                });
            </script>
            <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
 