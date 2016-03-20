    <footer>
        <div class="row">
            <div class="medium-12 columns text-center">
                <ul class="small-block-grid-3 medium-block-grid-3">
                    <li><a href="https://www.instagram.com/stonecoldmotionpicture/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://vimeo.com/stonecoldmp" target="_blank"><i class="fa fa-vimeo"></i></a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript" src="slick/slick.js"></script>
    <script src="js/anchor.js"></script>
    <!--<script src="/js/prefixfree.min.js"></script>-->
    <!--<script src="js/function.js"></script>-->
    <script>
        $(document).foundation();

        $('.center').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            arrows: true,
            autoplay: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 2
                    }
    },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
    }
  ]
        });
    </script>
</body>

</html>
