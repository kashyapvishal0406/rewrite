<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Select Type</h5>
			</div>
			<hr>
			<form class="row g-3">
				<div class="col-md-6">
					<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=documents_upload_salary" class="btn btn-light btn-lg" id="">Salary</a>
				</div>
				<div class="col-md-6">
					<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=documents_upload_business" class="btn btn-light btn-lg" id="">Business</a>
				</div>

			</form>

		</div>
	</div>
</div>