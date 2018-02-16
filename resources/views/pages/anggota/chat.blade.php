@extends('layouts.app')

@section('title','Dashboard Chat')

@section('role','ANGGOTA')

@section('sidebar')
    @include('components.anggota.sidebar')
@endsection

@section('custom-css')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection
@section('content')
    <div class="page-body">
        <div class="row clearfix chat-dashboard">
            <div class="col-sm-3 padding-0">
                <div class="user-panel">
                    <div class="heading">
                    <img src="{{url('images/assets/avatars/face5.jpg')}}" alt="User Avatar" />
                        <div class="avatar-info">
                        <div class="name-surname">Stanford Lute</div>
                        <div class="statu">Pri id odio nominavi, habeo posse...</div>
                        </div>
                    </div>
                <div class="body">
                    <div class="search-holder has-feedback">
                        <input type="text" class="form-control" placeholder="Search" required />
                        <span class="glyphicon glyphicon-search form-control-feedback"></span>
                    </div>
                    <ul class="user-list">
                        <li>
                            <div class="user">
                                <img src="{{url('images/assets/avatars/face4.jpg')}}" alt="User Avatar">
                                <div class="user-info">
                                    <div class="user-name-surname">John Doe</div>
                                    <div class="message">
                                    Lorem iorem dolor sit amet, sea an detracto
                                    complectiturverkdetracto
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="active">
                            <div class="user">
                                <img src="{{url('images/assets/avatars/face2.jpg')}}" alt="User Avatar">
                                <div class="user-info">
                                    <div class="user-name-surname">Lenny Keppel</div>
                                    <div class="message">
                                    Ipsum inciderint no sit
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face3.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Lesley Clifton</div>
                                <div class="message">
                                Quo ea posse efficiendi. Sit quis detraxit
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face8.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Karol Hammonds</div>
                                <div class="message">
                                Habeo urbanitas moderatius his ut, inciderint instructior ne ius,
                                mel molestie principes pertinacia no
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face10.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Lenny Keppel</div>
                                <div class="message">
                                Nam et molestiae sadipscing voluptatibus, habemus menandri cum in.
                                Ne soleat essent facilis vim, omnes option nam ex
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face7.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Jennifer Reich</div>
                                <div class="message">
                                Vix ad quodsi aperiri conclusionemque, justo senserit ne ius. Possit
                                euismod constituam eu qui
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face6.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Kathie Dennison</div>
                                <div class="message">
                                Omnesque delicata eam ea, brute quidam laboramus per ea. Denique
                                reformidans duo et
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face3.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Kenton Dilley</div>
                                <div class="message">
                                Veritus propriae at has. At appetere indoctum per, ei duo expetendis
                                elaboraret adversarium
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face9.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Mirtha Krueger</div>
                                <div class="message">
                                Eos ad legere adversarium. Alii eripuit probatus cum in, magna vitae
                                liberavisse qui in
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face1.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Joel Botkin</div>
                                <div class="message">
                                Mei ullum populo option ne. Saperet deseruisse mel cu, nam ne dicam
                                impetus. Nec no brute denique, fugit minim oblique his an
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face6.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Marlyn Negus</div>
                                <div class="message">
                                Meis illum facilisi sea ei. Nec omnes deserunt antiopam an, vel
                                fugit labore ut.
                                </div>
                            </div>
                         </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face10.jp')}}g" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Major Gould</div>
                                <div class="message">
                                Sea quod habeo probatus ex, sit ne admodum principes abhorreant.
                                Dicat oporteat scribentur vel ex
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face5.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Neal Markel</div>
                                <div class="message">
                                Malis eruditi id vis, pro perfecto atomorum ei. His te magna facer,
                                rebum mazim errem ut nam
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face1.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Erik Meyerhoff</div>
                                <div class="message">
                                Ea sed quis nibh constituto, mea in mollis feugait intellegam, velit
                                error delenit ut est
                                </div>
                            </div>
                        </div>
                        </li>
                        <li>
                        <div class="user">
                            <img src="{{url('images/assets/avatars/face9.jpg')}}" alt="User Avatar">
                            <div class="user-info">
                                <div class="user-name-surname">Iraida Kutcher</div>
                                <div class="message">
                                Iuvaret cotidieque eos at. Duo quidam iudicabit no. Et iudicabit
                                assentior qui, ad mei minim graeco timeam
                                </div>
                            </div>
                        </div>
                        </li>
                    </ul>
                </div>
                </div>
            </div>
            <div class="col-sm-9 padding-0">
                <div class="message-area">
                    <div class="heading">
                        <a href="javascript:void(0);" class="avatar-info">
                            <img src="{{url('images/assets/avatars/face2.jpg')}}" alt="User Avatar" />
                            <div class="holder">
                                <div class="name-surname">Lenny Keppel</div>
                                <div class="info">Click for see the user detail...</div>
                            </div>
                        </a>
                        <div class="right-menu-item">
                            <a class="menu-item" href="javascript:void(0);">
                            <i class="fa fa-volume-control-phone"></i>
                            </a>
                            <a class="menu-item" href="javascript:void(0);">
                            <i class="fa fa-video-camera"></i>
                            </a>
                            <div class="btn-group">
                                <a class="menu-item dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-paperclip"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:void(0);">
                                        <i class="fa fa-fw fa-photo m-r-5"></i>Photo & Videos
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-fw fa-camera m-r-5"></i>Camera</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><i class="fa fa-fw fa-file-o m-r-5"></i>Document</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                        <i class="fa fa-fw fa-user-circle-o m-r-5"></i>Person
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="btn-group">
                            <a class="menu-item dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-ellipsis-v"></i></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);">Menu Item - 1</a></li>
                                <li><a href="javascript:void(0);">Menu Item - 2</a></li>
                                <li><a href="javascript:void(0);">Menu Item - 3</a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <div class="body">
                        <ul>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">His cu ornatus pertinax, et molestie dissentiet sea</div>
                                    <div class="message-time">00:45</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">Qui posse neglegentur an, pro docendi moderatius ea. Mollis posidonium ne sit, has vide impedit appellantur id</div>
                                    <div class="message-time">00:46</div>
                                </div>
                            </li>
                             <li>
                                <div class="bubble">
                                    <div class="message-text">Pri utamur nostrum ut</div>
                                    <div class="message-time">00:46</div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">Ius inani dicam civibus ex, his ex minimum mnesarchum mediocritatem, vel at omnes populo</div>
                                    <div class="message-time">00:48</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">Ea labitur deserunt pri, et his novum nullam iriure. Sed et phaedrum sapientem, eum solum quidam petentium ne.</div>
                                    <div class="message-time">00:55</div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">
                                    Ius :)
                                    </div>
                                    <div class="message-time">00:48</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">Vix saepe quodsi ea, noster latine nostrud te vel. Vix ad consul iisque percipit, cu cum nihil euismod</div>
                                    <div class="message-time">00:56</div>
                                </div>
                            </li>

                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">Labitur pertinax argumentum cu vix, eam brute iisque mnesarchum et</div>
                                    <div class="message-time">00:48</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">Duo fugit gloriatur ne, mutat quodsi mnesarchum</div>
                                    <div class="message-time">00:58</div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">facilisi senserit...</div>
                                    <div class="message-time">01:12</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">Eos vero tempor audire no. Alii dissentiet sed an</div>
                                    <div class="message-time">01:04</div>
                                </div>
                            </li>

                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">Labitur liberavisse cu ius...</div>
                                    <div class="message-time">00:50</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">facilisi senserit eu mel, everti causae fuisset mea eu. Mei no tamquam accusam</div>
                                    <div class="message-time">01:05</div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">:D</div>
                                    <div class="message-time">01:15</div>
                                </div>
                            </li>
                            <li>
                                <div class="bubble">
                                    <div class="message-text">Exerci aliquid lobortis vis eu. Eam ei semper temporibus, nam et vide debitis.</div>
                                    <div class="message-time">01:23</div>
                                </div>
                            </li>
                            <li class="right">
                                <div class="bubble">
                                    <div class="message-text">:D</div>
                                    <div class="message-time">00:50</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="footer">
                        <div class="write-message has-feedback">
                            <input type="text" class="form-control" placeholder="Write a message..." required />
                            <span class="glyphicon glyphicon-send form-control-feedback"></span>
                        </div>
                        <a href="javascript:void(0);" class="mic"><i class="fa fa-microphone"></i></a>
                    </div>
                    <div class="user-detail">
                        <div class="heading">
                            <a href="javascript:void(0);"><i class="fa fa-times-circle-o"></i></a>
                            <div>User Detail</div>
                        </div>
                        <div class="body">
                            <div class="profile-image">
                                <img src="{{url('images/assets/avatars/face2.jpg')}}" class="img-circle" height="128" width="128" alt="User Image" />
                            </div>
                            <div class="name-surname">Lenny Keppel</div>
                            <div class="city">Budapest, HUNGARY</div>
                            <div class="divider"></div>
                            <ul>
                                <li>
                                    <div>Nickname:</div>
                                    <div>lekep</div>
                                </li>
                                <li>
                                    <div>Tel:</div>
                                    <div>098 458 12 20</div>
                                </li>
                                <li>
                                    <div>Date of Birth:</div>
                                    <div>June 24, 1987</div>
                                </li>
                                <li>
                                    <div>Gender:</div>
                                     <div>Male</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('custom-js')
<script src="{{url('bower_components/adminbsb-materialdesign/js/chat.js')}}" type="text/javascript"></script>
@endsection