<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('inven_asset_img_icon.png') }}" rel="shortcut icon" title="Favicon" />
    <title>login Page</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('inven_asset_vendor_fontawesome-free_css_all.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template-->
    <link href="{{ asset('inven_asset_css_sb-admin-2.min.css') }}" rel="stylesheet" />
    <style>
        .bgPeminjaman {

            background-image: url(https://see.labs.telkomuniversity.ac.id/inven/asset/img/2.png);

            background-repeat: no-repeat;

            background-position: center;

            background-size: cover;

        }



        .bginventaris {

            background-image: url(https://see.labs.telkomuniversity.ac.id/inven/asset/img/bginven.jpg);

            background-repeat: no-repeat;

            background-position: center;

            background-size: cover;

            top: 0px;

            right: 0px;

            bottom: 0px;

            left: 0px;

        }



        .bglogin {

            background-image: url(https://see.labs.telkomuniversity.ac.id/inven/asset/img/Seelabsmob.png);

            background-position: center;

            background-size: cover;

        }



        .bgPem {

            margin-bottom: 20px;

            margin-top: 20px;

        }



        @media (min-width: 1800px) {

            .container-fluid {

                width: 1500px;

            }

            .bgPem {

                margin-bottom: 80px;

                margin-top: 80px;

            }

        }
    </style>
</head>

<body style="background-color: #8f9bc6;">

    <body class="bginventaris">
        <div class="container pt-lg-5">
            <!--  Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-12 col-md-9">
                    <div class="card o-hidden border-0 shadow-lg my-5 rounded">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row border">
                                <div class="col-lg-6 d-none d-lg-block bglogin border-right"></div>
                                <div class="col-lg-6">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h3 text-gray-900 font-weight-bold">Login Inventaris</h1>
                                            <hr />
                                        </div>
                                        <form action="https://see.labs.telkomuniversity.ac.id/inven/auth" class="user"
                                            method="post">
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                                </div>
                                                <input class="form-control input_user" id="username" name="username"
                                                    placeholder="username" type="text" />
                                            </div>
                                            <div class="input-group mb-4">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                                </div>
                                                <input class="form-control input_pass" id="password" name="password"
                                                    placeholder="password" type="password" value="" />
                                            </div>
                                            <button class="btn btn-primary btn-user btn-block" type="submit">

                                                Login

                                            </button>
                                            <hr />
                                            <a class="btn btn-primary btn-user btn-block"
                                                href="/inven/peminjaman" role="button">

                                                Peminjaman

                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('inven_asset_vendor_jquery_jquery.min.js') }}"></script>
        <script src="{{ asset('inven_asset_vendor_bootstrap_js_bootstrap.bundle.min.js') }}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{ asset('inven_asset_vendor_jquery-easing_jquery.easing.min.js') }}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{ asset('inven_asset_js_sb-admin-2.min.js') }}"></script>
    </body>
    <script type="text/javascript">
        $('#selLab').on('change', function() {

            $('#selBarang').find('option').detach();

            var id = this.value;

            $.ajax({

                type: 'GET',

                url: "https://see.labs.telkomuniversity.ac.id/inven/peminjaman/getBarang/" + id,

                data: {
                    get_param: 'value'
                },

                dataType: 'json',

                success: function(data) {

                    $.each(data, function(index, element) {

                        $('#selBarang').append($('<option>', {

                            value: element.id,

                            text: element.nama_barang

                        }));





                    });

                }

            });



        });



        $('.custom-file-input').on('change', function() {

            let filename = $(this).val().split('\\').pop();

            $(this).next('.custom-file-label').addClass("selected").html(filename);

        });





        $('#adBar').on('click', function(e) {

            e.preventDefault();

            var data = $('#selBarang').val();

            var lab = $('#selLab option:selected').text();

            var idlab = $('#selLab option:selected').val();

            var datText = $('#selBarang option:selected').text();

            if (datText == "") {



            } else {

                $('#dBarang').append('<div>' + datText + '<input type="hidden" name="listBar[]" value=' + data +
                    '|' + idlab + '> Laboratorium ' + lab +
                    '<a href="javascript:void(0);" class="remove_button"><i class="fas fa-minus-circle"></i></a></div>'
                    );

            }

        });



        $('#dBarang').on('click', '.remove_button', function(e) {

            e.preventDefault();

            $(this).parent('div').remove();

        });





        $('#lab').on('change', function() {

            $('#sublab').find('option').detach();

            var id = this.value;

            const myid = id.split("|");

            $.ajax({

                type: 'GET',

                url: "https://see.labs.telkomuniversity.ac.id/inven/Peminjaman/getSublab/" + myid[0],

                data: {
                    get_param: 'value'
                },

                dataType: 'json',

                success: function(data) {

                    $('#sublab').append($('<option>', {

                        value: '',

                        text: 'Sub Lab'

                    }));

                    $.each(data, function(index, element) {

                        $('#sublab').append($('<option>', {

                            value: element.id,

                            text: element.nama_sub_lab

                        }));

                    });

                }

            });



        });
    </script>
</body>

</html>
