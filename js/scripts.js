/*
  FIB
  Curso: Ciências da Computação
            TRABALHO
  INTRODUÇÃO AO DESENVOLVIMENTO WEB
            ALUNOS
  NOME: Adriano Henrique RA 49648
  NOME: João Victor Marcelino RA 49899
*/
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    if (this.hash !== "") {

      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        window.location.hash = hash;
      });
    }
  });

  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
$('.carousel').carousel({
  interval: 2000
})