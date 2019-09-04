
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function shiftEncrypt() {
    var userInput = document.getElementById("user-input").value;
    $.ajax({
       type:'POST',
       url:'api/shiftEncrypt',
       data: {string: userInput},
       dataType: 'JSON',
       success:function(data){
          alert(data.string);
       }
    });
}

function shiftDecrypt() {
    var userInput = document.getElementById("user-input").value;
    $.ajax({
       type:'POST',
       url:'api/shiftDecrypt',
       data: {string: userInput},
       dataType: 'JSON',
       success:function(data){
          alert(data.string);
       }
    });
}

function matrixEncrypt() {
    var userInput = document.getElementById("user-input").value;
    $.ajax({
       type:'POST',
       url:'api/matrixEncrypt',
       data: {string: userInput},
       dataType: 'JSON',
       success:function(data){
          alert(data.string);
          console.log(data.string);
       }
    });
}

function matrixDecrypt() {
    var userInput = document.getElementById("user-input").value;
    $.ajax({
       type:'POST',
       url:'api/matrixDecrypt',
       data: {string: userInput},
       dataType: 'JSON',
       success:function(data){
          alert(data.string);
       }
    });
}
