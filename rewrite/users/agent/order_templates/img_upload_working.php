<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Documents</h5>
			</div>
			<hr>
			<form class="row g-3">

				<div class="row">
					<div class="col">
						<div class="row mt-3">
							<div class="col-12 mb-3">
								<label for="aadhaar_number" class="form-label">Aadhaar Number</label>
								<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
									<input type="text" class="form-control border-start-0" id="aadhaar_number" placeholder="Aadhaar Number" value="<?php echo $agent_details['aadhar_number']; ?>">
								</div>
							</div>



							<div class="col-12 mb-3 image-upload-wrapper">
								<label for="aadhaar_number" class="form-label">Upload Aadhaar Back</label>
								<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
									<!-- <input type="file" class="imageInput form-control border-start-0" id="aadhaar_back_img" accept="image/*"> -->
									<input type="file" class="imageInput" accept="image/*">
								</div>
							</div>
							<div class="col-12 mb-3">
								<img class="imagePreview" src="" alt="Image Preview">
							</div>


							<div class="col-12 mb-3 image-upload-wrapper">
								<label for="aadhaar_number" class="form-label">Upload Aadhaar Back</label>
								<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
									<!-- <input type="file" class="imageInput form-control border-start-0" id="aadhaar_back_img" accept="image/*"> -->
									<input type="file" class="imageInput" accept="image/*">
								</div>
							</div>
							<div class="col-12 mb-3">
								<img class="imagePreview" src="" alt="Image Preview">
							</div>


							<!-- Add more input and preview pairs as needed -->



						</div>
					</div>
					<div class="col">
						right col
					</div>

				</div>


				<div class="">
					<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=bank_information" class="btn btn-light px-5 float-end" id="">Next</a>
				</div>

			</form>
		</div>
		<div class="row">

		</div>
	</div>
</div>