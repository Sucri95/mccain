function loadPreview() {

    $.ajax({
        url: 'http://localhost:8000/previews',
        type: 'GET',
        success: function(response) {

        	var data = JSON.parse(response)
        	,   acce = ''
        	,   ben = ''
        	,   cat = ''
        	,   deal = ''
        	,   demo = ''
        	,   faq = ''
        	,   news = ''
        	,   prod = ''
        	,   playwin = ''
        	,   buywin = '';

            for (var i = 0; i < data.accelerators.length; i++) {

                var type = "acce";

            	acce += 
                    '<div class="preview" id="acce-'+data.accelerators[i].id+'">'+
                        '<div class="back-pic-preview" style="background: url(\''+data.accelerators[i].image+'\'); background-size: cover;"></div>'+
                        '<div class="logo-pic-preview"><span>'+data.accelerators[i].title+'</span></div>'+
                        '<div class="about-preview"><span>'+data.accelerators[i].about+'</span></div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/accelerators?id='+data.accelerators[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.accelerators[i].id+', \''+type+'\');"></i>'+
                        '</div>'+
                    '</div>'
            	;
            }

            $('#body-acce').append(acce);

            for (var i = 0; i < data.benefits.length; i++) {

                var type = "ben";

            	ben += 
                    '<div class="preview" id="ben-'+data.benefits[i].id+'">'+
                        '<div class="back-pic-preview" style="background: url(\''+data.benefits[i].image+'\'); background-size: cover;"></div>'+
                        '<div class="logo-pic-preview"><span>'+data.benefits[i].title+'</span></div>'+
                        '<div class="about-preview">'+
                        '<span>'+data.benefits[i].about+'</span><br>'+
                        '<span><strong>Link: </strong>'+data.benefits[i].href+'</span><br>'+
                        '<span><strong>Zona: </strong>'+data.benefits[i].location+'</span><br>'+
                        '</div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/benefits?id='+data.benefits[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.benefits[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-ben').append(ben);

            for (var i = 0; i < data.categories.length; i++) {

                var type = "cat";

            	cat += 
                    '<div class="preview" id="cat-'+data.categories[i].id+'">'+
                        '<div class="back-pic-preview" style="background: url(\''+data.categories[i].image+'\'); background-size: cover;"></div>'+
                        '<div class="logo-pic-preview"><span>'+data.categories[i].type+'</span></div>'+
                        '<div class="about-preview"><span>'+data.categories[i].about+'</span></div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/categories?id='+data.categories[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.categories[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-cat').append(cat);

            for (var i = 0; i < data.demos.length; i++) {

                var type = "demo";

            	demo += 
                    '<div class="preview" id="demo-'+data.demos[i].id+'">'+
                        '<div class="back-pic-preview" style="background: url(\''+data.demos[i].image+'\'); background-size: cover;"></div>'+
                        '<div class="logo-pic-preview"><span>'+data.demos[i].title+'</span></div>'+
                        '<div class="about-preview"><span>'+data.demos[i].about+'</span></div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/demos?id='+data.demos[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.demos[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-demos').append(demo);

            for (var i = 0; i < data.dealers.length; i++) {

                var type = "deal";

            	deal += 
                    '<div class="preview" id="deal-'+data.dealers[i].id+'">'+
                        '<div class="logo-pic-preview" style="width: 100%;"><span>'+data.dealers[i].name+'</span></div>'+
                        '<div class="about-preview" style="width: 100%;">'+
                        '<span><strong>Tlf: </strong>'+data.dealers[i].tlf+'</span><br>'+
                        '<span><strong>Mail: </strong>'+data.dealers[i].mail+'</span><br>'+
                        '<span><strong>Web: </strong>'+data.dealers[i].web+'</span><br>'+
                        '</div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/dealers?id='+data.dealers[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.dealers[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-deal').append(deal);

            for (var i = 0; i < data.faqs.length; i++) {

                var type = "faq";

            	faq += 
                    '<div class="preview" id="faq-'+data.faqs[i].id+'">'+
                        '<div class="logo-pic-preview" style="width: 100%;"><span>'+data.faqs[i].question+'</span></div>'+
                        '<div class="about-preview" style="width: 100%;">'+
                        '<span>'+data.faqs[i].answer+'</span><br>'+
                        '</div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/faqs?id='+data.faqs[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.faqs[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-faq').append(faq);

            for (var i = 0; i < data.news.length; i++) {

                var type = "new";

            	news += 
                    '<div class="preview" id="new-'+data.news[i].id+'">'+
                        '<div class="back-pic-preview" style="background: url(\''+data.news[i].image+'\'); background-size: cover;"></div>'+
                        '<div class="logo-pic-preview"><span>'+data.news[i].title+'</span></div>'+
                        '<div class="about-preview"><span>'+data.news[i].about+'</span></div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/news?id='+data.news[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.news[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-news').append(news);

            for (var i = 0; i < data.products.length; i++) {

                var type = "prod";

            	prod += 
                    '<div class="preview" id="prod-'+data.products[i].id+'">'+
                        '<div class="back-pic-preview" style="background: url(\''+data.products[i].image+'\'); background-size: cover;"></div>'+
                        '<div class="logo-pic-preview"><span>'+data.products[i].name+'</span></div>'+
                        '<div class="about-preview"><span>'+data.products[i].about+'</span></div>'+
                        '<div class="options-container">'+
                        '<a href="/editview/products?id='+data.products[i].id+'"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                        '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.products[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                        
                    '</div>'
            	;
            }

            $('#body-products').append(prod);

            for (var i = 0; i < data.wins.length; i++) {

                var type = "wins";

            	if (data.wins[i].type === 'buy') {
	            	buywin += 
	                    '<div class="preview" id="wins-'+data.wins[i].id+'">'+
	                    '<div class="back-pic-preview" style="background: url(\''+data.wins[i].image+'\'); background-size: cover;"></div>'+
	                        '<div class="logo-pic-preview"><span>'+data.wins[i].title+'</span></div>'+
	                        '<div class="about-preview">'+
	                        '<span>'+data.wins[i].about+'</span><br>'+
	                        '<span><strong>Link: </strong>'+data.wins[i].href+'</span><br>'+
	                        '<span><strong>Botón: </strong>'+data.wins[i].button+'</span><br>'+
	                        '<span><strong>Item: </strong>'+data.wins[i].item+'</span><br>'+
	                        '<span><strong>Puntos: </strong>'+data.wins[i].point+'</span><br>'+
	                        '</div>'+
                            '<div class="options-container">'+
                            '<a href="/editview/win?id='+data.wins[i].id+'&typecheck=buy"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                            '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.wins[i].id+', \''+type+'\');"></i>'+
                        '</div>'+                            
	                    '</div>'
	            	;
            	}else{
	            	playwin += 
	                    '<div class="preview" id="wins-'+data.wins[i].id+'">'+
	                    '<div class="back-pic-preview" style="background: url(\''+data.wins[i].image+'\'); background-size: cover;"></div>'+
	                        '<div class="logo-pic-preview"><span>'+data.wins[i].title+'</span></div>'+
	                        '<div class="about-preview">'+
	                        '<span>'+data.wins[i].about+'</span><br>'+
                            '<span><strong>Link: </strong>'+data.wins[i].href+'</span><br>'+
                            '<span><strong>Botón: </strong>'+data.wins[i].button+'</span><br>'+
                            '<span><strong>Item: </strong>'+data.wins[i].item+'</span><br>'+
                            '<span><strong>Puntos: </strong>'+data.wins[i].point+'</span><br>'+
	                        '</div>'+
                            '<div class="options-container">'+
                            '<a href="/editview/win?id='+data.wins[i].id+'&typecheck=play"><i class="fa fa-pencil" aria-hidden="true"></i></a>'+
                            '<i class="fa fa-times" aria-hidden="true" onclick="deleteX('+data.wins[i].id+', \''+type+'\');"></i>'+
                            '</div>'+                            
	                    '</div>'
	            	;
            	}

            }




            $('#body-buywin').append(buywin);                                                        
            $('#body-playwin').append(playwin);                                                        
        },
    });

}

loadPreview();

/*Delete Element*/

function deleteX(id, type) {

    if (type === 'wins') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#wins-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'new') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#new-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'acce') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#acce-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'ben') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#ben-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'cat') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#cat-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'deal') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#deal-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'demo') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#demo-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'faq') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#faq-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }else if (type === 'prod') {
        $.get('/delete?id='+id+'&type='+type, function (response) {

            if (response == 1) {
                $('#prod-'+id).css('display', 'none');
                console.log('Success');        
            }else{
                alert('Ha ocurrido un error');
                console.log(response);
            }

        });
        
    }
    
}