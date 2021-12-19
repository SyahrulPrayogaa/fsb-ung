$(document).ready(function(){
  $('#main-content').load('../public/page/home.html')
  
  $('.nav-link').click(function(e){
    e.preventDefault();
    
    let menu = $(this).attr('id');
    
    if(menu == 'home'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('../public/page/home.html');
    }else if(menu == 'pendidikan'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('../public/page/pendidikan.html'); 
    }else if(menu == 'penelitian'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('../public/page/penelitian.html'); 
    }else if(menu == 'berita'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('../public/page/berita.html'); 
    }else if(menu == 'tentang'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('../public/page/tentang.html'); 
    }
  })
});