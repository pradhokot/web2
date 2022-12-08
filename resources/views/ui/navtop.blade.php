<nav id="navtop" class="navbar navbar-expand-lg py-lg-4">
   <div class="container">
      <a class="navbar-brand" href="/ui">
         <img src="assets/img/logo.svg" class="img-fluid" alt="" style="width: calc(50px + 1vw); max-width: 80px;">
      </a>
      @include('ui/navcol')
   </div>
</nav>
<style>
   #navtop .nav-link {
      font-family: 'HelveticaNeueMedium';
   }

   #navtop a.active {
      color: #323232 !important;
   }

   #navtop a,
   #navtop .nav-link,
   #navtop .btn,
   #navtop .form-control {
      border-radius: 0 !important;
   }

   @media (min-width: 992px) {
      #navtop {
         font-size: .875em;
      }
   }

   #navtop .navMembership,
   #navtop .navContact {
      display: none !important;
   }

   #navtop #navSearch {
      border-bottom: solid 1px transparent;
      transition: all .36s;
   }

   #navtop #navSearch:hover {
      border-bottom: solid 1px #878787;
   }

   #navtop #navSearch .form-control {
      overflow: hidden;
      width: 0;
      transition: all .36s;
   }

   #navtop #navSearch:hover .form-control {
      width: 150px;
   }
</style>