var currentRequest;
$("#qCarta").keyup(function()
{
    var q = this.value;
    if(q.length <= 3)
    {
        return;
    }
    else
    {
        
        currentRequest = $.ajax({
            type: "get",
            url: window.location.origin + "/cards/search/"+q,            
            dataType: "json",
            beforeSend : function()    {           
                if(currentRequest != null) {
                    currentRequest.abort();
                }
            },
            success: function (response)
            {
                var dlCartas = $("#dlCartas");
                dlCartas.empty();
                
                for(c of response)
                {                
                    var o = $('<option></option>');
                    $(dlCartas).append(o);
                    o.attr("value",c.name);
                    var set_icon = $('<img/>');
                    set_icon.attr("src", c.set_url_imagen);
                    o.prepend(set_icon);
                }
            }
        });
    }

});



