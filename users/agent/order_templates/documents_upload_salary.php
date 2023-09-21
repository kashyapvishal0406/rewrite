<?php
include('includes/docs_to_upload.php');
$docs_to_upload = $required_documents[$service_id]['salary'];
?>
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
				<?php
				foreach ($docs_to_upload as $value) {
					?>
					<div class="col-md-6">
						<div class="image-upload-wrapper">
							<label for="aadhaar_number" class="form-label"><?php echo $value; ?></label>
							<div class="input-group">
								<span class="input-group-text"><i class='bx bxs-id-card'></i></span>
								<input type="file" class="imageInput form-control border-start-0" accept="image/*">
							</div>
							<img class="imagePreview" src="" alt="Image Preview">
						</div>
					</div>
				<?php } ?>

				<div class="col-12">
					<a href="order_form.php?service_name=<?php echo $service_name; ?>&service_id=<?php echo $service_id; ?>&page=bank_information" class="btn btn-light px-5 float-end" id="">Next</a>
				</div>
			</form>

		</div>
		<div class="row">

		</div>
	</div>
</div>