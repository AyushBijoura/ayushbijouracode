function validateForm() {
    var x = document.forms["myform"]["T1"].value;
    if (x == null || x == "") {
        alert("Name must be filled ");
        return false;
    }

    var y = document.forms["myform"]["T2"].value;
    if (y == null || y == "") {
        alert("Email must be filled ");
        return false;
    }

var z = document.forms["myform"]["mobno"].value;
    if (z == null || z == "") {
        alert("Contact no. must be filled ");
        return false;
    }
    else
    if(isNaN(z))
    {
    alert("Please enter no.");
    return false;
    }
    else
    if(z.length<10)
    {
    alert("Mobile no. should of 10 no.");
    return false;
    }

var a = document.forms["myform"]["S1"].value;
    if (a == null || a == "") {
        alert("Message must be filled ");
        return false;
    }

  var b = document.forms["myform"]["T2"].value;
    var atpos = b.indexOf("@");
    var dotpos = b.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=b.length) {
        alert("Not a valid e-mail address");
        return false;
	}

//var link = 'mailto:ayush200994@gmail.com?subject=Message from '
//             +document.getElementById('T1').value
  //           +'&body='+document.getElementById('T2').value;
   // window.location.href = link;



 var c = document.forms["myform"]["mobno"].value;
 var text;
 if (isNaN(c)) {
         alert( "Input not valid");
    }
 else
 
 if(x.length<10)
 {
 
 alert("Mobile no should be of 10 no.");
 }












}
