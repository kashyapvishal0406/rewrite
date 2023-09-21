<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Personal Details</h5>
			</div>
			<hr>
			<form class="row g-3">
				<div class="col-md-6">
					<label for="fullname" class="form-label">Customer's name</label>
					<input type="text" class="form-control" id="fullname">
				</div>
				<div class="col-md-6">
					<label for="mobile" class="form-label">Mobile</label>
					<input type="text" class="form-control" id="mobile">
				</div>
				<div class="col-md-6">
					<label for="alternate_mobile" class="form-label">Alternate Mobile</label>
					<input type="text" class="form-control" id="alternate_mobile">
				</div>
				<div class="col-md-6">
					<label for="email" class="form-label">Email</label>
					<input type="text" class="form-control" id="email">
				</div>
				<div class="col-md-6">
					<label for="fathers_name" class="form-label">Father's name</label>
					<input type="text" class="form-control" id="fathers_name">
				</div>
				<div class="col-md-6">
					<label for="mothers_name" class="form-label">mother's name</label>
					<input type="text" class="form-control" id="mothers_name">
				</div>
				<div class="col-12">
					<label for="inputAddress2" class="form-label">Address</label>
					<textarea class="form-control" id="inputAddress2" placeholder="Address 2..." rows="3"></textarea>
				</div>
				<div class="col-md-6">
					<label for="email" class="form-label">Date Of Birth</label>
					<input type="date" class="form-control" id="dob">
				</div>
				<h5 class="mb-0 pt-3 text-white">Gauranter Details</h5>
				</hr>
				<div class="col-md-6">
					<label for="inputAddress2" class="form-label">Name</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="col-md-6">
					<label for="inputAddress2" class="form-label">Mobile</label>
					<input type="text" class="form-control" id="">
				</div>
				<div class="col-md-6">
					<label for="inputAddress2" class="form-label">Relation</label>
					<input type="text" class="form-control" id="">
				</div>

			</form>
			<div class="col-12">
				<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=select_type" class="btn btn-light px-5 float-end" id="">Next</a>
			</div>

		</div>
	</div>
</div>