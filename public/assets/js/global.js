// add id "navcol" on navdown
$('#navdown .navbar-collapse').attr('id', 'navcol');

// add active class on navdown submenu item
$('#triggerNavcol').click(function () {
   $(this).toggleClass('active');
});