$(document).ready(function(){
    console.log('siap');
    
    $('#input').submit(function(e){
        e.preventDefault();
        // console.log($('#input').serialize());
        // var a = $('#input').serialize();
        var b = $('#apa').val();
        console.log(b);
        
        $.ajax({
            type: "POST",
            url: "helper/terimaNkirim.php",
            data: "masukkan="+b,
            dataType: "JSON",
            success: function(data){
                console.log(data);
                   
            },
            error: function(xhr){
                console.log('error '+xhr.status+' '+xhr.thrownError);
                
            }
        });
    });
});