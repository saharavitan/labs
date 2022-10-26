function launchmodal(){
    var text = `<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
		  <div class="modal-dialog" role="document">
			<div class="modal-content">
			  <div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Modal title2</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>
				<form action="modal.php" method="post">
				  <div class="modal-body">

						<input name="user_2" value="aaa" required>
						<input name="input_2" value="bbb" required>

				  </div>
				</form>
				  <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<input type="submit" value="Send" class="btn btn-primary" value="Save changes"  onclick="document.forms[2].submit()">
				  </div>


			</div>
		  </div>
		</div>`;
    document.getElementById("modaltest").innerHTML = text;
}