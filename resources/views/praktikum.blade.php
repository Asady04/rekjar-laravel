<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<title>Panel Registrasi</title>
<link href="{{ asset('praktikum_images_panel_icon_user_icon.png') }}" rel="shortcut icon" title="Favicon"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<!-- Le styles -->
<link href="{{ asset('praktikum_css_bootstrap.css') }}" rel="stylesheet"/>
<style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
      
      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
<link href="{{ asset('praktikum_css_bootstrap-responsive.css" rel="stylesheet') }}"/>
<script charset="utf-8" src="{{ asset('praktikum_js_jquery-1.8.2.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('praktikum_js_bootstrap-alert.js') }}"></script>
<script src="{{ asset('praktikum_js_bootstrap-tab.js') }}"></script>
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
<!-- Fav and touch icons -->
<link href="../assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144"/>
<link href="../assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114"/>
<link href="../assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72"/>
<link href="../assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed"/>
<link href="../assets/ico/favicon.png" rel="shortcut icon"/>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top">
<div class="navbar-inner">
<div class="row-fluid">
<div class="span2"> </div>
<div class="span8"> <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span>
<span class="icon-bar"></span> </button> <a class="brand" href="javascript:void(0)">My Praktikum</a> <div class="nav-collapse collapse">
<p class="navbar-text pull-right">               Login sebagai <a class="navbar-link" href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/myprofile"> {{ $user->name }}</a> </p> <ul class="nav">
<li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/index">Beranda</a></li> <li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/about">Tentang kami</a></li> </ul> </div><!--/.nav-collapse --> </div> <div class="span2">
</div> </div>
</div>
</div>
<div class="row-fluid">
<div class="span2" style="text-align:center;">
<img src="{{ asset('praktikum__images_telkom-university.png') }}" width="160px"/>
</div>
<div class="span8">
<div class="row-fluid background">
<div class="span3">
<div class="well sidebar-nav">
<ul class="nav nav-list">
<li class="nav-header">Praktikum</li>
<li class="divider"></li>
<li> <a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/pilihjadwal"><i class="icon-chevron-right"></i> Pilih Jadwal</a></li>
<li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/jadwal"><i class="icon-calendar"></i> Praktikumku</a></li>
<li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/nilai_user"><i class="icon-book"></i> Nilaiku</a></li>
<li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/kelompok"><i class="icon-book"></i> Kelompokku</a></li>
<li class="nav-header">Profile</li>
<li class="divider"></li>
<li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/myprofile"><i class="icon-user"></i>Profilku</a></li>
<li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/logout"><i class="icon-off"></i>Logout</a></li>
</ul>
</div><!--/.well -->
</div><!--/span-->
<div class="span9">
<!--
           <h5><p class="text-center">Jadwal running modul</p></h5>
            <h6>
            <table class="table table-bordered table-condensed">
              <tr>
                <th>No</th>
                <th>Prodi</th>
                <th>Mata praktikum</th>
                <th>Jadwal</th>
                <th>Tempat</th>
                <th>Jam</th>
              </tr>
              <tr>
                <td>1</td>
                <td rowspan="7">S1-TT</td>
                <td>Rangkaian Listrik</td>
                <td rowspan="3"> Jum'at, 20 sept 2013</td>
                <td rowspan="3"> Gd A/B</td>
                <td rowspan="3"> 18.30</td>
              </tr>
               <tr>
                
                <td>2</td>
                <td>Teknik Digital</td>


              </tr>
               <tr>
                
                <td>3</td>
                <td>Mikroprosesor</td>


              </tr>
               <tr>
                
                <td>4</td>
                <td>Switching</td>
                <td rowspan="4">Jum'at, 20 sept 2013</td>
                <td rowspan="4">Gd A/B</td>
                <td rowspan="4">19.00</td>
              </tr>
               <tr>
                
                <td>5</td>
                <td>PSD</td>


              </tr>
               <tr>
                
                <td>6</td>
                <td>Siskom</td>


              </tr>
               <tr>
                
                <td>7</td>
                <td>Elegtromagnetika</td>


              </tr>
              <tr>
                <td>8</td>
                <td rowspan="4">S1-SK</td>
                <td>OOP</td>
                <td rowspan="2">Jum'at, 20 sept 2013</td>
                <td rowspan="2">Gd A/B</td>
                <td rowspan="2">18.30</td>
              </tr>
               <tr>
                
                <td>9</td>
                <td>Rangkaian Listrik</td>


              </tr>
               <tr>
                
                <td>10</td>
                <td>Desain Basis data</td>
                <td rowspan="2">Sabtu, 21 sept 2013</td>
                <td rowspan="2">N113</td>
                <td rowspan="2">14.00</td>
              </tr>
               <tr>
                
                <td>11</td>
                <td>Mikroprosesor embeded</td>


              </tr>
                <tr>
                <td>12</td>
                <td rowspan="5">S1-TE</td>
                <td>Rangkaian Liastrik</td>
                <td rowspan="2">Jum'at, 20 sept 2013</td>
                <td rowspan="2">Gd A/B</td>
                <td rowspan="2">18.30</td>
              </tr>
               <tr>
                
                <td>13</td>
                <td>Teknik digital</td>

              </tr>
               <tr>
                
                <td>14</td>
                <td>Mikroprosesor</td>
                <td rowspan="3">Sabtu, 21 sept 2013</td>
                <td rowspan="3">N110</td>
                <td rowspan="3">14.00</td>
              </tr>
               <tr>
                
                <td>15</td>
                <td>ELKA 2</td>


              </tr>
              <tr>
                
                <td>16</td>
                <td>PSD</td>


              </tr>
            </table>
          </h6>
            <p class="text-center">Demikian kami sampaikan mohon untuk diperhatikan. Atas perhatianya kami ucapkan terimakasih.</p>
            <p><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/pilihjadwal" class="btn btn-danger btn-default">Pilih jadwal praktikum &raquo;</a></p>
          </div>
        -->
<div class="hero-unit">
<div class="alert alert-block">
<button class="close" data-dismiss="alert" type="button">×</button>
<h4>Perhatian!</h4>
  Praktikan <strong>WAJIB</strong> mengikuti running modul dan memahami aturan serta penilaian praktikum
</div>
<!--
  <p><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/page/pilihjadwal" class="btn btn-danger btn-default">Pilih jadwal praktikum &raquo;</a></p>
  -->
</div>
</div><!--/span-->
</div><!--/row-->
</div>
<div class="span2">
</div>
</div>
<!-- footer -->
<div class="row-fluid">
<div class="span2"></div>
<div class="span8">
<hr/>
<footer>
<p>© Laboran 2015</p>
</footer>
</div>
<div class="span2"></div>
</div>
<!--/.fluid-container-->
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap-transition.js"></script>
<script src="../assets/js/bootstrap-alert.js"></script>
<script src="../assets/js/bootstrap-modal.js"></script>
<script src="../assets/js/bootstrap-dropdown.js"></script>
<script src="../assets/js/bootstrap-scrollspy.js"></script>
<script src="../assets/js/bootstrap-tooltip.js"></script>
<script src="../assets/js/bootstrap-popover.js"></script>
<script src="../assets/js/bootstrap-button.js"></script>
<script src="../assets/js/bootstrap-collapse.js"></script>
<script src="../assets/js/bootstrap-carousel.js"></script>
<script src="../assets/js/bootstrap-typeahead.js"></script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Jan 17, 2022 08:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("timerpilih").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("timerpilih").innerHTML = "0";
  }
}, 1000);
</script>
</body>
</html>
