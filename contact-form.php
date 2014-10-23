<form method="POST" name="contactform" action="contact-form-handler.php"> 
  <fieldset>
  	<legend>Contact Form</legend>
    <p><label for="name" id="name_label">Name</label><br />
    <input type="text" name="name" id="name" size="38" value="" class="text-input" /></p>
      
    <p><label for="email" id="email_label">Return Email</label>  <br />
    <input type="text" name="email" id="email" size="38" value="" class="text-input" /></p>
      
    <p><label for="message" id="message_label">Message</label><br />
    <textarea name="message" id="message" cols="27" rows="10"></textarea></p>
      
    <p class="center"><input type="submit" name="submit" class="button" id="submit_btn" value="Submit" /></p>
  </fieldset>  
</form>

<script language="JavaScript">
	var frmvalidator  = new Validator("contactform");
	frmvalidator.addValidation("name","req","Please provide your name"); 
	frmvalidator.addValidation("email","req","Please provide your email"); 
	frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>

</body>
</html>