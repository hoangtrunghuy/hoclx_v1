<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/wow/wow.min.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/animsition/dist/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/slick/slick.min.js"></script>
<script src="client/js/slick-custom.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/bootstrap/js/popper.min.js"></script>
<script src="client/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="client/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="client/vendor/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="client/js/slide-custom.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/lightbox2/js/lightbox.min.js"></script>
<!--===============================================================================================-->
<script src="client/vendor/parallax100/parallax100.js"></script>
<script>
    $('.parallax100').parallax100();
</script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<script src="client/js/main.js"></script>

<!-- ajax goi y tim kiem -->
<script>
/*$(document).ready(function(){

 $('#country_name').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{-- route('autocomplete.fetch') --}}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#countryList').fadeIn();  
                    $('#countryList').html(data);
          }
         });
        }
    });

    $(document).on('click', 'li', function(){  
        $('#country_name').val($(this).text());  
        $('#countryList').fadeOut();  
    });  

}); */
</script> 
