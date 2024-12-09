$(document).ready(function(){
    //Read();
    $('#teste').on('click', function(){
        alert("Success");
        Read();
    });
});

$(document).ready(function(){
    if($('#tabela') =! null){
        Read();
    }

});

function Read(){
    $.ajax({
        url: 'tabelaUser.html',
        type: 'POST',
        async: false,
        data:{
            res: 1,
            csrfmiddlewaretoken: $('input[name=csrfmiddlewaretoken]').val
        },
        success: function(response){
            $('#tabela').html(response);
        }
    });    
}