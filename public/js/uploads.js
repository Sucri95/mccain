/*Trigger Img Upload*/

$(document).on('click', '.icon-container', function() {
  $('.load_img').trigger('click');
})
$(document).on('click', '.icologo-container', function() {
  $('.load_logo').trigger('click');
})
/*-------------------------Delete Tags----------------------------*/
	$(document).on('click', '.select2-selection__choice' ,function() {
		
		var title = $(this).attr('title');

		var array_split = $('#array_tags').val().split(',');

		array_split = $.grep(array_split, function( a ) {
  			return a !== title;
		});

		$('#array_tags').val('');
		$('#array_tags').val(array_split);
		
		array_tags = array_split;
		array_split = '';

		
		$(this).remove();
	});

/*-------------------------Delete Tags----------------------------*/

/*-------------------------Add Tags----------------------------*/
var array_tags = '';

  $(".select2-search__field").on('keyup', function (e) {

    var select = $(".js-example-basic-multiple").val();

    var text1 = $(".select2-search__field").val();

    if (e.keyCode == 13) {
  
  $(".select2-selection__rendered").append('<li class="select2-selection__choice" title="'+text1+'">'+
    '<span class="select2-selection__choice__remove" role="presentation">×</span>'+
    '</span>'+text1+'</li>');

  if (array_tags == '') {

    array_tags = text1;
  
  }else{

    array_tags = array_tags +","+ text1;

  }
  
  $(".select2-search__field").val('');

  select = array_tags;


      $('#array_tags').val('');
      $('#array_tags').val(array_tags);

    }
  });


/*-------------------------Add Tags----------------------------*/

/*--------------Upload multiple images------------------*/



$(document.body).on('click', '.upload-more' ,function(){

  upload_type = 1;

  $('.load_img').trigger('click');

});



$('.upload-images').on('click',function(){

  $('.load_img').trigger('click');

});



  function handleFiles(files) {



  var ext = $("#document").val().split('.').pop(); // Obtengo la extensión



  if((ext == "jpg") || (ext == "jpeg") || (ext == "png"))

  {

    for (var i = 0; i < files.length; i++) {

     

      var file    = files[i];

      var imageType   = /image.*/;

      var img     = document.createElement("img");



      img.classList.add("obj");

      img.classList.add("thumbnail");

      img.classList.add("config_img");

      img.file    = file;

      

      $("#image").html(img);

      

      var reader    = new FileReader();

      reader.onload   = (function(aImg) { return function(e) { aImg.src = e.target.result; }; })(img);

      reader.readAsDataURL(file);

    }

  }



}

/*Load Background Images*/
  var aux = 0;
  var array = [];

  function showMyImage(fileInput) {



        var files = fileInput.files;



        $('.img-container').css('display','block');

        $('.icon-container').addClass('unactive');

  



        for (var i = 0; i < files.length; i++) {           

            

            var file = files[i];

            

            var imageType = /image.*/;     

            

            if (!file.type.match(imageType)) {

                continue;

            }           

            var images = '<div style="overflow: hidden; margin: 0.8em;"><img id="images-'+aux+'"  src="" style="width: 100%; height: auto; margin: 0;"></div>';

            $('.img-container').append(images);           

           var img = document.getElementById("images-"+aux);      



            img.file = file;    

            var reader = new FileReader();

            reader.onload = (function(aImg) { 



                return function(e) { 

                  aImg.src = e.target.result; 

                };



            })(img);



            reader.readAsDataURL(file);



            aux += 1;

        }  
  }

  $(".load_img").change(function(){



      var upload_type = 0;

      showMyImage(this);

      var image_array = '';



      setTimeout(function(){



      var imgs = $('.img-container').children('div').children('img');



      imgs.each(function(index,item){  

          if(image_array === '') {

            image_array = $(item).attr('src');

          } else {

            image_array = image_array+"__"+$(item).attr('src');

          }

        

      });



          $('#array').val('');

          $('#array').val(image_array);



          },4000);
  });
/*Load Background Images*/

/*Load Logos*/
  var auxL = 0;
  var arrayL = [];

  function showMyLogo(fileInput) {

    var files = fileInput.files;

    $('.logo-container').css('display','block');
    $('.icologo-container').addClass('unactive');

      for (var i = 0; i < files.length; i++) {

        var file = files[i];
        var imageType = /image.*/;
        if (!file.type.match(imageType)) { continue; }           

          var images = '<div style="overflow: hidden; margin: 0.8em;"><img id="logo-'+auxL+'"  src="" style="width: 100%; height: auto; margin: 0;"></div>';

          $('.logo-container').append(images);           

           var img = document.getElementById("logo-"+auxL);

           img.file = file;

           var reader = new FileReader();

           reader.onload = (function(aImg) {
            return function(e) {
              aImg.src = e.target.result; 
            };

           })(img);

           reader.readAsDataURL(file);
           auxL += 1;

      }  
  }

  $(".load_logo").change(function(){

      var upload_type = 0;

      showMyLogo(this);

      var image_array = '';

      setTimeout(function(){

        var imgs = $('.logo-container').children('div').children('img');

        imgs.each(function(index,item){  

          if(image_array === '') {

            image_array = $(item).attr('src');

          } else {

            image_array = image_array+"__"+$(item).attr('src');

          }

        });

        $('#arraylogos').val('');

        $('#arraylogos').val(image_array);



      },4000);
  });
/*Load Logos*/


/*--------------Upload multiple images------------------*/