// $('#pilihan').change(function(){
//   console.log(this.value);
// });
$(document).ready(function(){
  // var message = document.getElementById('message').innerHTML;
  // console.log(message);

  var form = $('#formTambah');

  $(form).submit(function(e){
    e.preventDefault();
    var data = $(form).serialize();
    // data = data + '&pilihan='+$('#pilihan').val();
    $.ajax({
      type: "POST",
      url: $(form).attr('action'),
      data: data,
      dataType: "text",
      success: function(result){
        console.log(data);
        // console.log(result);
        $('#namaLengkap').val('');
        $('#pilihan').val(0);
        $('#username').val('');
        $('#password').val('');
        $('#Message').val('berhasil daftar');
        $('#Message-success').fadeIn(1000);
        $('#Message-success').fadeOut(10000);
      },
      error: function(xhr,response,result){
        alert('errosr ' + xhr.status + ' - ' + xhr.thrownError);
        console.log(result);
        // console.log(responseText);
        $('#message-failed').fadeIn(1000);
        $('#message-failed').fadeOut(10000);
      }
    });
  });
});