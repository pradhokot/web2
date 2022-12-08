<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @yield('title_pages')
   <link rel="icon" href="assets/img/logo.ico">
   <link rel="stylesheet" href="assets/bootstrap-5.2.1-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/bootstrap-icons-1.10.2/bootstrap-icons.css">
   <link rel="stylesheet" href="assets/css/global.css">
</head>

<body>

   @yield('notifikasi')
   @include('ui/navtop')

   <main class="wrapper">
      @yield('konten')
   </main>

   @include('ui/copyright')
   @include('ui/navdown')
   @yield('modal')

   <script src="assets/jquery-3.6.1/jquery-3.6.1.min.js"></script>
   <script src="assets/bootstrap-5.2.1-dist/js/bootstrap.bundle.min.js"></script>
   <script src="assets/js/global.js"></script>
   @yield('javascript')
   <script type="text/javascript">
      // garis bantu
      [].forEach.call(document.querySelectorAll("*"), function(a) {
         // a.style.outline = "1px solid green";
      });
   </script>

</body>

</html>