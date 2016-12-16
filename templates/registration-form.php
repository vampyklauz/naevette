<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog medium">

    <!-- Modal content-->
    <div class="modal-content plain bg-primary">
      <div class="modal-header no-padding-bottom">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title text-center padding-bottom-10">Register your interest in training</h3>
        <p class="small text-center">Simply provide us some contact details and our friendly team will get back to you shortly</p>
      </div>
      <div class="modal-body">
        <form id="registration" action="#" method="POST">
			<!-- <div class="col-md-12">
				        	<input name="name" type="text" placeholder="Name">
				        	<input name="email" type="text" placeholder="Email">
				        	<input name="contact" type="text" placeholder="Contact Number">
				
				<br><br>
				<p>
					<input type="checkbox" id="contact_me" />
			    				<label for="contact_me">I’d like to find out more. Contact me.</label>
			
			    				<input type="checkbox" id="course" />
			    				<label for="course">I’d like to book for a course today.</label>
				</p>
			
				<select class="select select-white" name="course" id="course">
					<option value="Microsoft App-V 5.0 App Virtualisation">Microsoft App-V 5.0 App Virtualisation</option>
					<option value="Application Packaging MSI - EXE Core Skills">Application Packaging MSI - EXE Core Skills</option>
					<option value="Application Packaging MSI – Intermediate">Application Packaging MSI – Intermediate</option>
				</select>
			
				<br><br>
				<textarea name="comments" cols="40" rows="1" aria-invalid="false" placeholder="Comments"></textarea>
				        </div> -->
			<div class="col-xs-12">
				<?php echo do_shortcode("[RM_Form id='2']"); ?>
			</div>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>

  </div>
</div>