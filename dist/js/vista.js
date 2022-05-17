

$('#btnVista').click( function() { cambioVista(); } );


function cambioVista(){

	
$.ajax({
            url :"http://10.5.10.245/UGEL/Adjudicacion/inicio/vista",
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
            	
            }
        });

}