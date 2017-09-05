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
        url: 'http://localhost:8000/load/dealers?id='+id,
        type: 'GET',
        success: function(response) {

        	var data = JSON.parse(response);

            $('#iden').val(data.id);
            $('#name').val(data.name);
            $('#tlf').val(data.tlf);
            $('#mail').val(data.mail)
            $('#web').val(data.web)

        }
    });
}

loadInfo();