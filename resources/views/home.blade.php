<!DOCTYPE HTML>
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>SSL Sunday Sharing Loperman </title>
    <style>
        .custom-counter {
            margin: 0;
            padding: 0;
            list-style-type: none;
        }

        .custom-counter li {
            counter-increment: step-counter;
            margin-bottom: 10px;
        }

        .custom-counter li::before {
            content: counter(step-counter);
            margin-right: 5px;
            font-size: 80%;
            background-color: rgb(244, 91, 77);
            color: white;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 3px;
        }

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

        .square {
            height: 150px;
            width: 150px;
        }

        img {
            max-width: 100%;
            max-height: 100%;
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
    <link rel="stylesheet" type="text/css" href="css/skinaqua.css"/><!-- change skin color -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css"/>
    <script>
        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))return false;
            return true;
        }
    </script>
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
                    <img src="images/ssl_logo.jpg" class="logo" alt="" width="236px" height="74px">
                </a>
            </div>
            <!--Menu-->
            <div class="c8">
                <nav id="topNav">
                    <ul id="responsivemenu">
                        <li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span
                                class="showmobile">Home</span></a></li>
                        <li><a href="/blog">SSL Blog</a>
                        <li><a href="#">Tentang Kami</a>
                        </li>
                        <li><a href="#" onclick="openModal()"><strong>Daftar</strong></a>
                        </li>
                        <li class="last"><a href="#login"><strong>Masuk</strong></a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="undermenuarea">
        <div class="boxedshadow">
        </div>
        <!-- SLIDER AREA
        ================================================== -->
        <div id="da-slider" class="da-slider" style="height: 350px !important;">
            <!--Slide 1-->
            <div class="da-slide">
                <h2> More than 4 Generation </h2>
                <p>
                    Experience operating an LNG plant that is recognized as world class by the international oil and gas
                    industry
                </p>
                <!--<a href="#" class="da-link" style="width:202px;">Multi-Purpose</a>-->
                <div class="da-img">
                    <img src="images/slider_1.jpg" alt="">
                </div>
            </div>
            <!--Slide 2-->
            <div class="da-slide">
                <h2>Spread Love</h2>
                <p>
                    First oil and gas company
                    in the world to achieve International Sustainbility Rating System from DNV
                    Norway
                </p>
                <!--<a href="#" class="da-link" style="width:192px;">MEDIA DEVICES</a>-->
                <div class="da-img">
                    <img src="images/slider_2.jpg" alt="" height="330">
                </div>
            </div>
            <!--Slide 3-->
            <div class="da-slide">
                <h2> Sharing With The Others </h2>
                <p>
                    The most comprehensive and advanced LNG
                    fire-fighting simulation facilities in the world at present time.
                </p>
                <!--<a href="#" class="da-link" style="width:230px;">fully supported</a>-->
                <div class="da-img">
                    <img src="images/slider_3.jpg" alt="">
                </div>
            </div>
            <!--Slide 3-->
            <div class="da-slide">
                <h2> The New Hope </h2>
                <p>
                    Has gained international recognition as a world-class facility for the training of LNG operations
                    and maintenances personnel.
                </p>
                <!--<a href="#" class="da-link" style="width:230px;">fully supported</a>-->
                <div class="da-img">
                    <img src="images/slider_4.jpg" alt="">
                </div>
            </div>
            <nav class="da-arrows">
                <span class="da-arrows-prev"></span>
                <span class="da-arrows-next"></span>
            </nav>
        </div>
    </div>
    <!-- UNDER SLIDER - BLACK AREA
    ================================================== -->
    <div class="undersliderblack">
        <div class="grid">
            <div class="row space-bot">
                <div class="c12">
                    <!--Box 1-->
                    <div class="c3 introbox introboxfirst">
                        <div class="introboxinner">
                            <h3 style="color: white">INTEGRITY</h3>
                            <p>Ensuring that we do based on honesty,
                                transparency and putting the interest of the company before our own.</p>
                        </div>
                    </div>
                    <!--Box 2-->
                    <div class="c3 introbox introboxmiddle">
                        <div class="introboxinner">
                            <h3 style="color: white">DIGNITY</h3>
                            <p>Upholding the dignity of the company
                                and respecting the human dignity and equality of others.</p>
                        </div>
                    </div>
                    <!--Box 3-->
                    <div class="c3 introbox introboxmiddle">
                        <div class="introboxinner">
                            <h3 style="color: white">INNOVATIVE</h3>
                            <p>Actively seeking opportunities to ensure success by continuously learning,
                                including learning from our experiences.</p>
                        </div>
                    </div>
                    <div class="c3 introbox introboxlast">
                        <div class="introboxinner">
                            <h3 style="color: white">S.H.E</h3>
                            <p>Prioritizing the safety, health and environment aspect
                                in all our work processes and business activities.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shadowunderslider" id="login">
    </div>
    <!-- START content area
    ================================================== -->
    <div class="grid">
        <div class="row space-top">
            <div class="c12 space-top">
                <h1 class="maintitle ">
                    <span>SUNDAY SHARING LOPERMAN BLOG</span>
                </h1>
            </div>
        </div>
        <div class="row space-bot">
            <!--Box 1-->
            <div class="c8">
                <div class="c4">
                    <div class="noshadowbox">
                        <h5 style="font-size: 12pt !important; font-weight: 800"> Arief Rahman Hakim </h5>
                        <div class="square">
                            <img src="images/kauman.jpg">
                        </div>
                        <p>
                            Kegiatan Sunday Sharing Loperman kali ini bertempat di Jl. Arief Rhaman Hakim, Suasana hari.....
                        </p>
                        <p class="bottomlink">
                            <a href="/blog/1" class="neutralbutton">Baca Selengkapnya</a>
                        </p>
                    </div>
                </div>
                <div class="c4">
                    <div class="noshadowbox">
                        <h5 style="font-size: 12pt !important; font-weight: 800"> Taman Bungkul </h5>
                        <div class="square">
                            <img src="images/kauman.jpg">
                        </div>
                        <p>
                            Kegiatan Sunday Sharing Loperman kali ini bertempat di Jl. Arief Rhaman Hakim, Suasana hari.....
                        </p>
                        <p class="bottomlink">
                            <a href="/blog/1" class="neutralbutton">Baca Selengkapnya</a>
                        </p>
                    </div>
                </div>
                <div class="c4">
                    <div class="noshadowbox">
                        <h5 style="font-size: 12pt !important; font-weight: 800"> Ngagel </h5>
                        <div class="square">
                            <img src="images/kauman.jpg">
                        </div>
                        <p>
                            Kegiatan Sunday Sharing Loperman kali ini bertempat di Jl. Arief Rhaman Hakim, Suasana hari.....
                        </p>
                        <p class="bottomlink">
                            <a href="/blog/1" class="neutralbutton">Baca Selengkapnya</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Box 3-->
            <div class="c4">
                <h2 class="title hometitlebg" style="background: cornflowerblue"><i class="icon-user"
                                                                                    style="margin-right:10px;"></i> <b>Masuk</b>
                </h2>
                <div class="noshadowbox">
                    <br/>
                    <form action="{{url('/masuk')}}" method="post">
                        <input type="text" class="zocial-dribbble" placeholder="Email" name="email" />
                        <input type="password" placeholder="Password" name="password" />
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Masuk"/>
                        <br/>
                        <p class="text-center" style="font-size: 10pt">Belum memiliki akun?</p>
                        <button type="button" class="btn-reg" data-toggle="modal" data-target="#myModal">Register</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- SHOWCASE
        ================================================== -->

        <!-- CALL TO ACTION
        ================================================== -->
    </div><!-- end grid -->

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
{{--                 <div class="c3">
                    <img src="images/badak_logo.png" style="margin: 15px;" alt="" height="180px" width="180px">
                </div> --}}
                <!-- 2nd column -->
                <div class="c3">
                    <h2 class="title"><i class="icon-building"></i> Kantor</h2>
                    <hr class="footerstress">
                    <dl>
                        <dt>Gedung Teknik Informatikas ITS
                            Jl Teknik Kimia,
                            Surabaya,
                            Indonesia
                        </dt>
                        <dd><span>Telp:</span>+6221 31930243, 31936317</dd>
                        <dd><span>Fax:</span>+6221 3142974</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    <!-- copyright area -->
    <div class="copyright">
        <div class="grid">
            <div class="row">
                <div class="c12">
                    SSL Web Developer &copy; 2017. All Rights Reserved.
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <form method="post" action="{{url('/simpandatauser')}}">
                <!-- Modal content-->
                <div class="modal-content">
                    <button type="button" class="close" style="padding: auto;" data-dismiss="modal">&times;</button>
                    <h2 class="title hometitlebg" style="background: limegreen"><strong><i class="icon-user-md"></i> PENDAFTARAN AKUN</strong></h2>
                    <div class="noshadowbox" style="padding: 40px">
                        <input type="text" placeholder="Nama Anggota" name="nmanggota" required />
                        <input type="email" class="zocial-dribbble" placeholder="Email" name="email" required/>
                        <input type="text" placeholder="No KTP" name="ktp" required onkeypress="return hanyaAngka(event)"/>
                        <input type="text" placeholder="Alamat" name="alamat" required />
                        <input type="text" placeholder="No. Hp" name="nohp" required onkeypress="return hanyaAngka(event)">
                        <input type="text" placeholder="ID Line" name="line" required />
                        <input type="password" placeholder="Password" name="password" required/>
                        <input type="password" placeholder="Konfirmasi Password" name="password_confirmation" required/>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Daftar"/>
                    </div>
                </div>
            </form>
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