<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Panel Registrasi</title>
    <link href="{{ asset('praktikum_images_panel_icon_user_icon.png') }}" rel="shortcut icon" title="Favicon" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- Le styles -->
    <link href="{{ asset('praktikum_css_bootstrap.css') }}" rel="stylesheet" />
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
    <link href="{{ asset('praktikum_css_bootstrap-responsive.css') }}" rel="stylesheet" />
    <script charset="utf-8" src="{{ asset('praktikum_js_jquery-1.8.2.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('praktikum_js_bootstrap-tab.js') }}"></script>
    <script src="{{ asset('praktikum_js_bootstrap-modal.js') }}"></script>
    <script src="{{ asset('praktikum_js_bootstrap-alert.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#tabs').tab();
        });
    </script>
    <!-- Javascript tooltip -->
    <script src="{{ asset('praktikum_js_bootstrap-tooltip.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $('.tooltipdetail').tooltip();
        });
    </script>
    <script src="{{ asset('praktikum_js_jquery.media.js') }}" type="text/javascript"></script>
    <script src="{{ asset('praktikum_js_jquery.metadata.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#user_pdf').media({
                width: 845,
                height: 1110
            });
        });
    </script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <![endif]-->
    <!-- Fav and touch icons -->
    <link href="../assets/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon-precomposed"
        sizes="144x144" />
    <link href="../assets/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon-precomposed"
        sizes="114x114" />
    <link href="../assets/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72" />
    <link href="../assets/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon-precomposed" />
    <link href="../assets/ico/favicon.png" rel="shortcut icon" />
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="row-fluid">
                <div class="span2"></div>
                <div class="span8">
                    <button class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse" type="button">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="brand" href="javascript:void(0)">Asisten Laboratorium</a>
                    <div class="nav-collapse collapse">
                        <p class="navbar-text pull-right">Login sebagai
                            <a class="navbar-link"
                                href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/myprofile">
                                {{ $user->name }}
                            </a>
                        </p>
                        <ul class="nav">
                            <li class="active"><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/index">Beranda</a>
                            </li>
                            <li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/about">Tentang
                                    kami</a></li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
                <div class="span2"></div>
            </div>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span2" style="text-align:center;">
            <img src="{{ asset('praktikum__images_telkom-university.png') }}" width="160px" />
        </div>
        <div class="span8">
            <div class="row-fluid background">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Praktikum</li>
                            <li class="divider"></li>
                            <li class="active"><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/jadwal"><i
                                        class="icon-calendar"></i>Jadwal praktikum</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/kelompok"><i
                                        class="icon-calendar"></i>Kelompok praktikum</a></li>
                            <!-- <li  ><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/addKelompok"><i class="icon-calendar"></i>Tambah kelompok praktikum</a></li> -->
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/edit_kelompok"><i
                                        class="icon-edit"></i>Edit Kelompok</a></li>
                            <!-- <li  ><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/praktikan"><i class="icon-list-alt"></i>Lihat praktikan</a></li> -->
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/inputnilaipraktikum"><i
                                        class="icon-list-alt"></i>Input Nilai Praktikum</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/inputnilaisusulan"><i
                                        class="icon-indent-left"></i>Input Nilai Susulan</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/praktikum_pengganti"><i
                                        class="icon-bookmark"></i>Input Praktikum Pengganti</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/lihat_inputnilai"><i
                                        class="icon-download"></i>Lihat hasil Input</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/datajadwal"><i
                                        class="icon-list-alt"></i>Lihat Detail Jadwal</a></li>
                            <li class="nav-header">Workshop</li>
                            <li class="divider"></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/presensiworkshop"><i
                                        class="icon-list-alt"></i>Input Presensi Workshop</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/lihatpresensiworkshop"><i
                                        class="icon-list-alt"></i>Lihat Presensi Workshop</a></li>
                            <li class="nav-header">Berita Acara Praktikum</li>
                            <li class="divider"></li>
                            <li><a href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/bap"><i
                                        class="icon-ok-sign"></i>Lihat BAP</a></li>
                            <li class="nav-header">Profile</li>
                            <li class="divider"></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/myprofile"><i
                                        class="icon-user"></i>Profilku</a></li>
                            <li><a
                                    href="https://see.labs.telkomuniversity.ac.id/praktikum/index.php/pageasisten/logout"><i
                                        class="icon-off"></i>Logout</a></li>
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span9">
                    <div class="hero-unit">
                        <h2>My Praktikum, Pannel!</h2>
                        <p>This is a template for a simple marketing or informational website. It includes a large
                            callout called the hero unit and three supporting pieces of content. Use it as a starting
                            point to create something more unique.</p>
                        <p><a class="btn btn-primary btn-large" href="#">Learn more »</a></p>
                    </div>
                    <!-- <div class="row-fluid">
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
            <div class="span4">
              <h2>Heading</h2>
              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
              <p><a class="btn" href="#">View details &raquo;</a></p>
            </div>
          </div> -->
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
            <hr />
            <footer>
                <p>© Laboran FTE 2019</p>
            </footer>
        </div>
        <div class="span2"></div>
    </div>
    <!--/.fluid-container-->
    <!-- Le javascript
    ================================================== -->
</body>

</html>
