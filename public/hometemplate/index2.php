<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>E-Recruitment BADAK NLG </title>
    <style>
        .noshadowbox {
            padding: 0 15px 15px 15px;
            background-color: #F5F5F5;
            text-align: left !important;
            border: 1px solid #e9e9e9;
            border-top: 0px;
        }

        input[type="text"] {
            display: block;
            width: 309px;
            height: 45px;
            margin: 15px auto;
            background: #fff;
            padding: 5px;
            font-size: 14px;
            border: 2px solid #fff;
            transition: all 0.3s ease;
        }

        input[type="text"]:focus {
            border: 2px solid #1abc9d
        }

        input[type="submit"] {
            display: block;
            background: #6495ed;
            width: 314px;
            padding: 12px;
            cursor: pointer;
            color: #fff;
            border: 0px;
            margin: auto;
            font-size: 17px;
            transition: all 0.3s ease;
        }

        input[type="submit"]:hover {
            background: #f45b4d
        }

        .btn-reg{
            display: block;
            background: limegreen;
            width: 314px;
            padding: 12px;
            cursor: pointer;
            color: #fff !important;
            border: 0;
            border-radius: 0;
            margin: auto;
            font-size: 17px;
            transition: all 0.3s ease;
        }

        .btn-reg:hover{
            background: green;
            color: white;
        }
    </style>
    <!-- STYLES & JQUERY
    ================================================== -->
    <script
            src="https://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" type="text/css" href="css/icons.css"/>
    <link rel="stylesheet" type="text/css" href="css/slider.css"/>
    <link rel="stylesheet" type="text/css" href="css/skinred.css"/><!-- change skin color -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
</head>
<body>
<div class="boxedtheme">
    <!-- TOP LOGO & MENU
    ================================================== -->
    <div class="grid">
        <div class="row space-bot">
            <!--Logo-->
            <div class="c4">
                <a href="index.php">
                    <img src="images/logo_ptbadakngl.png" class="logo" alt="" width="236px" height="74px">
                </a>
            </div>
            <!--Menu-->
            <div class="c8">
                <nav id="topNav">
                    <ul id="responsivemenu">
                        <li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span
                                class="showmobile">Home</span></a></li>
                        <li><a href="#">Learning Center</a>
                        <li><a href="#">LNG Academy</a>
                        </li>
                        <li><a href="#">Training</a>
                        </li>
                        <li><a href="#" onclick="openModal()"><strong>Register</strong></a>
                        </li>
                        <li class="last"><a href="#login"><strong>Login</strong></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- START content area
    ================================================== -->
    <div class="undermenuarea">
        <div class="boxedshadow">
        </div>
        <div class="grid">
            <div class="row">
                <div class="c8">
                    <h1 class="titlehead">Proses Pendaftaran</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="c3">

        </div>
        <div class="c6">
            <div class="row space-top">
                <div class="c12 space-top">
                    <h1 class="maintitle ">
                        <span class="text-center">FORM DATA DIRI</span>
                    </h1>
                </div>
            </div>
            <div class="space-bot">
                <h2 class="title hometitlebg" style="background: #f45b4d; height: 10px"></h2>
                <div class="noshadowbox" style="padding: 40px">
                    <input type="text" class="zocial-dribbble" placeholder="Nama Depan"/>
                    <input type="text" class="zocial-dribbble" placeholder="Nama Belakang"/>
                    <input type="text" class="zocial-dribbble" placeholder="Tempat Lahir"/>
                    <input type="text" class="zocial-dribbble" placeholder="Tanggal Lahir"/>
                    <input type="text" class="zocial-dribbble" placeholder="Alamat"/>
                    <input type="text" class="zocial-dribbble" placeholder="Nomor Telepon"/>
                    <input type="text" class="zocial-dribbble" placeholder="Jenjang Pendidikan Terakhir"/>
                    <br/>
                    <input type="submit" value="Selanjutnya"/>
                </div>
                <h2 class="title hometitlebg" style="background: #f45b4d; height: 10px"></h2>
            </div>
        </div>
        <div class="c3">

        </div>
    </div>

    <!-- FOOTER
    ================================================== -->
    <div id="wrapfooter">
        <div class="grid">
            <div class="row" id="footer">
                <!-- to top button  -->
                <p class="back-top floatright">
                    <a href="#top"><span></span></a>
                </p>
                <!-- 1st column -->
                <div class="c3">
                    <img src="images/badak_logo.png" style="margin: 15px;" alt="" height="180px" width="180px">
                </div>
                <!-- 2nd column -->
                <div class="c3">
                    <h2 class="title"><i class="icon-building"></i> Head - Office</h2>
                    <hr class="footerstress">
                    <dl>
                        <dt>Wisma Nusantara 9th Floor
                            Jl MH Thamrin No 59,
                            Jakarta 10350,
                            Indonesia
                        </dt>
                        <dd><span>Telp:</span>+6221 31930243, 31936317</dd>
                        <dd><span>Fax:</span>+6221 3142974</dd>
                    </dl>
                </div>
                <!-- 3rd column -->
                <div class="c3">
                    <h2 class="title"><i class="icon-sitemap"></i> Plan Site Bontang</h2>
                    <hr class="footerstress">
                    <dl>
                        <dt>Bontang 75324
                            East Kalimantan,Indonesia
                        </dt>
                        <dd><span>Telp:</span>+62548 21133 (6 lines)
                            +62548 551300
                        </dd>
                        <dd><span>Fax:</span>+62548 27500, 21605</dd>
                    </dl>
                </div>
                <!-- 4th column -->
                <div class="c3">
                    <h2 class="title"><i class="icon-link"></i> Balikpapan Office</h2>
                    <hr class="footerstress">
                    <dl>
                        <dt>Balikpapan 76114
                            East Kalimantan, Indonesia
                        </dt>
                        <dd><span>Telp:</span>++62542 764671</dd>
                    </dl>
                </div>
                <!-- end 4th column -->
            </div>
        </div>
    </div>
    <!-- copyright area -->
    <div class="copyright">
        <div class="grid">
            <div class="row">
                <div class="c12">
                    PT Badak NGL &copy; 2017. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
    $(document).ready(function () {
        $("img.imgOpa").hover(function () {
                $(this).stop().animate({opacity: "0.6"}, 'slow');
            },
            function () {
                $(this).stop().animate({opacity: "1.0"}, 'slow');
            });
    });
    function openModal(){
        $('#myModal').modal();
    }
</script>
</body>
</html>