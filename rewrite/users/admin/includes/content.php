<div class="page-wrapper">

	<div class="col">

		<div class="card border-top border-0 border-4 border-white">
			<div class="card-body p-5">
				<div class="card-title d-flex align-items-center">
					<div><i class="bx bxs-user me-1 font-22 text-white"></i>
					</div>
					<h5 class="mb-0 text-white">Basic Details</h5>
				</div>
				<hr>
				<form class="row g-3">
					<div class="col-md-6">
						<label for="full_name" class="form-label">Full Name</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-user"></i></span>
							<input type="text" class="form-control border-start-0" id="full_name"
								placeholder="Enter Your Name">
						</div>
					</div>
					<div class="col-md-6">
						<label for="shop_name" class="form-label">Shop Name</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bx-store"></i></span>
							<input type="text" class="form-control border-start-0" id="shop_name"
								placeholder="Enter Shop Name" value="Vinci Technologiess">
						</div>
					</div>
					<div class="col-md-6">
						<label for="profile_img" class="form-label">Profile Picture</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-id-card"></i></span>
							<input type="file" class="imageInput form-control border-start-0" id="profile_img"
								accept="image/*">

						</div>
					</div>
					<div class="col-12 mb-3">
						<img class="imagePreview" src="../../data/user_images/19_profile_img.png" alt="Image Preview">
					</div>

					<div class="card-title d-flex align-items-center pt-2">
						<div><i class="bx bxs-user me-1 font-22 text-white"></i>
						</div>
						<h5 class="mb-0 text-white">Contact Details</h5>
					</div>
					<hr>
					<div class="col-md-6">
						<label for="phone_number" class="form-label">Phone Number</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-phone"></i></span>
							<input type="text" class="form-control border-start-0" id="phone_number"
								placeholder="Phone No" value="8181000621">
						</div>
					</div>
					<div class="col-md-6">
						<label for="whatsapp" class="form-label">WhatsApp</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxl-whatsapp"></i></span>
							<input type="text" class="form-control border-start-0" id="whatsapp" placeholder="WhatsApp"
								value="9450750471">
						</div>
					</div>
					<div class="col-md-6">
						<label for="email" class="form-label">Email Address</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-envelope"></i></span>
							<input type="text" class="form-control border-start-0" id="email"
								placeholder="Email Address" value="ravi.arya009@gmail.com">
						</div>
					</div>

					<div class="col-12">
						<label for="address" class="form-label">Address</label>
						<textarea class="form-control" id="address" placeholder="Enter Address"
							rows="3">an 544 ka/58 balaganj lucknow</textarea>
					</div>


					<div class="col-md-6">
						<label for="state" class="form-label">State</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-buildings"></i></span>

							<select class="form-select" aria-label="Default select example" id="state">
								<option value="0">Select State</option>
								<option value="1">Andhra Pradesh</option>
								<option value="2">Arunachal Pradesh</option>
								<option value="3">Assam</option>
								<option value="4">Bihar</option>
								<option value="5">Chhattisgarh</option>
								<option value="6">Goa</option>
								<option value="7">Gujarat</option>
								<option value="8">Haryana</option>
								<option value="9">Himachal Pradesh</option>
								<option value="10">Jharkhand</option>
								<option value="11">Karnataka</option>
								<option value="12">Kerala</option>
								<option value="13">Madhya Pradesh</option>
								<option value="14">Maharashtra</option>
								<option value="15">Manipur</option>
								<option value="16">Meghalaya</option>
								<option value="17">Mizoram</option>
								<option value="18">Nagaland</option>
								<option value="19">Odisha</option>
								<option value="20">Punjab</option>
								<option value="21">Rajasthan</option>
								<option value="22">Sikkim</option>
								<option value="23">Tamil Nadu</option>
								<option value="24">Telangana</option>
								<option value="25">Tripura</option>
								<option value="26" selected="">Uttar Pradesh</option>
								<option value="27">Uttarakhand</option>
								<option value="28">West Bengal</option>
							</select>

						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="form-label">City</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-city"></i></span>
							<input type="text" class="form-control border-start-0" id="city" placeholder="City"
								value="lucknow">
						</div>
					</div>
					<div class="col-md-6">
						<label for="pincode" class="form-label">Pincode</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bx-buildings"></i></span>
							<input type="text" class="form-control border-start-0" id="pincode" placeholder="Pincode"
								value="226003">
						</div>
					</div>

					<div class="card-title d-flex align-items-center pt-2">
						<div><i class="bx bxs-user me-1 font-22 text-white"></i>
						</div>
						<h5 class="mb-0 text-white">Documents</h5>
					</div>
					<hr>

					<div class="row">
						<div class="col">
							<div class="row">
								<div class="col-12 mb-3">
									<label for="aadhaar_number" class="form-label">Aadhaar Number</label>
									<div class="input-group"> <span class="input-group-text"><i
												class="bx bxs-id-card"></i></span>
										<input type="text" class="form-control border-start-0" id="aadhaar_number"
											placeholder="Aadhaar Number" value="8878765654">
									</div>
								</div>

								<div class="col-12 mb-3">
									<label for="aadhaar_number" class="form-label">Upload Aadhaar Front</label>
									<div class="input-group"> <span class="input-group-text"><i
												class="bx bxs-id-card"></i></span>
										<input type="file" class="imageInput form-control border-start-0"
											id="aadhaar_front_img" accept="image/*">

									</div>
								</div>
								<div class="col-12 mb-3">
									<img class="imagePreview" src="../../data/user_images/19_aadhaar_front_img.jpg"
										alt="Image Preview">
								</div>

								<div class="col-12 mb-3">
									<label for="aadhaar_number" class="form-label">Upload Aadhaar Back</label>
									<div class="input-group"> <span class="input-group-text"><i
												class="bx bxs-id-card"></i></span>
										<input type="file" class="imageInput form-control border-start-0"
											id="aadhaar_back_img" accept="image/*">

									</div>
								</div>
								<div class="col-12 mb-3">
									<img class="imagePreview" src="../../data/user_images/19_aadhaar_back_img.png"
										alt="Image Preview">
								</div>
							</div>
						</div>
						<div class="col">
							<div class="row">
								<div class="col mb-3">
									<label for="pan_number" class="form-label">Pan Number</label>
									<div class="input-group"> <span class="input-group-text"><i
												class="bx bx-id-card"></i></span>
										<input type="text" class="form-control border-start-0" id="pan_number"
											placeholder="Pan Number" value="CLEPA1062H">
									</div>
								</div>

								<div class="col-12 mb-3 mb-3">
									<label for="aadhaar_number" class="form-label">Upload Pan Card</label>
									<div class="input-group"> <span class="input-group-text"><i
												class="bx bxs-id-card"></i></span>
										<input type="file" class="imageInput form-control border-start-0" id="pan_img"
											accept="image/*">

									</div>
								</div>
								<div class="col-12">
									<img class="imagePreview" src="../../data/user_images/19_pan_img.jpg"
										alt="Image Preview">
								</div>

							</div>
						</div>
					</div>






					<div class="card-title d-flex align-items-center pt-2">
						<div><i class="bx bxs-user me-1 font-22 text-white"></i>
						</div>
						<h5 class="mb-0 text-white">Bank Details</h5>
					</div>
					<hr>

					<div class="col-md-6">
						<label for="benificiary_name" class="form-label">Benificiary Name</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bx-list-check"></i></span>
							<input type="text" class="form-control border-start-0" id="benificiary_name"
								placeholder="Benificiary Name" value="Shyam Gupta">
						</div>
					</div>
					<div class="col-md-6">
						<label for="benificiary_account_number" class="form-label">Benificiary Account Number</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bx-list-check"></i></span>
							<input type="text" class="form-control border-start-0" id="benificiary_account_number"
								placeholder="Benificiary Account Number" value="778765654543">
						</div>
					</div>
					<div class="col-md-6">
						<label for="bank_name" class="form-label">Bank Name</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bxs-bank"></i></span>
							<input type="text" class="form-control border-start-0" id="bank_name"
								placeholder="Bank Name" value="State Bank Of India">
						</div>
					</div>
					<div class="col-md-6">
						<label for="ifsc" class="form-label">IFSC Code</label>
						<div class="input-group"> <span class="input-group-text"><i class="bx bx-list-check"></i></span>
							<input type="text" class="form-control border-start-0" id="ifsc" placeholder="IFSC Code"
								value="SBIIN0068">
						</div>
					</div>

				</form>
				<div class="col-12">
					<button id="update_profile" class="btn btn-light px-5 float-end mt-3">Save</button>
				</div>
			</div>
		</div>
	</div>
</div>