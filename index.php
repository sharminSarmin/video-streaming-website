<?php
include 'header.php';
?>
        <div class="site-section p-0" data-aos="fade">
            <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="col-md-12">
                        <div class="row">
                            <div class="container-fluid">
                                <div class="swiper-container images-carousel">
                                    <div class="swiper-wrapper">
                                        <?php
                                        $query = $con->query("SELECT a.*,b.cat_name FROM movies a LEFT JOIN cat b on b.id = a.cat_id ORDER BY a.id DESC LIMIT 6");
                                        while ($m = mysqli_fetch_array($query)) {
                                        ?>
                                            <div class="swiper-slide">
                                              <div class="image-wrap">
                                                    <div class="image-info">
                                                        <h2 class="mb-3"><?= $m['title']; ?></h2>
                                                        <a href="movie_desc.php?id=<?= $m['id']; ?>" class="btn btn-outline-white py-2 px-4">Watch Movie</a>
                                                    </div>
                                                    <img src="uploads/<?= $m['thumbnail']; ?>" alt="Image">
                                              </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-scrollbar"></div>
                                </div>
                            </div>
                        </div>

                  </div>
                </div>
            </div>
        </div>
</div>
        <div class="footer py-4">
            <div class="container-fluid text-center"> 
<a href="https://click.linksynergy.com/fs-bin/click?id=Co9iEgnoXcA&offerid=555388.34&type=4&subid=0"><IMG alt="Main Page" border="0" src="https://www.rocketlawyer.com/static_files/img/marketing/rakuten/rocket-lawyer-banners/rocket-lawyer-ad-branded-customer2-468x60.png"></a><IMG border="0" width="1" height="1" src="https://ad.linksynergy.com/fs-bin/show?id=Co9iEgnoXcA&bids=555388.34&type=4&subid=0">
<p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="icon-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
              </div>
</div><script src="assets/front/js/jquery-3.3.1.min.js"></script>
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