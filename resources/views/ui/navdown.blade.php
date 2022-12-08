<div id="navdown" class="border-top bg-light fixed-bottom d-lg-none">
   @include('ui/navcol')
   <nav class="nav nav-fill">
      <a id="triggerNavcol" class="nav-link" data-bs-toggle="collapse" href="#navcol">
         <i class="bi bi-three-dots-vertical"></i>
      </a>
      <a class="nav-link navCoffee" href="#">
         <i class="bi bi-cup-hot"></i>
      </a>
      <a class="nav-link navHome" href="/ui">
         <i class="bi bi-house"></i>
      </a>
      <a class="nav-link navUser" href="#">
         <i class="bi bi-person-circle"></i>
      </a>
      <a class="nav-link navCart" href="#">
         <span class="d-inline-block position-relative">
            <i class="bi bi-cart"></i>
            <span class="badge text-bg-danger rounded-pill position-absolute top-0 start-100 translate-middle">+99</span>
         </span>
      </a>
   </nav>
</div>
<style>
   #navdown a,
   #navdown .nav-link,
   #navdown .btn,
   #navdown .form-control {
      border-radius: 0 !important;
   }

   #navdown .nav {
      line-height: 1;
   }

   #navdown .nav .nav-link .bi {
      font-size: 1.5rem;
      opacity: .5;
      transition: all .36s;
   }

   #navdown .nav .nav-link:hover .bi {
      opacity: .75;
   }

   #navdown .nav .nav-link.active .bi {
      opacity: 1;
   }

   #navdown .nav .nav-link {
      padding-top: .75rem;
      padding-bottom: .75rem;
      color: inherit;
      position: relative;
   }

   #navdown .nav .nav-link::after {
      content: '•';
      position: absolute;
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
      transition: all .36s;
      opacity: 0;
      visibility: hidden;
   }

   #navdown .nav .nav-link.active::after {
      opacity: 1;
      visibility: visible;
   }

   #navdown #triggerNavcol::after {
      opacity: 0 !important;
      visibility: hidden !important;
   }

   /* style navcol */
   #navcol {
      /* display: block; */
      padding: 0 .875em;
   }

   #navcol .navUser,
   #navcol .navCart {
      display: none !important;
   }

   #navcol #navSearch {
      border-bottom: solid 1px #878787;
   }
</style>