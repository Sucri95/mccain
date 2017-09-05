/*Get URL parameters*/
var getUrlParameter = function getUrlParameter(sParam) {
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};

var id = getUrlParameter('id');

/*Get URL parameters*/

function loadInfo() {

    $.ajax({
        url: 'http://localhost:8000/load/benefits?id='+id,
        type: 'GET',
        success: function(response) {

        	var data = JSON.parse(response);

            $('#iden').val(data.id);
            $('#title').val(data.title);
            $('#about').val(data.about);
            $('#href').val(data.href);
            $('#location').val(data.location);
            $('#category').val(data.category);
            $('#type').val(data.type);
            $('#back').attr('src', data.image);
            $('#log').attr('src', data.logo);

        }
    });
}

loadInfo();

$(document).on('click', '.load_img', function() {
   $('#back').parents('.relative-container').css('display', 'none');
});

$(document).on('click', '.load_logo', function() {
   $('#log').parents('.relative-container').css('display', 'none');
});