<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://localhost/stp/assets/css/style.css" />
    <link href="<?php echo base_url("assets/slider/bootstrap.min.css"); ?>" rel="stylesheet">
	  <link rel="stylesheet" href="<?php echo base_url("assets/slider/font-awesome.min.css"); ?>">
	  <link href="<?php echo base_url("assets/slider/animate.min.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/slider/prettyPhoto.css"); ?>" rel="stylesheet">
	  <link href="<?php echo base_url("assets/slider/main.css"); ?>" rel="stylesheet">
    <link href="<?php echo base_url("assets/slider/responsive.css"); ?>" rel="stylesheet">
    <link rel="stylesheet" id="styles-css" href="http://localhost/stp/assets/css/styles_002.css" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="http://localhost/stp/assets/css/style_3.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/stp/assets/css/main.css" />
    <link href="<?php echo base_url("assets/slider/icon.css"); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script>
    function GetXmlHttpObject()
    {
      var xmlHttp;

      try {
        xmlHttp = new XMLHttpRequest();
      }
      catch (e)
      {
        try {
          xmlHttp = new ActiveXObject("Msxm12.XMLHTTP");
        } catch (e) {
          xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");

        }

        }
        return xmlHttp;
      }
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://localhost/stp/assets/js/jquery.js"></script>
    <script src="http://localhost/stp/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/stp/assets/js/jquery.prettyPhoto.js"></script>
    <script src="http://localhost/stp/assets/js/jquery.isotope.min.js"></script>
    <script src="http://localhost/stp/assets/js/wow.min.js"></script>
    <script src="http://localhost/stp/assets/js/main.js"></script>
    <style>
    /* Note: Try to remove the following lines to see the effect of CSS positioning */
    .affix {
        top: 0;
        width: 100%;
        z-index: 9999 !important;
    }

    .affix + .container-fluid {
        padding-top: 70px;
    }
    </style>
    <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-71541642-1', 'auto');
  	ga('require', 'displayfeatures');
  	ga('send', 'pageview');
  	</script>
    <script>
    $(document).ready(function() {
      $("#nav li a").click(function() {

          $("#ajax-content").empty().append("<div id='loading'><img src='http://localhost/stp/assets/img/loading.gif' alt='Loading' /></div>");
          $("#nav li a").removeClass('current');
          $(this).addClass('current');

          $.ajax({ url: this.href, success: function(html) {
              $("#ajax-content").empty().append(html);
              }
      });
      return false;
      });
  });
    </script>
    <title>Solo Technopark</title>
  </head>
  <body>
    <!--header-->
    <div class="container-fluid page" style="background-image:url('http://localhost/stp/assets/img/indonesia2.jpg')">
      <div class="grid-10 tablet-grid-10 mobile-grid-30 b-r logo-holder">
        <a href="http://localhost/stp/"><img src="http://localhost/stp/assets/img/logostp.png" alt=""></a>
      </div>
      <div class="grid-50 tablet-grid-60 mobile-grid-70">
        <div class="brand">
          <h3 class="site-title" style="font-size:15px">WHERE <br>COMPETENCE <br>INOVATIVE <br>TECHNOLOGY <br>AND BUSINESS GROW</h3>
        </div><!-- brand -->
      </div>
      <div class="grid-20 tablet-grid-20 hide-on-mobile">
        <form role="search" method="get" id="searchform" action="https://ristekdikti.go.id/" class="search-top" style="margin:0;">
          <input name="s" id="s" type="text">
          <input value="" type="submit">
        </form>
      </div>
    </div>

    <!--navigasi-->
    <div class="main-nav" style="background-color:#4286f4" data-spy="affix" data-offset-top="197">
      <div class="grid-container" style="background-color:#4286f4;width:auto;">
        <nav style="background-color:#4286f4">
          <div class="menu text-uppercase">
            <ul id="nav" class=" horizontal no-padder">
             <li><a href="<?php echo base_url("web/home"); ?>">Home</a></li>
              <li><a href='<?php echo base_url("web/profil"); ?>'>Profil</a></li>
              <li><a href="<?php echo base_url("web/program"); ?>">Program</a></li>
              <li><a href="<?php echo base_url("web/berita"); ?>">Berita</a></li>
              <li><a href="<?php echo base_url("web/ssc"); ?>">Solo Science Center</a></li>
              <li><a>Diklat Mekanik</a>
                <ul class="sub-menu">
                  <li><a href="#">Berita</a></li>
                  <li><a href="#">Pendaftaran</a></li>
                </ul>
              </li>
              <li><a>Inkubator Bisnis</a>
                <ul class="sub-menu">
                  <li><a href="#">Berita</a></li>
                  <li><a href="#">Pendaftaran</a></li>
                  <li><a href="#">Profil Tenant dan List Produk</a></li>
                </ul>
              </li>
              <li><a href="<?php echo base_url("web/kontak"); ?>">Kontak</a></li>
            </ul>
          </div><!--/.menu-text-->
        </nav><!--/.menu-text-->
      </div><!--/.grid-container-->
    </div><!--/.main-nav-->

<!--isi content-->
    <div id="ajax-content">
      <!--konten 1 slider dan submenu-->
        <div class="container" style="width:1175px;height:auto">
        <div class="slider" style="margin-top:30px">
            <div class="col-sm-6">
            <div id="about-slider">
              <div id="carousel-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                  <ol class="carousel-indicators visible-xs">
                    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-slider" data-slide-to="1"></li>
                    <li data-target="#carousel-slider" data-slide-to="2"></li>
                  </ol>

                <div class="carousel-inner" style="height:300px;max-width:100%">
                  <div class="item active">
                    <img src="http://localhost/stp/assets/img/slider_one.jpg" class="img-responsive" alt="">
                   </div>
                   <div class="item">
                    <img src="http://localhost/stp/assets/img/slider_one.jpg" class="img-responsive" alt="">
                   </div>
                   <div class="item">
                    <img src="http://localhost/stp/assets/img/slider_one.jpg" class="img-responsive" alt="">
                   </div>
                </div>

                <a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>

                <a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div> <!--/#carousel-slider-->
            </div><!--/#about-slider-->
          </div><!--/.col-md-4-->
        </div>
        <div class="col-sm-6">
          <body-menu>
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1">SOLO SCIENCE CENTER</label>

            <input id="tab2" type="radio" name="tabs">
            <label for="tab2">DIKLAT MEKANIK</label>

            <input id="tab3" type="radio" name="tabs">
            <label for="tab3">BERITA</label>

            <section-menu id="content1">
              <p-1>
                Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
              </p-1>
              <p-1>
                Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
              </p-1>
            </section-menu>

            <section-menu id="content2">
              <p-1>
                Bacon ipsum dolor sit amet landjaeger sausage brisket, jerky drumstick fatback boudin ball tip turducken. Pork belly meatball t-bone bresaola tail filet mignon kevin turkey ribeye shank flank doner cow kielbasa shankle. Pig swine chicken hamburger, tenderloin turkey rump ball tip sirloin frankfurter meatloaf boudin brisket ham hock. Hamburger venison brisket tri-tip andouille pork belly ball tip short ribs biltong meatball chuck. Pork chop ribeye tail short ribs, beef hamburger meatball kielbasa rump corned beef porchetta landjaeger flank. Doner rump frankfurter meatball meatloaf, cow kevin pork pork loin venison fatback spare ribs salami beef ribs.
              </p-1>
              <p-1>
                Jerky jowl pork chop tongue, kielbasa shank venison. Capicola shank pig ribeye leberkas filet mignon brisket beef kevin tenderloin porchetta. Capicola fatback venison shank kielbasa, drumstick ribeye landjaeger beef kevin tail meatball pastrami prosciutto pancetta. Tail kevin spare ribs ground round ham ham hock brisket shoulder. Corned beef tri-tip leberkas flank sausage ham hock filet mignon beef ribs pancetta turkey.
              </p-1>
            </section-menu>

            <section-menu id="content3">
              <p-1>
                Bacon ipsum dolor sit amet beef venison beef ribs kielbasa. Sausage pig leberkas, t-bone sirloin shoulder bresaola. Frankfurter rump porchetta ham. Pork belly prosciutto brisket meatloaf short ribs.
              </p-1>
              <p-1>
                Brisket meatball turkey short loin boudin leberkas meatloaf chuck andouille pork loin pastrami spare ribs pancetta rump. Frankfurter corned beef beef tenderloin short loin meatloaf swine ground round venison.
              </p-1>
            </section-menu>
          </body-menu>
        </div>
      </div><!--/.container-->

  <!--konten 2 untuk brosur dll-->
      <div class="container" style="width:1175px;height:auto">
      <p-1>untuk brosur dan keterangan blablabla</p-1>
      </div>

  <!--konten 3 untuk layanan diklat-->
      <div class="container" style="width:1175px;height:auto">
        <div class="center wow fadeInDown">
            <h2>Features</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
        </div>
          <div class="row">
                  <div class="col-md-4 col-sm-6">
                      <div class="feature-wrap-o">
                          <i class="fa fa-plane"></i>
                          <h2>Fresh and Clean</h2>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                    </div>
                  </div><!--/.col-md-4-->

                  <div class="col-md-4 col-sm-6">
                      <div class="feature-wrap-o">
                          <i class="fa fa-graduation-cap"></i>
                          <h2>Retina ready</h2>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                      </div>
                  </div><!--/.col-md-4-->

                  <div class="col-md-4 col-sm-6">
                      <div class="feature-wrap-o">
                          <i class="fa fa-university"></i>
                          <h2>Easy to customize</h2>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                      </div>
                  </div><!--/.col-md-4-->

                  <div class="col-md-4 col-sm-6">
                      <div class="feature-wrap-o">
                          <i class="fa fa-leaf"></i>
                          <h2>Adipisicing elit</h2>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                      </div>
                  </div><!--/.col-md-4-->

                  <div class="col-md-4 col-sm-6">
                      <div class="feature-wrap-o">
                          <i class="fa fa-cogs"></i>
                          <h2>Sed do eiusmod</h2>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                      </div>
                  </div><!--/.col-md-4-->

                  <div class="col-md-4 col-sm-6">
                      <div class="feature-wrap-o">
                          <i class="fa fa-heart"></i>
                          <h2>Labore et dolore</h2>
                          <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                      </div>
                  </div><!--/.col-md-4-->
          </div><!--/.row-->
      </div><!--/.container-->
    </div>

<!--footer-->
        <div class="footer">
          <div class="footer-content">
            <p-1>Contact Us :</p-1>
            <div class="sosmed">
            <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i><p-1>   Whatsapp   </p-1>
            <i class="fa fa-facebook-square fa-3x" aria-hidden="true">  </i><p-1>   Solo Technopark</p-1>
            <i class="fa fa-twitter-square fa-3x" aria-hidden="true">  </i><p-1>   Solo Technopark</p-1>
            <i class="fa fa-instagram fa-3x" aria-hidden="true">  </i><p-1>   Solo Technopark</p-1>
          </div>
        </div>
      </div>
    </body>
  </html>
