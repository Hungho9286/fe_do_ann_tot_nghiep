<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Giảng Viên - CKC</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
  
  
    
    <!-- Custom fonts for this template-->
    <link href="{{asset('giangvien/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    

    <!-- Custom styles for this template-->

    <link href="{{asset('giangvien/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ef7e2b893b.js" crossorigin="anonymous"></script>   
    <link rel="stylesheet" href="{{ asset('giangvien/post/style.css') }}"> 

    @yield('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.giangvien.blocks.menu')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               @include('layouts.giangvien.blocks.header')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
               @include('layouts.giangvien.blocks.main')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

    

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Bạn có chắc là đăng xuất khỏi trang web này.</div>
                <form action="{{route('dang-xuat-gv')}}" method="post">
                @csrf
                <div class="modal-footer">
                    
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy</button>
                    <button class="btn btn-primary" type="submit" href="">Đồng ý</button>
                </div>
                </form>
            </div>
        </div>
    </div>

   
    @include('layouts.giangvien.blocks.footer')

</body>

</html>
