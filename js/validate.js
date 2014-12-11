function validate()
{
  
		var atpos = document.myForm.EMail.value.indexOf("@");
	var dotpos = document.myForm.EMail.value.lastIndexOf(".");
	var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  

   
   if( document.myForm.Name.value == "" )
   {
     alert( "Please provide your First name!" );
     document.myForm.Name.focus() ;
     return false;
   }
 
 
 
   if( document.myForm.Lname.value == "" )
   {
     alert( "Please provide your Last name!" );
     document.myForm.Lname.focus() ;
     return false;
   }  
  
   if( document.myForm.EMail.value == "" )
   {
     alert( "Please provide your Email!" );
	   document.myForm.EMail.focus() ;
     return false;
   }
   
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=document.myForm.EMail.value.length)
	{
		alert("Not a valid e-mail address");
	document.myForm.EMail.focus() ;
		return false;
	}
   
   
	if(document.myForm.Phone.value == '') 
	{ 
		alert("provide number"); 
		document.myForm.Phone.focus(); 
		return false;  
	}
	
	if(!(document.myForm.Phone.value.match(phoneno))) 
	{ 
		alert("not a valid number"); 
		document.myForm.Phone.focus(); 
		return false;  
	}


   
  if( document.myForm.Saddress1.value == "" )
   {
     alert( "Please provide your Street Address1!" );
	   document.myForm.Saddress1.focus() ;
     return false;
   }
	   
   if( document.myForm.City.value == "" )
   {
     alert( "Please provide your City Name!" );
	   document.myForm.City.focus() ;
     return false;
   }
  
   if( document.myForm.State.value == "" )
   {
     alert( "Please provide your State/Province" );
	   document.myForm.State.focus() ;
     return false;
   }
   
   
   if( document.myForm.Zip.value == "" )
   {
     alert( "Please provide your Zip Code" );
	   document.myForm.Zip.focus() ;
     return false;
   }
   if( document.myForm.Country.value == "0" )
   {
     alert( "Please provide your country!" );
	 document.myForm.Country.focus() ;
     return false;
   }


   if( document.myForm.Zip.value == "" ||
           isNaN( document.myForm.Zip.value ) ||
           document.myForm.Zip.value.length < 4 )
   {
     alert( "Please provide a zip in the format ####." );
     document.myForm.Zip.focus() ;
     return false;
   }
  
  
	
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=email.value.length)
	{
		alert("Not a valid e-mail address");
		document.myForm.EMail.focus() ;
		return false;
	}
	
	
	

   return( true );
	
	 
}