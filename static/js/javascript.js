(function (win,doc){
    "use strict";

    alert('oi');
})(window,document);
    
function Read(){
    $.ajax({
        url: 'verUsers/',
        type: 'POST',
        data:{
            res: 1,
            csrfmiddlewaretoken: $('input[name=csrfmiddlewaretoken]').val()
        },
        success: function(response){
            $('#tbl1').html(response)
        }
    });
}