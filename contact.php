<!DOCTYPE html>
<html lang="is">
  
    <!-- Header -->
    <?php include 'header.php';?>
    <?php include 'menu.php';?>
    <section>
        <h2>Contact us</h2>
        <p>Feel free to contact us if you have any questions.</p> 
       <form>
  		<fieldset class="contact-info">
			<label>Name<input type="text" name="name" placeholder="Your name" required></label>
    			<label>Email<input type="email" name="email" placeholder="name@domain.com" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" required title="name@domain.com"></label>
    			<label>Subject<input type="text" name="title" placeholder="Subject of the email" required></label>
    			<label>Message<textarea name="message" required></textarea></label>
    			<label><input type="submit" name="submit" value="Send"></label>
    		</fieldset>
	</form>
   </section>

   <?php include 'footer.php';?>
   
  </body>
</html>