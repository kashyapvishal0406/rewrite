<div class="col">
	<div class="card border-top border-0 border-4 border-white">
		<div class="card-body p-5">
			<div class="card-title d-flex align-items-center">
				<div><i class="bx bxs-user me-1 font-22 text-white"></i>
				</div>
				<h5 class="mb-0 text-white">Bank Information</h5>
			</div>
			<hr>
			<form class="row g-3">
				<div class="col-md-6">
					<label for="inputFirstName" class="form-label">Bank's Name</label>
					<input type="text" class="form-control" id="inputFirstName">
				</div>
				<div class="col-md-6">
					<label for="inputLastName" class="form-label">Account Number</label>
					<input type="text" class="form-control" id="inputLastName">
				</div>
				<div class="col-md-6">
					<label for="inputLastName" class="form-label">IFSC Code</label>
					<input type="text" class="form-control" id="inputLastName">
				</div>
				<div class="col-md-6">
					<label for="inputLastName" class="form-label">Account Holder's name</label>
					<input type="text" class="form-control" id="inputLastName">
				</div>
				
				<div class="row">
					<div class="col-md-6">
						<div class="row mt-3">
							<div class="col-13 mb-3">
								<label for="aadhaar_number" class="form-label">Bank Statement</label>
								<div class="input-group"> <span class="input-group-text"><i class='bx bxs-id-card'></i></span>
									<input type="file" class="imageInput form-control border-start-0" id="pan_img" accept="image/*">

								</div>
							</div>
							<div class="col-12">
								<?php if (!empty($agent_details['pan_img'])): ?>
									<img class="imagePreview" src="<?php echo "../../data/user_images/" . $agent_details['pan_img']; ?>" alt="Image Preview">
								<?php else: ?>
									<img class="imagePreview" src="" alt="Image Preview" style="display: none;">
								<?php endif; ?>
							</div>
						</div>
					</div>
					<div class="col-12">
				<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=success" class="btn btn-light px-5 float-end" id="">Next</a>
			</div>
				</div>
			</form>

		</div>
		<div class="row">

		</div>
	</div>
</div>