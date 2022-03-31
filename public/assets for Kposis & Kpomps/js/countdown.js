var inter = 5;

$(document).ready(function(){
    $('#countdown').html(inter);

    var mulai = setInterval(function(){
        $('#countdown').html(inter);
        inter -= 1;
        console.log(inter);
        if(inter < 0){
            clearInterval(mulai);
            window.location = 'index.php';
        }
    },1000)
});