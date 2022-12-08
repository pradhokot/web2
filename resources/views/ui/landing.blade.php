@extends('ui/layout')

@section('title_pages')
<title>SUPRESSO &bull; Home</title>
@endsection

@section('notifikasi')
<div id="barNotifikasi" class="collapse show sticky-top">
   <a data-bs-toggle="modal" href="#modalNotifikasi" class="btn text-bg-dark d-block rounded-0">
      Hello. Get 10% OFF* <span class="opacity-50">|</span> your first order when you subscribe to our newsletter! <span class="opacity-50">|</span> Claim My 10% OFF <i class="bi bi-chevron-right"></i>
   </a>
</div>
@endsection

@section('konten')
<section style="height: 1200px;">
   <div class="container">
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur veritatis similique natus ducimus velit inventore rerum. Facilis possimus, accusamus porro veniam rerum consequatur, minima inventore excepturi eligendi quos beatae voluptatum.</p>
   </div>
</section>
@endsection

@section('modal')
<!-- modal notifikasi -->
<div class="modal fade" id="modalNotifikasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalNotifikasiLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="modalNotifikasiLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, non! Architecto fugiat commodi possimus aspernatur? A commodi officia necessitatibus earum numquam expedita ad quod, illo, eos veritatis accusamus, optio molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, non! Architecto fugiat commodi possimus aspernatur? A commodi officia necessitatibus earum numquam expedita ad quod, illo, eos veritatis accusamus, optio molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, non! Architecto fugiat commodi possimus aspernatur? A commodi officia necessitatibus earum numquam expedita ad quod, illo, eos veritatis accusamus, optio molestias. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, non! Architecto fugiat commodi possimus aspernatur? A commodi officia necessitatibus earum numquam expedita ad quod, illo, eos veritatis accusamus, optio molestias.
            </p>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Understood</button>
         </div>
      </div>
   </div>
</div>
@endsection

@section('javascript')
<script>
   // active nav-link
   $('.navHome').addClass('active');

   // toggle bar notifikasi
   $('#modalNotifikasi').on('shown.bs.modal', function() {
      $('#barNotifikasi').collapse('hide');
   });
   $('#modalNotifikasi .btn-close').click(function() {
      $('#barNotifikasi').collapse('show');
   });
</script>
@endsection