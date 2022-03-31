var modeNode = document.getElementById('urutanLain');
var hasilNode = document.getElementById('hasil');
var hasil = Array();
$(document).ready(function(){setInterval(getInfo,1000);});

function getInfo(){
  var mode = $('#urutanLain').val();
  document.getElementById('mode').innerHTML = mode;
  $.ajax({
    type: "GET",
    url: 'helper/security.php',
    data: "mode="+mode,
    dataType: 'JSON',
    success: function(data){
      if(hasil == data){
        // console.log('siap');
        console.log(data);
        console.log(mode);
        
        
      }
      else
      {
        console.log(data);
        // hasil = data;
        // console.log(hasil);
        
        $('#hasil').empty();
        for (var i = 0; i < data.length; i++) {

          if(data[i].tokenOsim == 0){
            data[i].tokenOsim = 'Sudah Memilih';
          }
          else{
            data[i].tokenOsim = 'Belum Memilih'
          }

          if(data[i].TokenMps == 0){
          data[i].TokenMps = 'Sudah Memilih';
          }
          else{
          data[i].TokenMps = 'Belum Memilih'
          }
          $('#hasil').append('<tr id="'+ i +'" onclick="tertekan(this.id)"> <td>' + data[i].namaLengkap  +'</td> <td>' + data[i].kelas  +'</td> <td>' + data[i].username  +'</td> <td>' + data[i].password  +'</td> <td>' + data[i].tokenOsim +'('+ data[i].PilihanOsim +')'  +'</td> <td>' + data[i].TokenMps +'('+ data[i].PilihanMps +')'  +'</td> </tr>');
          hasil = data;

        }

        // alert('suksees');
      }},
    error: function(xhr){
      //alert('error' + ' - ' + xhr.status + ' : ' + xhr.thrownError);
    }
  });
}
$('#urutanLain').change(function(){
  setInterval(getInfo,1000)});
