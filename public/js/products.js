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
        url: 'http://localhost:8000/load/products?id='+id,
        type: 'GET',
        success: function(response) {

        	var data = JSON.parse(response);

            $('#iden').val(data.id);
            $('#name').val(data.name);
            $('#about').val(data.about);
            $('#price').val(data.price);
            $('#point').val(data.point);
            $('#back').attr('src', data.image);

        }
    });
}

loadInfo();

$(document).on('click', '.load_img', function() {
   $('#back').parents('.relative-container').css('display', 'none');
});