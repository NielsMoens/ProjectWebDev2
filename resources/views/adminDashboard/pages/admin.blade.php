<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
    <!-- Core theme CSS (-->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Fonts CSS-->
    <link href="{{ asset('css/heading.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset ('css/sb-admin-2.min.css')}}" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3 text-uppercase"> adminpannel </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <li class="nav-item ">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>

                    <!-- Content Row -->
                    {{-- Add a page --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Web pages <i class="fas fa-globe"></i>
                                                <div class="row">
                                                    <div class="col-12"><a href="{{route('pages.create')}}" class="btn btn-warning">Add Page</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="h5  font-weight-bold text-gray-800">
                                                <table class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>template</th>
                                                            <th>title_nl</th>
                                                            <th>title_en</th>
                                                            <th>intro_nl</th>
                                                            <th>intro_en</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($pages as $page)
                                                        <tr>
                                                            <td>
                                                                {{$page->template}}
                                                            </td>
                                                            <td>
                                                                {{$page->title_nl}}
                                                            </td>
                                                            <td>
                                                                {{$page->title_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($page->intro_nl, 50)}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($page->intro_en, 50)}}
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.edit',  $page->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                                <form action="{{route('pages.delete')}}" method="post">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $page->id }}">
                                                                    <button class="btn-danger">
                                                                        Delete
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Existing pages</h1>
                    </div>
                    {{-- edit home page --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Home page<i class="fas fa-globe"></i></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>title_nl</th>
                                                            <th>title_en</th>
                                                            <th>maininfo_nl</th>
                                                            <th>maininfo_en</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {{$homeContent->title_nl}}
                                                            </td>
                                                            <td>
                                                                {{$homeContent->title_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($homeContent->maininfo_nl, 50)}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($homeContent->maininfo_en, 50)}}
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.edithome',  $homeContent->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- edit aboutpage --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                About page <i class="fas fa-globe"></i></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>title_nl</th>
                                                            <th>title_en</th>
                                                            <th>abouttitle_nl</th>
                                                            <th>abouttitle_en</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {{$aboutContent->title_nl}}
                                                            </td>
                                                            <td>
                                                                {{$aboutContent->title_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($aboutContent->abouttitle_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($aboutContent->abouttitle_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.editabout',  $aboutContent->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- edit contact page --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Contact page <i class="fas fa-globe"></i></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>title_nl</th>
                                                            <th>title_en</th>
                                                            <th>subtitle_nl</th>
                                                            <th>subtitle_en</th>
                                                            <th>content_nl</th>
                                                            <th>content_en</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {{$contactContent->title_nl}}
                                                            </td>
                                                            <td>
                                                                {{$contactContent->title_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($contactContent->subtitle_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($contactContent->subtitle_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($contactContent->content_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($contactContent->content_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.editcontact',  $contactContent->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- edit newsblog page --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Newsblog Page <i class="fas fa-globe"></i></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <div class="row">
                                                    <div class="col-12"><a href="{{route('pages.addnewsblog')}}" class="btn btn-warning">Add Newsblog Post</a>
                                                    </div>
                                                </div>
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>posttitle_nl</th>
                                                            <th>posttitle_en</th>
                                                            <th>postcontent_nl</th>
                                                            <th>postcontent_en</th>
                                                            <th>postdate</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($newsblogContent as $blog)
                                                        <tr>
                                                            <td>
                                                                {{$blog->posttitle_nl}}
                                                            </td>
                                                            <td>
                                                                {{$blog->posttitle_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($blog->postcontent_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($blog->postcontent_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($blog->postdate, 50)}}...
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.editnewsblog',  $blog->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- edit donation page --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Donate Page <i class="fas fa-globe"></i></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>title_nl</th>
                                                            <th>title_en</th>
                                                            <th>subtitle_nl</th>
                                                            <th>subtitle_en</th>
                                                            <th>featuredtitle_nl</th>
                                                            <th>featuredtitle_en</th>
                                                            <th>donatorname</th>
                                                            <th>Donationamount</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {{$donateContent->title_nl}}
                                                            </td>
                                                            <td>
                                                                {{$donateContent->title_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($donateContent->subtitle_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($donateContent->subtitle_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($donateContent->featuredtitle_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($donateContent->featuredtitle_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($donateContent->donatorname, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($donateContent->donationamount, 50)}}...
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.editdonate',  $donateContent->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- edit privacy page  --}}
                    <div class="row">
                        <div class="col-xl col-md-2 mb-4">
                            <div class="card border-left-success shadow h-100 ">
                                <div class="card-body">
                                    <div class=" no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Privacy Page <i class="fas fa-globe"></i></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <table class="table table-striped ">
                                                    <thead>
                                                        <tr>
                                                            <th>title_nl</th>
                                                            <th>title_en</th>
                                                            <th>subtitle_nl</th>
                                                            <th>subtitle_en</th>
                                                            <th>content_nl</th>
                                                            <th>content_en</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                {{$privacyContent->title_nl}}
                                                            </td>
                                                            <td>
                                                                {{$privacyContent->title_en}}
                                                            </td>
                                                            <td>
                                                                {{Str::limit($privacyContent->subtitle_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($privacyContent->subtitle_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($privacyContent->content_nl, 50)}}...
                                                            </td>
                                                            <td>
                                                                {{Str::limit($privacyContent->content_en, 50)}}...
                                                            </td>
                                                            <td>
                                                                <a href="{{route('pages.editprivacy',  $privacyContent->id)}}">
                                                                    @csrf
                                                                    <input type="hidden" name="" value="">
                                                                    <button class="btn-success">
                                                                        Edit
                                                                    </button>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer ">
                <div class="container my-auto">
                    <div class=" text-center ">
                        Copyright &copy; Niels Moens 2020
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
