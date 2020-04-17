
	

	<script type="text/javascript">
	
     $(document).ready(function()
			{
				$('#from input[name="fromField"]').bind('click focus', function()
					{
					 $(this).val('');
					});
					
				$('#name input[name="nameField"]').bind('click focus', function()
					{
					 $(this).val('');
					});
					
				$('#Bcc input[name="bccField"]').bind('click focus', function()
					{
					 $(this).val('');
					});
					
				$('#Cc input[name="ccField"]').bind('click focus', function()
					{
					 $(this).val('');
					});
					
				$('#subject input[name="subject"]').bind('click focus', function()
					{
					 $(this).val('');
					});
					
				$('#message textarea[name="mess"]').bind('click focus', function()
					{
					 $(this).val('');
					});
					
			
		
				$("input[type='button']").button().css('margin','0.5em')
					.on('mouseover',function()
						{
							$(this).addClass('ui-state-hover');
							$("input[name='emailType']").val('email1');
							$("input[type='button']:first").on('click',function()
								{
									$(this).addClass('ui-state-active');
									$("input[name='emailType']").val('email1');
									$('#emess').text('Send Hotmail to Richard L. Sypert Jr.');
								})
								.next().on('click',function()
								{
									$(this).addClass('ui-state-active');
									$("input[name='emailType']").val('email2');
									$('#emess').text('Send Google Mail to Richard L. Sypert Jr.');
								});  
							
						
						});
			
			
			});
	</script>
	
	

	<?php echo validation_errors(); ?>
		<?php 
				$attributes = array('id'=>'emailform','autocomplete'=>'on');
				echo form_open('sendEmail',$attributes); 
		?>
			<div id="wayoutC">
				<div id="cbuttons">
					<input name="eButton1" class="ui-button ui-corner-all" type="button" value="Send To Hotmail"></input>
					<input name="eButton2" class="ui-button ui-corner-all" type="button" value="Send To Google Mail"></input>
				</div>
				<div id="topbar"><div id="emess">Send Email To Richard L. Sypert Jr.</div><input type="submit" name="submit" class="submit" value="SEND Email"/></div>
				<div id="emailContainer">
					
							<div id="leftcol">
							
								<p id="name">
									Name:&nbsp; <input name="nameField" class="nameField" type="text" value="Your Name"/>
								</p>
							
								<p id="from">
									From:&nbsp; <input name="fromField" class="fromField" type="text" value="yourEmail@example.com"/>
								</p>
															
								<p id="Bcc">
									Bcc:&nbsp; <input name="bccField" class="bccField" type="text" value="Enter Bcc"/>
								</p>
								
								<p id="Cc">
									Cc:&nbsp; <input name="ccField" class="ccField" type="text" value="Enter Cc"/>
								</p>
							</div>
							<div id="rightcol">
								<p id="subject">
									<input name="subject" class="subj" type="text" value="Enter Email Subject"/>
								</p>
								<p id="message">
									<textarea name ="mess" class="mess" rows="20" cols="55">Enter message here</textarea>
									
								</p>
							</div>
				</div>
			</div>
			
			<input type="hidden" name="emailType" value=''/>
	    </form>