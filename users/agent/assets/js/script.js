$(function () {
  //OTP Function
  // function sendOTP() {
  //   var configuration = {
  //     widgetId: "336742734d74313537343733",
  //     tokenAuth: "318780T4lDs2qroy7r64c3cc40P1",
  //     identifier: "+917317700881", //dynamic banao saale ko
  //     // exposeMethods: "<true | false> (optional)",
  //     success: (data) => {
  //       console.log("success response", data);
  //     },
  //     failure: (error) => {
  //       console.log("failure reason", error);
  //     },
  //   };

  //   // Initialize OTP send on button click
  //   initSendOTP(configuration);
  // }
  //OTP Function

  ///preview image
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
  ///preview image

  ////
  // $("#login_otp_button").on("click", function () {
  //   console.log("login button clicked");
  //   var has_errors = 0;
  //   if ($("#LoginMobile").val() == "" || $("#LoginPassword").val() == "") {
  //     has_errors = 1;
  //     Swal.fire({
  //       icon: "error",
  //       title: "Error",
  //       text: "Please fill all the fields",
  //     });
  //   }

  //   if (has_errors == 0) {
  //     var mobile = $("#LoginMobile").val();
  //     var password = $("#LoginPassword").val();

  //     $.ajax({
  //       type: "POST",
  //       url: "functions/index.php",
  //       data: { mobile: mobile, password: password, login: 1 },
  //       success: function (result) {
  //         console.log(result);
  //         if (result == 1) {
  //           sendOTP();
  //           //otp
  //           //check otp
  //           //true: redirect

  //           $("#login__otp_button").on("click", function () {});
  //         }
  //       },
  //     });
  //   }
  // });

  //document starts

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

  // $("#send_otp").on("click", function () {
  //   var mobile = $("#mobile").val();
  //   window.location.href =
  //     "2.php?service_name=Ledging%20Kart&service_id=17&mobiles=" + mobile;
  // });

  // function sendOTP(mobile) {
  //   var configuration = {
  //     widgetId: "336742734d74313537343733",
  //     tokenAuth: "318780T4lDs2qroy7r64c3cc40P1",
  //     identifier: "+91" + mobile,
  //     // exposeMethods: "<true | false> (optional)",
  //     success: (data) => {
  //       console.log("success response", data);
  //       window.location.href = "2.php";
  //     },
  //     failure: (error) => {
  //       console.log("failure reason", error);
  //     },
  //   };

  //   // Initialize OTP send on button click
  //   initSendOTP(configuration);
  // }

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
            text: "Profile Completed",
          });
        }
      },
    });
  });

  $(".buy_fields_next").on("click", function () {
    var error = 0;
    var fieldObject = {}; // Create an empty object to store key-value pairs

    var service_id = $(this).data("service-id");
    var service_name = $(this).data("service-name");

    fieldObject["service_id"] = service_id;
    fieldObject["service_name"] = service_name;

    var dataObject = {}; // Create an empty object to store the "data" key-value pairs

    $(".service_input_field").each(function () {
      var single_field = $(this).val();
      var fieldName = $(this).data("field-name"); // Get the data-field-name attribute value
      if (single_field !== "") {
        dataObject[fieldName] = single_field; // Assign the key-value pair to the dataObject
      } else {
        Swal.fire("Attention", "Please Fill all the fields", "error");
        error = 1;
      }
    });

    fieldObject["data"] = dataObject; // Add the "data" object to the main object

    console.log(fieldObject);

    var fieldObjectJSON = JSON.stringify(fieldObject);

    if (error == 0) {
      window.location.href =
        "buy_page_docs.php?fieldObject=" + encodeURIComponent(fieldObjectJSON);
    }
  });

  $(".buy_docs_next").on("click", function () {
    var error = 0;
    var formData = new FormData();
    formData.append("my_order_object", JSON.stringify(fieldObject));

    $(".service_docs_field").each(function () {
      var image_file = $(this)[0].files[0];
      var document_name = $(this).data("document-name");

      if (image_file && image_file.size > 0) {
        formData.append(document_name, image_file);
      } else {
        error = 1;
        Swal.fire("Attention", "Please Fill all the fields", "error");
      }
    });
    formData.append("add_order", 1);
    console.log(formData);
    if (error == 0) {
      $.ajax({
        type: "POST",
        url: "functions/index.php",
        data: formData,
        processData: false,
        contentType: false,
        success: function (result) {
          console.log(result);
          if (result.status == 1) {
            var order_id = result.order_id;
            window.location.href =
              "buy_page_pay.php?order_id=" +
              order_id +
              "&service_name=" +
              service_name;
          }
        },
      });
    }
  });

  $(".buy_pay_submit").on("click", function () {
    var order_id = $(this).data("order-id");
    var formData = new FormData();
    var image_file = $("#payment_proof")[0].files[0];
    formData.append("payment_proof", image_file);
    formData.append("order_payment", 1);
    formData.append("order_id", order_id);

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
            title: "Order Successful",
            text: "You can view this order in Order Center",
            icon: "success",
            showCancelButton: false,
            confirmButtonText: "OK",
          }).then((result) => {
            if (result.isConfirmed) {
              // Redirect the user to another page
              window.location.href = "orders.php"; // Replace with the actual page URL
            }
          });
        } else {
          Swal.fire(
            "Order Saved",
            "Your Order won't process untill you make payment",
            "warning"
          );
        }
      },
    });
  });

  $(".fake_button").on("click", function () {
    let error = 0; // Initialize error to 0

    // Get all input elements on the page
    const inputElements = document.querySelectorAll("input");

    // Iterate through input elements
    for (const inputElement of inputElements) {
      // Check if the input element is empty or has no value
      if (inputElement.type === "file") {
        // For file inputs, check if a file has been selected
        if (inputElement.files.length === 0) {
          error = 1;
          break; // Exit the loop as soon as an empty file input is found
        }
      } else if (inputElement.value.trim() === "") {
        // For non-file inputs, check if the value is empty
        error = 1;
        break; // Exit the loop as soon as an empty field is found
      }
    }

    if (error === 1) {
      Swal.fire("Attention", "Please Fill all the fields", "error");
    } else {
      var location = $(this).data("href");
      window.location.href = location;
    }
  });

  $(".order_next_button_old").on("click", function () {
    var details_object = {}; // Object to store all field values
    var document_object = {}; // Object to store image inputs
    var page_object = {}; //object to

    $(".order_input_field").each(function () {
      var elementType = $(this).attr("type");
      var fieldName = $(this).attr("data-column-name"); // Get the 'data-column-name' attribute

      if (elementType === "file") {
        var fileInput = $(this)[0]; // Get the DOM element
        if (fileInput.files.length > 0) {
          var file = fileInput.files[0];
          document_object[fieldName] = file; // Store the File object in document_object
        }
      } else {
        details_object[fieldName] = $(this).val(); // Store text input values in details_object
      }
    });

    // Put details_object and document_object inside order_object
    var formData = new FormData();

    page_object["details"] = details_object;
    page_object["documents"] = document_object;
    page_object["page_name"] = page_name;
    formData.append("current_page", page_object);
    formData.append("loan_order_object", 1);
    order_object[current_page] = page_object;
    console.log(formData);
    next_page = current_page + 1;

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

  $(".order_next_button, .order_submit_button").on("click", function () {
    var button_type = $(this).text();
    var error = 0;
    var order_object = {};
    var details = {}; // Object to store image inputs
    var images = {}; // Object to store image inputs

    var formData = new FormData();

    $(".order_input_field").each(function () {
      var element_type = $(this).attr("type");
      var key_name = $(this).attr("id");
      if (element_type === "file") {
        // Get the original file
        var fileInput = $(this)[0];
        if (fileInput.files.length > 0) {
          var originalFile = fileInput.files[0];

          // Extract the original filename and extension
          var originalFilename = originalFile.name;
          var originalExtension = originalFilename.split(".").pop();

          // Generate a new random filename with the same extension
          var newRandomName = Math.random().toString(36).substring(2, 10); // Generates a random string of length 8
          var newFilename = newRandomName + "." + originalExtension;

          // Create a new File object with the desired name
          var file = new File([originalFile], newFilename, {
            type: originalFile.type,
          });
          images[key_name] = newFilename;
          formData.append(key_name, file);
        } else {
          var x = 1;
          error = 1;
          Swal.fire("Attention", "Please Fill all the fields", "error");
        }
      } else {
        var single_field = $(this).val();
        if (single_field !== "") {
          details[key_name] = $(this).val(); //key:value
        } else {
          Swal.fire("Attention", "Please Fill all the fields", "error");
          error = 1;
        }
      }
    });

    order_object["images"] = images;
    order_object["details"] = details;
    order_object["service_id"] = service_id;
    order_object["agent_id"] = agent_id;
    order_object["order_id"] = order_id;
    formData.append("loan_order_object", JSON.stringify(order_object));
    console.log(order_object);
    $.ajax({
      type: "POST",
      url: "functions/index.php",
      data: formData,
      processData: false,
      contentType: false,
      dataType: "json", // Specify the expected data type

      success: function (result) {
        console.log(result);
        if (result.status == 1) {
          order_id = result.order_id;
          console.log(order_id);
        } else {
          error = 1;
        }

        ///

        if (error == 0) {
          console.log(order_id);
          if (button_type == "Submit") {
            Swal.fire({
              title: "Order Successful",
              text: "You can view this order in Order Center",
              icon: "success",
              showCancelButton: false,
              confirmButtonText: "OK",
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirect the user to another page
                window.location.href = "orders.php"; // Replace with the actual page URL
              }
            });
          } else {
            url =
              "order.php?page=" +
              next_page +
              "&service_id=" +
              service_id +
              "&order_id=" +
              order_id;
          }

          window.location.href = url;
        }
      },
    });
  });

  $(".link_order_button").on("click", function () {
    var error = 0;
    var link_order_details = {};

    $(".order_input_field").each(function () {
      var element_type = $(this).attr("type");
      var key_name = $(this).attr("id");
      var single_field = $(this).val();
      if (single_field !== "") {
        link_order_details[key_name] = $(this).val(); //key:value
      } else {
        Swal.fire("Attention", "Please Fill all the fields", "error");
        error = 1;
      }
    });
    link_order_details["service_id"] = service_id;
    link_order_details["agent_id"] = agent_id;
    link_order_details["vendor_name"] = vendor_name;

    if (error == 0) {
      $.ajax({
        type: "POST",
        url: "functions/index.php",
        data: {
          link_order_details: link_order_details,
          link_order: 1,
        },
        success: function (result) {
          console.log(result);
          if (result == 1) {
            window.location = vendor_link;
            

          }
        },
      });
    }
  });
  //end of script
});
