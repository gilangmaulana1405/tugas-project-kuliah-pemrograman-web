$('.page-scroll').on('click', function(e){

	//ambil isi dari href
	var tujuan = $(this).attr('href');

	//tangkap elemen yang bersangkutan
	var elemenTujuan = $(tujuan);

	//pindahkan scroll
	 $('html, body').animate({
		scrollTop: elemenTujuan.offset().top -50

	}, 800);

	e.preventDefault();

}); 

//paralax
$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	//gallery
	if(wScroll > $('.gallery').offset().top - 200){
		$('.gallery .img-thumbnail').each(function(i) {
			setTimeout(function() {
				$('.gallery .img-thumbnail').eq(i).addClass('muncul');
			}, 300 * (i+1));	

		});	

		
	}

});

