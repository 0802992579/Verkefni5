<!DOCTYPE html>
<html lang="is">
  
    <!-- Header -->
    <?php include 'header.php';?>
    <?php include 'menu.php';?>
    <section>
        <h2>Order form</h2>
        <p>Fill in the form to order A Thing and we will skip it to you the next working day.</p> 
       <form>
  		<fieldset class="contact-info">
			
			<label>Number of The Thing $15<select name="quantity" required>
        		<option value="1" selected>1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option>
      			</select>		
                        </label>
			<label>Of that amount how many are Delux version $25<select name="quantity" required>
        		<option value="0">0</option>
			<option value="1" selected>1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option>
      			</select>		
                        </label>
			<label>Name<input type="text" name="name" placeholder="Your name" required  title="We need your name"></label>
    			<label>Email<input type="email" name="email" placeholder="name@domain.com" pattern="(?!(^[.-].*|[^@]*[.-]@|.*\.{2,}.*)|^.{254}.)([a-zA-Z0-9!#$%&'*+\/=?^_`{|}~.-]+@)(?!-.*|.*-\.)([a-zA-Z0-9-]{1,63}\.)+[a-zA-Z]{2,15}" required title="name@domain.com"></label>
    			<label>Address<input type="text" name="address" placeholder="Your address" required title="We need your address"></label>
    			<label>Address cont.<input type="text" name="addresscont" placeholder="Further information about address if needed"></label>
    			<label>City<input type="text" name="city" placeholder="Name of city" required></label>
			<label>Country<input type="text" name="country" placeholder="Name of country"  required></label>
                        <label>Zip Code<input type="text" name="zip" placeholder="123" pattern="\d{3}" title="Please enter in the format 123" required></label>
			<label>Phone<input type="text" name="phone" placeholder="123 4567" required pattern="\d{3}[\-]?[\ ]?\d{4}"  title="Please enter in the format 123 4567"></label>
    			<label><input type="submit" name="submit" value="Send"></label>
    		</fieldset>
	</form>
   </section>
   
   <?php include 'footer.php';?>
   
  </body>
</html>