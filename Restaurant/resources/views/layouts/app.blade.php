<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="{{ asset('/images/mcd-2.png') }}">
    <title>@yield('title')</title>
    <!-- Custom fonts for this template-->
    <link href="{{ asset('front/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('front/css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<style>
    .table thead th {
        border-bottom: none;
    }
    .table tbody tr {
        background-color: #fff;
    }
    .table tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }
    .table tbody tr.rejected {
        background-color: #ffe6e6;
    }
    .table tbody tr .status-active {
        color: green;
    }
    .table tbody tr .edit-icon, .table tbody tr .delete-icon {
        color: #00bcd4;
        cursor: pointer;
    }
</style>
<body id="page-top">
    @include('partials.sidebar')
    @include('partials.navbar')
    @yield('content')
    @include('partials.footer')
</body>
</html>