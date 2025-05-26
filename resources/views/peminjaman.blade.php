<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{ asset('inven_asset_img_icon.png') }}" rel="shortcut icon" title="Favicon" />
    <title>Peminjaman</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('inven_asset_vendor_fontawesome-free_css_all.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Custom styles for this template-->
    <link href="{{ asset('inven_asset_css_sb-admin-2.min.css') }}" rel="stylesheet" type="text/css"/>
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
    <div class="container-fluid mt-2">
        <div class="bgPeminjaman">
            <!-- Outer Row -->
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-8 col-md-8">
                    <div class="card o-hidden border-0 shadow-lg bgPem">
                        <div class="card-body p-0">
                            <!-- Nested Row within Card Body -->
                            <div class="row mt-3 mb-3">
                                <div class="col-lg-12">
                                    <div class="text-center">
                                        <span class="h4 text-gray-900 font-weight-bold">Form Peminjaman </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="p-4">
                                        <div class="form-group row">
                                            <span class="text-danger" style="font-size: 12px;">* download form
                                                peminjaman </span>
                                            <span style="font-size: 12px;"><a
                                                    href="https://telkomuniversityofficial-my.sharepoint.com/:w:/g/personal/laboranfte_telkomuniversity_ac_id/EcznqBTyTdRNls0_nD1MSZoBS_imFOeFqU0vBiGFTgIfpA?e=P8CLse"
                                                    target="_blank">Download</a></span>
                                        </div>
                                        <form accept-charset="utf-8"
                                            action="https://see.labs.telkomuniversity.ac.id/inven/peminjaman/aksi_upload"
                                            enctype="multipart/form-data" method="post">
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Laboratorium</label>
                                                <div class="col-sm-7">
                                                    <select class="custom-select" id="lab" name="lab">
                                                        <option selected="" value=" ">Laboratorium</option>
                                                        <option value="1">Adaptive Network</option>
                                                        <option value="2">Control &amp; Energy System Laboratory
                                                        </option>
                                                        <option value="3">Instrumentation System Laboratory
                                                        </option>
                                                        <option value="4">Material Engineering &amp; Modelling
                                                            Laboratory</option>
                                                        <option value="5">Automation System and Intelligent Control
                                                            Laboratory (ASIC)</option>
                                                        <option value="6">Renewable Energy and Advanced Electrical
                                                            Engineering Laboratory (REAEE)</option>
                                                        <option value="7">Electronic Device and Embedded System
                                                            (EDES)</option>
                                                        <option value="8">Realm of Artificial Intelligent Design
                                                            (RAID)</option>
                                                        <option value="10">Signal Processing for Intelligent System
                                                            Lab</option>
                                                        <option value="11">Cyber Physical System</option>
                                                        <option value="12">Laboratorium Dasar Komputer</option>
                                                        <option value="13">Laboratorium Fisika Dasar</option>
                                                        <option value="14">Multimedia Applications, Big Data and
                                                            Cyber Security</option>
                                                        <option value="15">Satellite Communication &amp; Radar
                                                            Laboratory</option>
                                                        <option value="16">Wireless Communication Laboratory
                                                        </option>
                                                        <option value="17">Optical Communication Laboratory</option>
                                                        <option value="18">Audio and Speech Signal Processing
                                                            Laboratory</option>
                                                        <option value="19">Image Processing and Vision</option>
                                                        <option value="20">Continuous Computing (CC)</option>
                                                        <option value="21">Biomedical Instrumentation Lab</option>
                                                        <option value="22">Laboran</option>
                                                        <option value="23">KCS Control Electronics and Intelligent
                                                            Systems</option>
                                                        <option value="24">Smart Data Sensing</option>
                                                        <option value="25">Energy Conversion</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Nama Laboratorium</label>
                                                <div class="col-sm-7">
                                                    <select class="custom-select" id="sublab" name="sublab">
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Nama Lengkap</label>
                                                <div class="col-sm-7">
                                                    <input autocomplete="off"
                                                        class="form-control border-dark text-gray-900" id="Npem"
                                                        name="Npem" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">NIM/NIP</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control border-dark text-gray-900" id="nim"
                                                        name="nim" type="text" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Nomor Hp</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control border-dark text-gray-900"
                                                        id="NoHp" name="NoHp" type="text"
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Kepentingan</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control border-dark text-gray-900"
                                                        id="kepentingan" name="kepentingan" type="text" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Tanggal Penggunaan</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control border-dark text-gray-900"
                                                        id="Tpenggunaan" name="Tpenggunaan" type="date"
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-5 col-form-label text-gray-900"
                                                    for="inputPassword">Tanggal Pengembalian</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control border-dark text-gray-900"
                                                        id="Tpengembalian" name="Tpengembalian" type="date"
                                                        value="" />
                                                </div>
                                            </div>
                                            <div class="custom-file">
                                                <input accept="application/pdf" class="custom-file-input border-dark"
                                                    id="pdf" name="pdf" type="file" />
                                                <label class="custom-file-label text-gray-900"
                                                    for="inputGroupFile01">upload form peminjaman</label>
                                                <span class="text-danger" style="font-size: 12px;">* pdf Maximal Size
                                                    1MB! </span>
                                            </div>
                                            <div class="text-right mt-1">
                                                <button class="btn btn-primary" type="submit">Ajukan</button>
                                            </div>
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
    </div>
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

</html>
