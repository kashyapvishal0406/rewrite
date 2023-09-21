<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Business Information</h5>
			</div>
			<hr>
			<form class="row g-3">
				<div class="col-md-6">
					<label for="inputLastName" class="form-label">Business name</label>
					<input type="text" class="form-control" id="inputLastName">
				</div>
				<div class="col-md-6">
					<label for="inputFirstName" class="form-label">Salary</label>
					<input type="email" class="form-control" id="inputFirstName">
				</div>
				
				<div class="col-md-6">
					<label for="inputLastName" class="form-label">Loan Amount</label>
					<input type="text" class="form-control" id="inputLastName">
				</div>


				<div class="">
					<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=documents_upload_business" class="btn btn-light px-5 float-end" id="">Next</a>
				</div>

			</form>
		</div>
		<div class="row">

		</div>
	</div>
</div>