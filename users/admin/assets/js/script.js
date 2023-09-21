$(function () {
  //preview image
  const imageWrappers = document.querySelectorAll(".image-upload-wrapper");
  imageWrappers.forEach((wrapper) => {
    const input = wrapper.querySelector(".imageInput");
    const preview = wrapper.querySelector(".imagePreview");

    input.addEventListener("change", function () {
      const selectedFile = input.files[0];

      if (selectedFile) {
        const reader = new FileReader();

        reader.onload = function (event) {
          preview.src = event.target.result;
        };

        reader.readAsDataURL(selectedFile);
        preview.style.display = "block"; // Show the preview
      } else {
        preview.src = "";
        preview.style.display = "none"; // Hide the preview
      }
    });
  });

  //add rm
  $("#save").on("click", function () {
    var error = 0;
    add_objcet = {};
    var password = $("#pass").val();
    var full_name = $("#name").val();
    var phone = $("#phone_number").val();
    var profileImgFile = $("#profile_img")[0].files[0];
    console.log(profileImgFile);

    if (password == '' || full_name =='' || phone == '' || profileImgFile == undefined)
    {
      error = 1;
     }
      add_objcet["pass"] = $("#pass").val();
    add_objcet["shop_name"] = $("#shop_name").val();
    add_objcet["name"] = $("#name").val();
    add_objcet["phone_number"] = $("#phone_number").val();
    add_objcet["whatsapp"] = $("#whatsapp").val();
    add_objcet["email"] = $("#email").val();
    add_objcet["address"] = $("#address").val();
    add_objcet["state"] = $("#state").val();
    add_objcet["city"] = $("#city").val();
    add_objcet["pincode"] = $("#pincode").val();
    add_objcet["dob"] = $("#dob").val();
    add_objcet["aadhaar_number"] = $("#aadhaar_number").val();
    add_objcet["pan_number"] = $("#pan_number").val();
    add_objcet["benificiary_name"] = $("#benificiary_name").val();
    add_objcet["benificiary_account_number"] = $(
      "#benificiary_account_number"
    ).val();
    add_objcet["bank_name"] = $("#bank_name").val();

    add_objcet["ifsc"] = $("#ifsc").val();

    var aadhaarFrontFile = $("#aadhaar_front_img")[0].files[0];
    var aadhaarBackFile = $("#aadhaar_back_img")[0].files[0];
    var panCardFile = $("#pan_img")[0].files[0];
    var profileImgFile = $("#profile_img")[0].files[0];

    // Create a new FormData object
    var formData = new FormData();

    // Append text input data to FormData
    formData.append("add_objcet", JSON.stringify(add_objcet));

    // Append image files to FormData
    formData.append("aadhaar_front_img", aadhaarFrontFile);
    formData.append("aadhaar_back_img", aadhaarBackFile);
    formData.append("pan_img", panCardFile);
    formData.append("profile_img", profileImgFile);

    formData.append("save", 1);

    if (error == 0)
    {
      $.ajax({
        type: "POST",
        url: "function/index.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
          console.log(result);
          if (result == 1) {
            Swal.fire({
              icon: "success",
              title: "Done",
              text: "New  Channel Partner added succesfully",
            });
          }
          else {
            Swal.fire({
              icon: "error",
              title: "Attention",
              text: "Mobile Number   already exits",
            });
          }
        },
      });
    }
    else {
      Swal.fire({
        icon: "error",
        title: "Attention",
        text: "Please fill the required fields",
      });
    }
    
  });

  //update
  $("#update").on("click", function () {
    add_objcet = {};

    add_objcet["pass"] = $("#pass").val();

    add_objcet["shop_name"] = $("#shop_name").val();
    add_objcet["name"] = $("#name").val();
    add_objcet["phone_number"] = $("#phone_number").val();
    add_objcet["whatsapp"] = $("#whatsapp").val();
    add_objcet["email"] = $("#email").val();
    add_objcet["address"] = $("#address").val();
    add_objcet["state"] = $("#state").val();
    add_objcet["city"] = $("#city").val();
    add_objcet["pincode"] = $("#pincode").val();
    add_objcet["dob"] = $("#dob").val();
    add_objcet["aadhaar_number"] = $("#aadhaar_number").val();
    add_objcet["pan_number"] = $("#pan_number").val();
    add_objcet["benificiary_name"] = $("#benificiary_name").val();
    add_objcet["benificiary_account_number"] = $(
      "#benificiary_account_number"
    ).val();
    add_objcet["bank_name"] = $("#bank_name").val();

    add_objcet["ifsc"] = $("#ifsc").val();
    add_objcet["id"] = agent_id;

    var aadhaarFrontFile = $("#aadhaar_front_img")[0].files[0];
    var aadhaarBackFile = $("#aadhaar_back_img")[0].files[0];
    var panCardFile = $("#pan_img")[0].files[0];
    var profileImgFile = $("#profile_img")[0].files[0];

    // Create a new FormData object
    var formData = new FormData();

    // Append text input data to FormData
    formData.append("add_objcet", JSON.stringify(add_objcet));

    // Append image files to FormData
    formData.append("aadhaar_front_img", aadhaarFrontFile);
    formData.append("aadhaar_back_img", aadhaarBackFile);
    formData.append("pan_img", panCardFile);
    formData.append("profile_img", profileImgFile);

    formData.append("update", 1);

    $.ajax({
      type: "POST",
      url: "function/index.php",
      data: formData,
      processData: false,
      contentType: false,
      success: function (result) {
        console.log(result);
        if (result == 1) {
          Swal.fire({
            icon: "success",
            title: "Done",
            text: "Profile Updated succesfully",
          });
        }
      },
    });
  });

  //login
  $("#login_admin_button").on("click", function () {
    var has_errors = 0;
    if ($("#LoginMobile").val() == "" || $("#LoginPassword").val() == "") {
      has_errors = 1;
      Swal.fire({
        icon: "error",
        title: "Error",
        text: "Please fill all the fields",
      });
    }

    if (has_errors == 0) {
      var mobile = $("#LoginMobile").val();
      var password = $("#LoginPassword").val();

      $.ajax({
        type: "POST",
        url: "function/index.php",
        data: { mobile: mobile, password: password, login: 1 },
        success: function (result) {
          console.log(result);
          if (result == 1) {
            window.location.href = "index.php";
            console.log("logged in");
            // set session
          } else {
            Swal.fire({
              icon: "error",
              title: "Error",
              text: "Incorrect Mobile or Password",
            });
          }
        },
      });
    }
  });

  $("#status").on("change", function () {
    var status = $(this).val();
    var agent_id = $(this).data("agent-id");

    $.ajax({
      type: "POST",
      url: "function/index.php",
      data: { status: status, agent_id: agent_id, update_status: 1 },
      success: function (result) {
        // console.log(result);
        if (result == 1) {
          Swal.fire({
            icon: "success",
            title: "Done",
            text: "Status changed succesfully",
          });
        }
      },
    });
  });

  $(".lead_done").on('click', function () {
    var lead_id = $(this).data("lead-id");
     $.ajax({
       type: "POST",
       url: "function/lead.php",
       data: { lead_id: lead_id, lead_done: 1 },
       success: function (result) {
         console.log(result);
         if (result == 1) {
           location.reload();
         }
       },
     });
    
  });
});
