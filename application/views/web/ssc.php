<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" id="styles-css" href="http://localhost/stp/assets/css/styles_002.css" type="text/css" media="all">
    <link rel="stylesheet" id="style-css" href="http://localhost/stp/assets/css/style_3.css" type="text/css" media="all">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/stp/assets/css/main.css" />
    <link rel="stylesheet" href="http://localhost/stp/assets/css/style.css" />
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
    <title>Solo Technopark | Solo Science Center</title>
  </head>
  <body>
    <div class="container-fluid page page-content">
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
      <h1>Some text to enable scrolling</h1>
    </div>
  </body>
</html>
