<?php
include 'header.php';

?>

      <div class="site-section" data-aos="fade">
          <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-7">
                      <div class="row mb-5">
                        <div class="col-12 ">
                                <h2 class="site-section-heading text-center">Movie Lists</h2>
                                <div align="center"><a href="https://click.linksynergy.com/fs-bin/click?id=Co9iEgnoXcA&offerid=759505.377&subid=0&type=4"><IMG border="0"   alt="Start your future with a Data Analysis Certificate." src="https://ad.linksynergy.com/fs-bin/show?id=Co9iEgnoXcA&bids=759505.377&subid=0&type=4&gridnum=16"></a> </div>
                        </div> 
                      </div>
                        <?php
                        $pagination ='';
                        if(isset($_GET['cat']) || isset($_GET['keyword']) || isset($_GET['grp'])){
                        ?>
                        <div class="row">
                            <?php
                            $halaman = 12;
                            $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
                            $mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;
                            if(isset($_GET['cat'])){
                                $cat_id = $_GET['cat'];
                                $result = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id where a.cat_id = '$cat_id'");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total / $halaman);
                                $query = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id where a.cat_id = '$cat_id' order by id desc LIMIT $mulai, $halaman");
                                $pagination = 'cat='.$cat_id;
                            }
                            if(isset($_GET['grp'])){
                                $grp_id = $_GET['grp'];
                                $result = $con->query("SELECT * FROM movies left join grp on movies.group_id = grp.id where grp.id='$grp_id'");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total / $halaman);
                                $query = $con->query("SELECT * FROM movies left join grp on movies.group_id = grp.id JOIN cat ON movies.cat_id = cat.id where grp.id= '$grp_id' order by movies.id desc LIMIT $mulai, $halaman" );
                                $pagination = 'grp='.$grp_id;
                            }
                            if(isset($_GET['keyword'])){
                                $keyword = $_GET['keyword'];
                                $result = $con->query("SELECT * FROM movies left join grp on movies.group_id = grp.id where title like '%$keyword%' or long_desc like '%$keyword%'");
                                $total = mysqli_num_rows($result);
                                $pages = ceil($total / $halaman);
                                $query = $con->query("SELECT * FROM movies left join grp on movies.group_id = grp.id JOIN cat ON movies.cat_id = cat.id where title ='$keyword' or title like '%$keyword%' or long_desc like '%$keyword%' order by case when title ='$keyword' then 1 when title like '$keyword' then 2 when title like '%$keyword%' then 3  else 4 end LIMIT $mulai, $halaman");
                                $pagination = 'keyword='.$keyword;
                            }

                            while ($m = mysqli_fetch_array($query)) {
                            ?>

                                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                                    <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                                        <img src="uploads/<?= $m['thumbnail']; ?>" style="max-width:180px" class="mb-2">
                                        <h3 class="text-black h4"><a href="movie_detail.php?id=<?= $m[0]; ?>"><?= $m['title']; ?></a></h3>
                                        <p><?= $m['short_desc']; ?></p>
                                        <p><strong class="font-weight-bold text-primary"><?= $m['cat_name']; ?></strong></p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>

                        <div class="row">
                            <div class="pagination">
                                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                    <a href="?<?php echo $pagination; ?>&halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.pagination -->
                            <?php
                        }
                        else{
                        ?>
                        <div class="row">
                            <?php
                            $halaman = 12;
                            $page = isset($_GET["halaman"]) ? (int) $_GET["halaman"] : 1;
                            $mulai = ($page > 1) ? ($page * $halaman) - $halaman : 0;
                            $result = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id");
                            $total = mysqli_num_rows($result);
                            $pages = ceil($total / $halaman);
                            $query = $con->query("SELECT a.*,b.cat_name FROM movies a left join cat b on b.id = a.cat_id order by id desc LIMIT $mulai, $halaman");

                            while ($m = mysqli_fetch_array($query)) {
                                ?>

                                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5 mb-lg-5">
                                    <div class="h-100 p-4 p-lg-5 bg-light site-block-feature-7">
                                        <img src="uploads/<?= $m['thumbnail']; ?>" style="max-width:180px" class="mb-2">
                                        <h3 class="text-black h4"><a href="movie_detail.php?id=<?= $m['id']; ?>"><?= $m['title']; ?></a></h3>
                                        <p><?= $m['short_desc']; ?></p>
                                        <p><strong class="font-weight-bold text-primary"><?= $m['cat_name']; ?></strong></p>
                                    </div>
                                </div>
                            <?php } ?>

                        </div>
                        <div class="row">
                            <div class="pagination">
                                <?php for ($i = 1; $i <= $pages; $i++) { ?>
                                    <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                                <?php } ?>
                            </div>
                        </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
        </div>
          <div align="center"><a href="https://click.linksynergy.com/fs-bin/click?id=Co9iEgnoXcA&offerid=759505.377&subid=0&type=4"><IMG border="0"   alt="Start your future with a Data Analysis Certificate." src="https://ad.linksynergy.com/fs-bin/show?id=Co9iEgnoXcA&bids=759505.377&subid=0&type=4&gridnum=16"></a> </div>
      </div>

        <div class="footer py-4">
            <div class="container-fluid text-center">
                <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
            </div>
        </div>





    </div>

    <script src="assets/front/js/jquery-3.3.1.min.js"></script>
    <script src="assets/front/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/front/js/jquery-ui.js"></script>
    <script src="assets/front/js/popper.min.js"></script>
    <script src="assets/front/js/bootstrap.min.js"></script>
    <script src="assets/front/js/owl.carousel.min.js"></script>
    <script src="assets/front/js/jquery.stellar.min.js"></script>
    <script src="assets/front/js/jquery.countdown.min.js"></script>
    <script src="assets/front/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/front/js/bootstrap-datepicker.min.js"></script>
    <script src="assets/front/js/swiper.min.js"></script>
    <script src="assets/front/js/aos.js"></script>

    <script src="assets/front/js/picturefill.min.js"></script>
    <script src="assets/front/js/lightgallery-all.min.js"></script>
    <script src="assets/front/js/jquery.mousewheel.min.js"></script>

    <script src="assets/front/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#lightgallery').lightGallery();
        });
    </script>

</body>


</html>