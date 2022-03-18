<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Development</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('assets/images/logo/development.svg')}}">

    <!-- page css -->
    <link href="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet">

    <!-- Core css -->
    <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet">

</head>

<body>
    <div class="app">
        <div class="layout">
            <!-- Header START -->
            <div class="header">
                <div class="logo logo-dark">
                    <a href="{{url('home')}}">
                        <img src="{{asset('assets/images/logo/mchelo.png')}}" style="width: 125px">
                        <img class="logo-fold" src="{{asset('assets/images/logo/mchelox.png')}}" style="width: 48px" alt="Icono M">
                    </a>
                </div>
                <div class="logo logo-white">
                    <a href="{{url('home')}}">
                        <img src="{{asset('assets/images/logo/mchelox.png')}}" alt="Logo ProjectUp">
                        <img class="logo-fold" src="{{asset('assets/images/logo/montechelo.png')}}" alt="Icono ProjectUp">
                    </a>
                </div>
                <div class="nav-wrap">
                    <ul class="nav-left">
                        <li class="desktop-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li class="mobile-toggle">
                            <a href="javascript:void(0);">
                                <i class="anticon"></i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#search-drawer">
                                <i class="anticon anticon-search"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        <li class="dropdown dropdown-animated scale-left">
                            <a href="javascript:void(0);" data-toggle="dropdown">
                                <i class="anticon anticon-bell notification-badge"></i>
                            </a>
                            <div class="dropdown-menu pop-notification">
                                <div class="p-v-15 p-h-25 border-bottom d-flex justify-content-between align-items-center">
                                    <p class="text-dark font-weight-semibold m-b-0">
                                        <i class="anticon anticon-bell"></i>
                                        <span class="m-l-10">Notification</span>
                                    </p>
                                    <a class="btn-sm btn-default btn" href="javascript:void(0);">
                                        <small>View All</small>
                                    </a>
                                </div>
                                <div class="relative">
                                    <div class="overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-blue avatar-icon">
                                                    <i class="anticon anticon-mail"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You received a new message</p>
                                                    <p class="m-b-0"><small>8 min ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-cyan avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">New user registered</p>
                                                    <p class="m-b-0"><small>7 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 border-bottom">
                                            <div class="d-flex">
                                                <div class="avatar avatar-red avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">System Alert</p>
                                                    <p class="m-b-0"><small>8 hours ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="javascript:void(0);" class="dropdown-item d-block p-15 ">
                                            <div class="d-flex">
                                                <div class="avatar avatar-gold avatar-icon">
                                                    <i class="anticon anticon-user-add"></i>
                                                </div>
                                                <div class="m-l-15">
                                                    <p class="m-b-0 text-dark">You have a new update</p>
                                                    <p class="m-b-0"><small>2 days ago</small></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown dropdown-animated scale-left">
                            <div class="pointer" data-toggle="dropdown">
                                <div class="avatar avatar-image  m-h-10 m-r-15">
                                    <img src="assets/images/avatars/thumb-3.jpg"  alt="">
                                </div>
                            </div>
                            <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                                <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                                    <div class="d-flex m-r-50">
                                        <div class="avatar avatar-lg avatar-image">
                                            <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                        </div>
                                        <div class="m-l-10">
                                            <p class="m-b-0 text-dark font-weight-semibold">Marshall Nichols</p>
                                            <p class="m-b-0 opacity-07">UI/UX Desinger</p>
                                        </div>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                            <span class="m-l-10">Edit Profile</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-lock"></i>
                                            <span class="m-l-10">Account Setting</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-project"></i>
                                            <span class="m-l-10">Projects</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <i class="anticon opacity-04 font-size-16 anticon-logout"></i>
                                            <span class="m-l-10">Logout</span>
                                        </div>
                                        <i class="anticon font-size-10 anticon-right"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#quick-view">
                                <i class="anticon anticon-appstore"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>    
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-home"></i> </span>
                                <span class="title">Inicio</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('home.index')}}">Home</a>
                                </li>
                               
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-table"></i>
                                </span>
                                <span class="title">Tablas</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('despliegues.index')}}">Despliegues</a>
                                </li>
                                <li>
                                    <a href="{{route('ambientes.index')}}">Ambientes</a>
                                </li>
                                <li>
                                    <a href="{{route('desarrolladores.index')}}">Desarrollador</a>
                                </li>
                                <li>
                                    <a href={{route('devops.index')}}>Devops</a>
                                </li>
                                <li>
                                    <a href={{route('ramas.index')}}>Ramas</a>
                                </li>
                                <li>
                                    <a href={{route('servidores.index')}}>Servidores</a>
                                </li>
                                <li>
                                    <a href={{route('proyectos.index')}}>Proyectos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="anticon anticon-file"></i> </span>
                                <span class="title">Reportes</span>
                                <span class="arrow">
                                    <i class="arrow-icon"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{route('pdf.informe')}}">Generar PDF</a>
                                </li>
                                <li>
                                    <a href="{{route('excel.informe')}}">Generar Excel</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->
            <!-- Page Container START -->
            <div class="page-container">
                

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="page-header">
                        <h2 class="header-title">Servidores</h2>
                        <div class="header-sub-title">
                            <nav class="breadcrumb breadcrumb-dash">
                                <span class="breadcrumb-item"><i class="anticon anticon-home m-r-5"></i>Inicio</span>
                                <a class="breadcrumb-item" href="{{url('servidores')}}">Servidores</a>
                                <span class="breadcrumb-item active">Editar Servidor</span>
                            </nav>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h2>Editar Servidores</h2>
                            <br>
                            
                            
                            <form action="{{url('servidores/'.$servidor->idServidor)}}" method="POST">
                                @csrf
                                @method('PUT')

                                <div class="form-row">
                                    
                                    <!-- Input A -->
                                    

                                    <div class="form-group col-md-6">
                                        <label for="s"><sup class="obligatorio">*</sup>Servidor</label>
                                        <input type="text" class="form-control" name="s" id="s"
                                               placeholder="Servidor" value="{{$servidor->numb_serv}}">
                                        <strong class="text-danger">{{$errors->first('s')}}</strong>
                                    </div>


                                    <!-- Input D -->



                                </div>
                                
                                <br>
                                <br>
                                <br>

                                
                                <input type="submit" style="margin-left: 500px; width: 220px;" class="btn btn-enviar" value="Modificar">
                                <br>
                                <br>
                                <br>                               
                            </form>
                        </div>
                    </div>
                </div>
            <!-- Search End-->

            <!-- Quick View START -->
            <div class="modal modal-right fade quick-view" id="quick-view">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header justify-content-between align-items-center">
                            <h5 class="modal-title">Theme Config</h5>
                        </div>
                        <div class="modal-body scrollable">
                            <div class="m-b-30">
                                <h5 class="m-b-0">Header Color</h5>
                                <p>Config header background color</p>
                                <div class="theme-configurator d-flex m-t-10">
                                    <div class="radio">
                                        <input id="header-default" name="header-theme" type="radio" checked value="default">
                                        <label for="header-default"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-primary" name="header-theme" type="radio" value="primary">
                                        <label for="header-primary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-success" name="header-theme" type="radio" value="success">
                                        <label for="header-success"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-secondary" name="header-theme" type="radio" value="secondary">
                                        <label for="header-secondary"></label>
                                    </div>
                                    <div class="radio">
                                        <input id="header-danger" name="header-theme" type="radio" value="danger">
                                        <label for="header-danger"></label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Side Nav Dark</h5>
                                <p>Change Side Nav to dark</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-theme-toogle" id="side-nav-theme-toogle">
                                    <label for="side-nav-theme-toogle"></label>
                                </div>
                            </div>
                            <hr>
                            <div>
                                <h5 class="m-b-0">Folded Menu</h5>
                                <p>Toggle Folded Menu</p>
                                <div class="switch d-inline">
                                    <input type="checkbox" name="side-nav-fold-toogle" id="side-nav-fold-toogle">
                                    <label for="side-nav-fold-toogle"></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>            
            </div>
            <footer class="footer">
                <div class="footer-content">
                    <p class="m-b-0">Copyright © 2022 Montechelo. All rights reserved.</p>
                    <span>
                        <a href="" class="text-gray m-r-15">Term &amp; Conditions</a>
                        <a href="" class="text-gray">Privacy &amp; Policy</a>
                    </span>
                </div>
            </footer>
        </div>
        <!-- Search Start-->
        <div class="modal modal-left fade search" id="search-drawer">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header justify-content-between align-items-center">
                        <h5 class="modal-title">Search</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <i class="anticon anticon-close"></i>
                        </button>
                    </div>
                    <div class="modal-body scrollable">
                        <div class="input-affix">
                            <i class="prefix-icon anticon anticon-search"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <div class="m-t-30">
                            <h5 class="m-b-20">Files</h5>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-cyan avatar-icon">
                                    <i class="anticon anticon-file-excel"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Quater Report.exl</a>
                                    <p class="m-b-0 text-muted font-size-13">by Finance</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-blue avatar-icon">
                                    <i class="anticon anticon-file-word"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Documentaion.docx</a>
                                    <p class="m-b-0 text-muted font-size-13">by Developers</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-purple avatar-icon">
                                    <i class="anticon anticon-file-text"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Recipe.txt</a>
                                    <p class="m-b-0 text-muted font-size-13">by The Chef</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-red avatar-icon">
                                    <i class="anticon anticon-file-pdf"></i>
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Project Requirement.pdf</a>
                                    <p class="m-b-0 text-muted font-size-13">by Project Manager</p>
                                </div>
                            </div>
                        </div>
                        <div class="m-t-30">
                            <h5 class="m-b-20">Members</h5>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/avatars/thumb-1.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Erin Gonzales</a>
                                    <p class="m-b-0 text-muted font-size-13">UI/UX Designer</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/avatars/thumb-2.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Darryl Day</a>
                                    <p class="m-b-0 text-muted font-size-13">Software Engineer</p>
                                </div>
                            </div>
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/avatars/thumb-3.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">Marshall Nichols</a>
                                    <p class="m-b-0 text-muted font-size-13">Data Analyst</p>
                                </div>
                            </div>
                        </div>   
                        <div class="m-t-30">
                            <h5 class="m-b-20">News</h5> 
                            <div class="d-flex m-b-30">
                                <div class="avatar avatar-image">
                                    <img src="assets/images/others/img-1.jpg" alt="">
                                </div>
                                <div class="m-l-15">
                                    <a href="javascript:void(0);" class="text-dark m-b-0 font-weight-semibold">5 Best Handwriting Fonts</a>
                                    <p class="m-b-0 text-muted font-size-13">
                                        <i class="anticon anticon-clock-circle"></i>
                                        <span class="m-l-5">25 Nov 2018</span>
                                    </p>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End-->

            <!-- Quick View END -->
        </div>
    </div>

    
    <!-- Core Vendors JS -->
    <script src="{{asset('assets/js/vendors.min.js')}}"></script>

    <!-- page js -->
    <script src="{{asset('assets/vendors/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/vendors/datatables/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/pages/datatables.js')}}"></script>

    <!-- Core JS -->
    <script src="{{asset('assets/js/app.min.js')}}"></script>

</body>

</html>