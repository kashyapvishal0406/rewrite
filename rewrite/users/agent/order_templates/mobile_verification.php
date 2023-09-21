<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Mobile Verification</h5>
			</div>
			<hr>
			<form class="row g-3">
				<div class="col-md-6">
					<label for="inputFirstName" class="form-label">Mobile number</label>
					<input type="text" class="form-control" id="mobile" placeholder="enter your mobile number">
				</div>

			</form>
			<div class="col-12">
				<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=personal_details" class="btn btn-light px-5 float-end" id="">Next</a>
			</div>
		</div>
	</div>
</div>