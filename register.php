<!DOCTYPE html>
<html>
<?php if (empty($_POST)): ?>
<head>
<title>Athletics booking system: Register: Sign up</title>
<style>
label {margin-top:1em;}
input,label {display:block;}
input.registerInput {width:35em;}
</style>
</head>
<body>
<script>
function validateForm() {
   hirer=(document.getElementById("hirer").value = document.getElementById("hirer").value.trim());
   contact=(document.getElementById("contact").value = document.getElementById("contact").value.trim());
   address=(document.getElementById("address").value = document.getElementById("address").value.trim());
   email=(document.getElementById("email").value = document.getElementById("email").value.trim());
   phone=(document.getElementById("phone").value = document.getElementById("phone").value.trim());
   mobilePhone=(document.getElementById("mobilePhone").value = document.getElementById("mobilePhone").value.trim());
   password1 = document.getElementById("password1").value;
   password2 = document.getElementById("password2").value;

   errorMsg = "Error: The form could not be submitted because of the following errors:";
   failed=false;

   if (hirer=="")
   {
       errorMsg+="\r\n* Hirer name is a compulsory field.";
       failed=true;
   }
   if (contact=="")
   {
       errorMsg+="\r\n* Contact person is a compulsory field.";
       failed=true;
   }
   if (address=="")
   {
       errorMsg+="\r\n* Mailing address is a compulsory field.";
       failed=true;
   }
   if (phone=="")
   {
       errorMsg+="\r\n* Phone number is a compulsory field.";
       failed=true;
   } else if (isNaN(phone)||phone.length!=10)
   {
        errorMsg+="\r\n* Phone number is not a valid Australian phone number.";
   }

   if (mobilePhone=="")
   {
       errorMsg+="\r\n* Mobile phone number is a compulsory field.";
       failed=true;
   } else if (isNaN(mobilePhone)||mobilePhone.length!=10)
   {
        errorMsg+="\r\n* Mobile phone number is not a valid Australian phone number.";
   }
   if (email=="")
   {
       errorMsg+="\r\n* Email address is a compulsory field.";
       failed=true;
   }
   if (password1=="")
   {
       errorMsg+="\r\n* Password is a compulsory field.";
       failed=true;
   }
   if (password2=="")
   {
       errorMsg+="\r\n* Confirm password is a compulsory field.";
       failed=true;
   }
   if (password1!=password2)
   {
       errorMsg+="\r\n* Password and Confirm password do not match.";
       failed=true;
   }

   if (failed)
   {
       alert(errorMsg);
       return true;
   }
   else
   {
       return true;
   }
}
</script>

<h1>Athletics booking system: Registration system</h1>
<h2>Sign up</h2>
<form onsubmit="return validateForm()" method="POST">
<label for="hirer">Hirer name</label>
<input class="registerInput" required="required" type="text" name="hirer" id="hirer" placeholder="Full name of hiring person or organisation">
<label for="contact">Contact person</label>
<input class="registerInput" required="required" type="text" name="contact" id="contact" placeholder="Preferred name of hiring person or organisation's contact person">
<label for="address">Mailing address</label>
<input class="registerInput" required="required" type="text" name="address" id="address" placeholder="Mailing address for hiring person or organisation">
<label for="phone">Phone number</label>
<input class="registerInput" required="required" type="text" name="phone" id="phone" placeholder="Hirer's permanent phone number">
<label for="mobilePhone">Mobile phone number</label>
<input class="registerInput" required="required" type="text" name="mobilePhone" id="mobilePhone" placeholder="Contact person's mobile phone number">
<label for="email">E-mail address</label>
<input class="registerInput" required="required" type="text" name="email" id="email" placeholder="Hirer's email address">
<label for="password1">Password</label>
<input class="registerInput" required="required" type="password" name="password1" id="password1" placeholder="Password to use to login">
<label for="password2">Confirm password</label>
<input class="registerInput" required="required" type="password" name="password2" id="password2" placeholder="Confirm password to use to login">
<input type="submit">
</form>
</body>
<?php else: ?>

<?php
	$error_message='<p>Error: Registration could not proceed because of the following errors:<ul>';
	$submissionFailed=false;
    foreach ($_POST as $name => $value)
    {
	    if ($name == 'hirer')
	    {
	         if ($value == "")
	         {
	              $error_message.='<li>Hirer name cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'contact')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>Contact person name cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'address')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>Mailing address cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'phone')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>Phone number cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'mobilePhone')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>Mobile phone number cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'email')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>E-mail address cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'password1')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>Password cannot be blank.</li>';
	              $submissionFailed=true;
	         }
	    }
	    elseif ($name == 'password2')
	    {
	    	 if ($value == "")
	         {
	              $error_message.='<li>Confirm password cannot be blank.</li>';
	              $submissionFailed=True;
	         }
	    }
	    else
	    {
     	$error_message.='<li>The post data element ".$name." is unrecognised.</li>';
			$submissionFailed=True;
	    }
	}
	$error_message.='</ul></p>';
	if ($submissionFailed)
	{
		echo $error_message;
	}
?>

<?php endif ?>
</html>
