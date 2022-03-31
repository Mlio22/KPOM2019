var inter;

function kurangi (){
    inter = inter - 1;
    console.log(inter);
    $("#angka").html(inter);
        
}
$(document).ready(function(){
    inter = 5;
    
    $('#angka').html(inter);

    if(inter > 0){
        intervalId = setInterval(kurangi,1000);
    }
    else if(inter = 0){
        window.location = "index.php";
    }
});