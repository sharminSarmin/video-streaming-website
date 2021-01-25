
<?php
include 'header.php';
$query = $con->query("SELECT a.*,b.cat_name FROM movies a LEFT JOIN cat b on b.id = a.cat_id WHERE a.id = '$_GET[id]'");
$m = mysqli_fetch_array($query);
?>
      <div class="" data-aos="fade">
            <div class="container-fluid">

                <div class="row justify-content-center">
                    <div class="col-md-7">
                      <div class="row mb-5 site-section">
                            <div class="col-12 ">
                                <h2 class="site-section-heading text-center"><span class="style2">Delux Movie:</span> <span class="style1"><?= $m['title']; ?></span></h2>
                            </div>
                            <div align="center"><a href="https://click.linksynergy.com/fs-bin/click?id=Co9iEgnoXcA&offerid=572706.47&subid=0&type=4"><IMG border="0"   alt="nordvpn" src="https://ad.linksynergy.com/fs-bin/show?id=Co9iEgnoXcA&bids=572706.47&subid=0&type=4&gridnum=16"></a>
                                </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col-md-7">
                                <img src="uploads/<?= $m['thumbnail']; ?>" alt="Images" class="img-fluid">
                            </div>
                            <div class="col-md-4 ml-auto">
                                <h3><?= $m['title']; ?></h3>
                                <p><a href="movie_detail.php?id=<?= $m['id']; ?>" class="btn btn-danger"><i class="icon-play"></i> Watch Movie</a></p>
                                <p><?= $m['long_desc']; ?></p>
                                <p><a href="movie_detail.php?id=<?= $m['id']; ?>" class="btn btn-danger"><i class="icon-play"></i> Watch Movie</a></p>
                            </div>
                        </div>

                        <div class="row site-section">

                            <?php
                            $cat = $m['cat_id'];
                            $querys = $con->query("SELECT a.*,b.cat_name FROM movies a LEFT JOIN cat b on b.id = a.cat_id WHERE a.cat_id = '$cat' LIMIT 3");
                            while ($r = mysqli_fetch_array($querys)) {
                            ?>
                                <div class="col-md-6 col-lg-6 col-xl-4 text-center mb-5">
                                    <img src="uploads/<?= $r['thumbnail']; ?>" alt="Image" width="184" height="272" class="img-fluid w-50 rounded-circle mb-4">
                                    <h2 class="text-black font-weight-light mb-4"><a href="movie_desc.php?id=<?= $r['id'];?>"><?= $r['title']; ?></a></h2>
                                    <p class="mb-4"><?= $r['short_desc']; ?></p>
                                </div>
                            <?php } ?>
                        </div>

                    </div>

                </div>
            </div>
            <div align="center"><a href="https://click.linksynergy.com/fs-bin/click?id=Co9iEgnoXcA&offerid=572706.47&subid=0&type=4"><IMG border="0"   alt="nordvpn" src="https://ad.linksynergy.com/fs-bin/show?id=Co9iEgnoXcA&bids=572706.47&subid=0&type=4&gridnum=16"></a></div>
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