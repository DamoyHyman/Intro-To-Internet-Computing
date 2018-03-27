function IP() // Get user IP address
{
     $.get('https://ipinfo.io', function(response){
        $("#IP").html('Your IP Address: <b>' + response.ip + '</b>');
    
    }, 'jsonp');
}

function reset() // Reset mass box value
{
    document.getElementById("massValue").value = " ";
}

function mg() // Convert g -> mg
{
     var gram = document.getElementById("massValue").value;
    
    if (gram < 0)
        {
            alert("Please enter a mass greater than 0.");
            gram.reset();
        }
    else
        {
            result = gram * 1000;
            document.getElementById("result").innerHTML = gram + " g = " + result.toFixed(4) + " mg";
        }
}

function Kg() // Convert g -> Kg
{
     var gram = document.getElementById("massValue").value;
    
    if (gram < 0)
        {
            alert("Please enter a mass greater than 0.");
            gram.reset();
        }
    else
        {
            result = gram / 1000;
            document.getElementById("result").innerHTML = gram + " g = " + result.toFixed(4) + " Kg";
        }
}

function lbs() // Convert g -> lbs
{
     var gram = document.getElementById("massValue").value;
    
    if (gram < 0)
        {
            alert("Please enter a mass greater than 0.");
            gram.reset();
        }
    
    else
        {
            result = gram / 453.59237;
            document.getElementById("result").innerHTML = gram + " g = " + result.toFixed(4) + " lbs";
        } 
}

function oz() // Convert g -> oz
{
     var gram = document.getElementById("massValue").value;
    
    if (gram < 0)
        {
            alert("Please enter a mass greater than 0.");
            gram.reset();
        }
    
    else
        {
            result = gram / 28.34952312 ;
            document.getElementById("result").innerHTML = gram + " g = " + result.toFixed(4) + " oz";
        }  
}