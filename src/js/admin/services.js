$(function() {
  $("#ejecutar").click(function(){
    $('#result').attr('src', $('#serviceUrl').val());
    //window.frames["result"].location.reload();
    return false;
  });
});
