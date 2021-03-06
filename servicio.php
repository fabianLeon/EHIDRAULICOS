<?php include_once 'controller/servicio_controller.php'; ?>
<html lang="en">
    <?php include_once 'templates/head.php'; ?>
    <body>

        <?php include_once 'templates/header.php'; ?>
        <!-- Fixed navbar -->

        <!-- *****************************************************************************************************************
         BLUE WRAP
         ***************************************************************************************************************** -->
        <div id="blue">
            <div class="container">
                <div class="row">
                    <h3><?php echo $titulo; ?></h3>
                </div><!-- /row -->
            </div> <!-- /container -->
        </div><!-- /blue -->

        <!-- *****************************************************************************************************************
         TITLE & CONTENT
         ***************************************************************************************************************** -->

        <div class="container mt">
            <?php foreach ($descripciones as $d) { ?>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="spacing"></div>
                        <h4><?php echo $d['n_titulo'] ?></h4>
                        <br>
                        <p><?php echo $d['n_descripcion'] ?></p>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="portfolio-item graphic-design">
                            <div class="he-wrap tpl6">
                                <img class="img-responsive" src="<?php echo ("assets/img/servicios/" . $d['n_path_imagen']) ?>" alt="" >
                                <div class="he-view">
                                    <div class="bg a0" data-animate="fadeIn">
                                        <h3 class="a1" data-animate="fadeInDown"><?php echo $d['n_titulo'] ?></h3>
                                        <a data-rel="prettyPhoto" href="<?php echo ("assets/img/servicios/" . $d['n_path_imagen']) ?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                    </div><!-- he bg -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <br><! --/row -->
            <?php } ?>
        </div><! --/container -->

        <!-- *****************************************************************************************************************
         PORTFOLIO SECTION
         ***************************************************************************************************************** -->
        <div id="portfoliowrap">
            <div class="portfolio-centered">
                <h3>OTROS PORTAFOLIOS.</h3>
                <div class="recentitems portfolio">
                    <?php foreach ($servicios as $s) { ?>
                    
                    <div class="portfolio-item graphic-design">
                        <div class="he-wrap tpl6">
                            <img src=<?php echo ("assets/img/servicios/" . $s['n_path_imagen']) ?> alt="">
                            <div class="he-view">
                                <div class="bg a0" data-animate="fadeIn">
                                    <h3 class="a1" data-animate="fadeInDown"><?php echo $s['n_titulo']?></h3>
                                    <a data-rel="prettyPhoto" href="<?php echo ("assets/img/servicios/" . $s['n_path_imagen']) ?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-search"></i></a>
                                    <a href="<?php echo ("servicio.php?id=" . $s['k_servicio']) ?>" class="dmbutton a2" data-animate="fadeInUp"><i class="fa fa-link"></i></a>
                                </div><!-- he bg -->
                            </div><!-- he view -->		
                        </div><!-- he wrap -->
                    </div><!-- end col-12 -->
                    <?php } ?>


                </div><!-- portfolio -->
            </div><!-- portfolio container -->
        </div><!--/Portfoliowrap -->



        <!-- *****************************************************************************************************************
         FOOTER
         ***************************************************************************************************************** -->
        <?php include_once 'templates/footer.php'; ?>

        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <?php include_once 'templates/js.php'; ?>
        <script>
            // Portfolio
            (function ($) {
                "use strict";
                var $container = $('.portfolio'),
                        $items = $container.find('.portfolio-item'),
                        portfolioLayout = 'fitRows';

                if ($container.hasClass('portfolio-centered')) {
                    portfolioLayout = 'masonry';
                }

                $container.isotope({
                    filter: '*',
                    animationEngine: 'best-available',
                    layoutMode: portfolioLayout,
                    animationOptions: {
                        duration: 750,
                        easing: 'linear',
                        queue: false
                    },
                    masonry: {
                    }
                }, refreshWaypoints());

                function refreshWaypoints() {
                    setTimeout(function () {
                    }, 1000);
                }

                $('nav.portfolio-filter ul a').on('click', function () {
                    var selector = $(this).attr('data-filter');
                    $container.isotope({filter: selector}, refreshWaypoints());
                    $('nav.portfolio-filter ul a').removeClass('active');
                    $(this).addClass('active');
                    return false;
                });

                function getColumnNumber() {
                    var winWidth = $(window).width(),
                            columnNumber = 1;

                    if (winWidth > 1200) {
                        columnNumber = 5;
                    } else if (winWidth > 950) {
                        columnNumber = 4;
                    } else if (winWidth > 600) {
                        columnNumber = 3;
                    } else if (winWidth > 400) {
                        columnNumber = 2;
                    } else if (winWidth > 250) {
                        columnNumber = 1;
                    }
                    return columnNumber;
                }

                function setColumns() {
                    var winWidth = $(window).width(),
                            columnNumber = getColumnNumber(),
                            itemWidth = Math.floor(winWidth / columnNumber);

                    $container.find('.portfolio-item').each(function () {
                        $(this).css({
                            width: itemWidth + 'px'
                        });
                    });
                }

                function setPortfolio() {
                    setColumns();
                    $container.isotope('reLayout');
                }

                $container.imagesLoaded(function () {
                    setPortfolio();
                });

                $(window).on('resize', function () {
                    setPortfolio();
                });
            })(jQuery);
        </script>
    </body>
</html>
