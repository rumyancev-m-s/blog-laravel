<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog Laravel | Аутентификация</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ asset('./assets/admin/css/admin.css') }}">
  
</head>
<body class="hold-transition register-page">

@yield('content')

<!-- jQuery -->
<script src="{{ asset('./assets/admin/js/admin.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('./assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('./assets/js/adminlte.min.js') }}"></script>
</body>
</html>