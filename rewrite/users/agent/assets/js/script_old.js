$("#login_button").on("click", function () {
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
      url: "functions/index.php",
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

$("#register").on("click", function () {
  agent_object = {};
  agent_object["full_name"] = $("#full_name").val();
  agent_object["shop_name"] = $("#shop_name").val();
  agent_object["phone_number"] = $("#phone_number").val();
  agent_object["whatsapp"] = $("#whatsapp").val();
  agent_object["email"] = $("#email").val();
  agent_object["address"] = $("#address").val();
  agent_object["state"] = $("#state").val();
  agent_object["city"] = $("#city").val();
  agent_object["pincode"] = $("#pincode").val();
  agent_object["aadhaar_number"] = $("#aadhaar_number").val();
  agent_object["pan_number"] = $("#pan_number").val();

  agent_object["benificiary_name"] = $("#benificiary_name").val();
  agent_object["benificiary_account_number"] = $(
    "#benificiary_account_number"
  ).val();
  agent_object["bank_name"] = $("#bank_name").val();

  agent_object["ifsc"] = $("#ifsc").val();

  $.ajax({
    type: "POST",
    url: "functions/index.php",
    data: { agent_object: agent_object, register: 1 },
    success: function (result) {
      console.log(result);
      if (result == 1) {
        Swal.fire({
          icon: "success",
          title: "Done",
          text: "New Channel Partner added succesfully",
        });
      }
    },
  });
});

$("#submit_order").on("click", function () {
  var has_errors = 0;
  var customer_name = $("#customer_name").val();
  var customer_mobile = $("#customer_mobile").val();
  if (customer_name == "" || customer_mobile == "") {
    var has_errors = 1;
  }

  var num_images = $(".filepond--image-preview-wrapper").length;
  if (num_images == 0) {
    has_errors = 1;
  }

  var order_object = {};

  order_object["img_array"] = img_array;
  order_object["customer_name"] = customer_name;
  order_object["customer_mobile"] = customer_mobile;
  order_object["service_id"] = service_id;
  order_object["agent_id"] = agent_id;

  if (has_errors == 0) {
    console.log(order_object);
    $.ajax({
      type: "POST",
      url: "functions/index.php",
      data: { order_object: order_object },
      success: function (result) {
        console.log(result);
        result = JSON.parse(result);

        if (result["status"] == 1) {
          order_id = result["order_id"];
          Swal.fire("Done", "Order successful", "success").then(function () {
            window.location = "view_order.php?id=" + order_id;
          });
        } else {
          Swal.fire("Error", "Something went wrong", "error");
        }
      },
    });
  } else {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Please fill all the fields",
    });
  }
});

$("#send_otp").on("click", function () {
  var mobile = $("#mobile").val();
  window.location.href =
    "2.php?service_name=Ledging%20Kart&service_id=17&mobiles=" + mobile;
});

function sendOTP(mobile) {
  var configuration = {
    widgetId: "336742734d74313537343733",
    tokenAuth: "318780T4lDs2qroy7r64c3cc40P1",
    identifier: "+91" + mobile,
    // exposeMethods: "<true | false> (optional)",
    success: (data) => {
      console.log("success response", data);
      window.location.href = "2.php";
    },
    failure: (error) => {
      console.log("failure reason", error);
    },
  };

  // Initialize OTP send on button click
  initSendOTP(configuration);
}

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

//register
$("#update_profile").on("click", function () {
  agent_object = {};
  agent_object["full_name"] = $("#full_name").val();
  agent_object["shop_name"] = $("#shop_name").val();
  agent_object["phone_number"] = $("#phone_number").val();
  agent_object["whatsapp"] = $("#whatsapp").val();
  agent_object["email"] = $("#email").val();
  agent_object["address"] = $("#address").val();
  agent_object["state"] = $("#state").val();
  agent_object["city"] = $("#city").val();
  agent_object["pincode"] = $("#pincode").val();
  agent_object["aadhaar_number"] = $("#aadhaar_number").val();
  agent_object["pan_number"] = $("#pan_number").val();
  agent_object["dob"] = $("#dob").val();

  agent_object["benificiary_name"] = $("#benificiary_name").val();
  agent_object["benificiary_account_number"] = $(
    "#benificiary_account_number"
  ).val();
  agent_object["bank_name"] = $("#bank_name").val();

  agent_object["ifsc"] = $("#ifsc").val();

  var aadhaarFrontFile = $("#aadhaar_front_img")[0].files[0];
  var aadhaarBackFile = $("#aadhaar_back_img")[0].files[0];
  var panCardFile = $("#pan_img")[0].files[0];
  var profileImgFile = $("#profile_img")[0].files[0];
  // ... (get other image files)

  // Create a new FormData object
  var formData = new FormData();

  // Append text input data to FormData
  formData.append("agent_object", JSON.stringify(agent_object));

  // Append image files to FormData
  formData.append("aadhaar_front_img", aadhaarFrontFile);
  formData.append("aadhaar_back_img", aadhaarBackFile);
  formData.append("pan_img", panCardFile);
  formData.append("profile_img", profileImgFile);

  formData.append("update_profile", 1);

  $.ajax({
    type: "POST",
    url: "functions/index.php",
    data: formData,
    processData: false,
    contentType: false,
    success: function (result) {
      console.log(result);
      if (result == 1) {
        Swal.fire({
          icon: "success",
          title: "Done",
          text: "New Channel Partner added succesfully",
        });
      }
    },
  });
});
