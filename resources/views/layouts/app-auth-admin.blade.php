<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield("title")</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin-assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin-assets/css/sb-admin-2.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <link href="{{asset('admin-assets/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
    @yield("contents")

    <!-- Bootstrap core JavaScript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('admin-assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <script src="{{asset('admin-assets/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin-assets/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('admin-assets/js/demo/datatables-demo.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin-assets/js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/sweetalert.min.js')}}"></script>
    @yield("scripts")
</body>
</html>
