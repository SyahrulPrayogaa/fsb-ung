$(document).ready(function(){
  // $('#main-content').load('./public/page/home.php')
  $('#main-content').load('./public/page/tentang.php')
  
  $('.nav-link').click(function(e){
    e.preventDefault();
    
    let menu = $(this).attr('id');
    
    if(menu == 'home'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('./public/page/home.php');
    }else if(menu == 'pendidikan'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('./public/page/pendidikan.php'); 
    }else if(menu == 'penelitian'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('./public/page/penelitian.php'); 
    }else if(menu == 'pengabdian'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('./public/page/pengabdian.php'); 
    }else if(menu == 'tentang'){
      $('.nav-link').removeClass('active');
      $(this).addClass('active');
      $('#main-content').load('./public/page/tentang.php'); 
    }
  })

});