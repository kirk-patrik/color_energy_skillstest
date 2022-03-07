    <!-- content end here -->
    </main>
    <footer class="page__footer <?= isset($addClassFooter) ?  $addClassFooter : ''; ?>">
        <div class="l-footer">
            <ul class="l-footer__links">
                <li>ITEM</li>
                <span class="separator"></span>
                <li>ITEM</li>
                <span class="separator"></span>
                <li>ITEM</li>
                <span class="separator"></span>
                <li>ITEM</li>
                <span class="separator"></span>
                <li>ITEM</li>
            </ul>
            <p class="copyright">Copyright &copy; Kracie Holdings,Ltd. All Rights Reserved.</p>
            <span class="scrollTop"></span>
        </div>
    </footer>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- script here for global -->
    <?= resources('js', isset($footerJS) ? $footerJS : '', true) ?>

    </html>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>
    <script>
        let homeslider = document.querySelector('.mv__slider');
        $(homeslider).slick({
            autoplay: false,
            autoplaySpeed: 3000,
            infinite: true,
            fade: false,
            speed: 600,
            touchThreshold: 10,
            arrows: false,
            dots: false,
        });
        $(homeslider).on("beforeChange", function(event, slick, currentSlide, nextSlide) {
            $(".slick-dots-item").removeClass('isActive');
            $(".slick-dots-item").eq(nextSlide).addClass('isActive');
        });

        $(".slick-dots-item").click(function(event) {
            var n = $(".slick-dots-item").index(this);
            $(".mv__slider").slick("slickGoTo", n);
        });
    </script>