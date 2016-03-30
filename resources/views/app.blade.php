<html>
<head>
    <title>SIPEDA | Pengajuan Dana</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <script src="/js/jquery-1.11.3.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
<div class="top-header">
    <div class="top-header-logo">
        <h3>SIPEDA</h3>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-2" style="padding: 0px">
            <div class="sidebar-menu">
                <div class="search">
                    <input type="text" placeholder="Search">
                </div>
                @if(Auth::user()->can('access.admin'))
                    <ul>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#pengajuan" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-edit" style="padding-right: 10px; float: none"></i>
                                            Pengajuan
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="pengajuan" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="submenu" id="submenu">
                                            <ul>
                                                <li><a href=""><i class="fa fa-square"></i> Daftar Pengajuan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#user" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fa fa-user" style="padding-right: 10px; float: none"></i>
                                            User
                                            <i class="fa fa-caret-down"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="user" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <div class="submenu" id="submenu">
                                            <ul>
                                                <li><a href="/newuser"><i class="fa fa-square"></i> Tambah User</a></li>
                                                <li><a href="/listuser"><i class="fa fa-square"></i> Daftar User</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </ul>
                @else
                    <ul>
                        <li>
                            <a class="menu-button" type="button" data-toggle="collapse" data-target="#submenu" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-edit" style="padding-right: 10px; float: none"></i>
                                Pengajuan<i class="fa fa-caret-down"></i>
                            </a>
                            <div class="collapse submenu" id="submenu">
                                <ul>
                                    <li><a href=""><i class="fa fa-square"></i> Buat Baru</a></li>
                                    <li><a href=""><i class="fa fa-square"></i> Daftar Pengajuan</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a class="menu-button" type="button" data-toggle="collapse" data-target="#submenu2" aria-expanded="false" aria-controls="collapseExample">
                                Akun<i class="fa fa-caret-down"></i>
                            </a>
                            <div class="collapse submenu" id="submenu2">
                                <ul>
                                    <li><a href=""><i class="fa fa-square"></i> Buat Baru</a></li>
                                    <li><a href=""><i class="fa fa-square"></i> Daftar Pengajuan</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
        </div>

        <div class="col-sm-10">
            <div class="content">
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
</html>