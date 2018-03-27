/*$(document).ready(function() {
function update() {
  $.ajax({
  type: 'GET',
  cache: false,
  url: location.href,
  //timeout: 1000,
  complete: function(data) {
      $("#timer").html(data); 
    window.setTimeout(update, 1000);
   },
  });
 }
    update();
});*/


window.setInterval(function(){
      /// call your function here
    //function to get server time and display.
function ShowData();
    }, 1000);


function ShowData()
{ 
    ajax = new XMLHttpRequest();
  ajax.open( "GET", "servertime.php", true );  
  ajax.onreadystatechange = function() 
  {
    if ( ajax.readyState == 4 ) 
    {      
      document.getElementById("timer").innerHTML = ajax.responseText;
    }
  }    
  ajax.send(null);
}; 