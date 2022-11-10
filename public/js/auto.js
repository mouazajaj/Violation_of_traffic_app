$(document).ready(function() {
    $("#Car_Number" ).autocomplete({
  
        source: function(request, response) {
            $.ajax({
            url: siteUrl + '/' +"autocomplete",
            data: {
                    term : request.term
             },
            dataType: "json",
            success: function(data){
               var resp = $.map(data,function(obj){
                    return obj.Car_Number;
               }); 
  
               response(resp);
            }
        });
    },
    minLength: 2
 });
});