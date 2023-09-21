<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Personal Information</h5>
			</div>
			<hr>

			<form class="row g-3">
				<div class="col-md-6">
					<label for="fullname" class="form-label">Full name</label>
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

				<div class="col-12">
					<label for="inputAddress2" class="form-label">Address</label>
					<textarea class="form-control" id="inputAddress2" placeholder="Address 2..." rows="3"></textarea>
				</div>


				<h5 class="mb-0 pt-3 text-white">Documents</h5>

				<div class="row">
					<div class="col-md-6 mb-3">
						<div class="image-upload-wrapper">
							<label for="aadhaar_number" class="form-label">Upload Aadhaar Front</label>
							<div class="input-group">
								<span class="input-group-text"><i class='bx bxs-id-card'></i></span>
								<input type="file" class="imageInput form-control border-start-0" accept="image/*">
							</div>
							<img class="imagePreview" src="" alt="Image Preview">
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="image-upload-wrapper">
							<label for="aadhaar_number" class="form-label">Upload Aadhaar Back</label>
							<div class="input-group">
								<span class="input-group-text"><i class='bx bxs-id-card'></i></span>
								<input type="file" class="imageInput form-control border-start-0" accept="image/*">
							</div>
							<img class="imagePreview" src="" alt="Image Preview">
						</div>
					</div>
					<div class="col-md-6 mb-3">
						<div class="image-upload-wrapper">
							<label for="aadhaar_number" class="form-label">Upload Pan</label>
							<div class="input-group">
								<span class="input-group-text"><i class='bx bxs-id-card'></i></span>
								<input type="file" class="imageInput form-control border-start-0" accept="image/*">
							</div>
							<img class="imagePreview" src="" alt="Image Preview">
						</div>
					</div>
					

				</div>


				<div class="">
					<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=success" class="btn btn-light px-5 float-end" id="">Next</a>
				</div>

			</form>
		</div>

	</div>
</div>