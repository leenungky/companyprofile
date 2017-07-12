var domain = location.protocol+'//'+location.hostname+(location.port ? ':'+location.port: '');

window.onscroll = function() {myFunction()};

function myFunction() {
    
}

$( document ).ready(function() {		
    var value = 2;
    var url = "/get_tarif";
	$("input[name=to]").keyup(function( event ) {		        
        $(this).autocomplete({
            source: function( request, response) {            	
                if (request.term != "") {
                    $.ajax({
                        url: domain + url,
                        dataType: "json",
                        method: "get",
                        data: {
                            filter: request.term
                        },
                        success: function (result) {                                                         
                            if (result.response.code == "200"){
                                response($.map(result.data, function (item) {                                	
                                    var name = item.city + ", " + item.kecamatan;
                                    return {
                                        label: name,
                                        value: name,
                                        data: item
                                    }
                                }));
                            }
                        }
                    });
                }
            },
            autoFocus: true,
            minLength: 2,
            select: function( event, ui ) {
                if (ui.item == null){
                    alert('a');
                    $(this).val("");
                    return false;
                }else{
                    var data = ui.item.data;
                    $("input[name='weight']").val("1");
                    console.log("regular_price : " + data.regular_price);
                    console.log("est_delivery : " + data.est_delivery);
                    console.log("oneday_price : " + data.oneday_price);
                }
            },
            change: function(event,ui){
                if (ui.item == null){                    
                    $(this).val("");
                    return false;
                }
            }
        });
    });

    $("input[name='to']").bind("keydown", function(event) {
        if (event.keyCode==13){
            return false;
        }
    });

    $("input[name='weight']").numeric();
});