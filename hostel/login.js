var name;
var room;
var hostel;
var id;

function submitForm(){
  id=$("#user_field").html();
  var pass = $("#pwd_data").html();

  $.post('validate.php',{id:id,pass:pass},function(data){
    if(data.substring(2,7)=="error"){
      alert(data);
    }
    else{
      name=data;
      $.post('allot.php',function(data){
        document.getElementById("upper_container").style.display = "none";
        document.getElementById("php_container").style.display = "block";
        $("#php_container").html(data);
        $(".hostel-room").click(function(){
          room = $(this).children().eq(1).html();
          hostel = $(this).children().eq(0).html();
          $("#dialog-text-id").html("Confirm allotting <strong>"+name+"</strong> room <strong>"+hostel+"-"+room+"</strong>?");
          on_overlay();
        });
      });
    }
    console.log(data);
  });
}

function on_overlay() {
  $("#email-overlay").fadeIn(500);
  document.getElementById("overlay").style.display = "flex";
  $("#email-box").fadeIn(500);
  document.getElementById("dialog-box").style.display = "block";
}

function off_overlay() {
  document.getElementById("overlay").style.display = "none";
  document.getElementById("dialog-box").style.display = "none";
}

function filterTable() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("filter-hostel");
  filter = input.value.toUpperCase();
  table = document.getElementById("room-table");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}

$(document).ready(function(){

  $("#submit_button").click(function(){
    submitForm();
  });


  $("#dialog-confirm").click(function(){
    $.post('assign.php',{id:id,room:room,hostel:hostel},function(data){
      alert(data);
      location.reload();
    });
  });

  $("#dialog-cancel").click(function(){
    off_overlay();
  });

});
