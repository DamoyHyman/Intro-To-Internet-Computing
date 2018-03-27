$(document).ready(function() {
function update() {
  $.ajax({
  type: 'POST',
  url: 'index.php',
  timeout: 1000,
  success: function(data) {
      $("#timer").html(data); 
    window.setTimeout(update, 1000);
   },
  });
 }
    update();
});

$(document).ready(function(){
    setInterval(function(){
      $("#timer").load("index.php");  
    }, 1000);
    
});