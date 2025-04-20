<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Multi-Step Form with Progress Bar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background: #f5f5f5;
    }

    form {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    .form-step {
      display: none;
    }

    .form-step.active {
      display: block;
    }

    input {
      display: block;
      width: 100%;
      margin: 10px 0;
      padding: 10px;
    }

    button {
      margin-top: 10px;
      padding: 10px 20px;
      cursor: pointer;
    }

    #progressContainer {
      margin-bottom: 20px;
      position: relative;
      width: 100%;
      height:50px;
    }

    progress {
      width: 100%;
      height: 10px;
      appearance: none;
      border-radius: 5px;
    }

    progress::-webkit-progress-bar {
      background-color: #f5f5f5;
      border-radius: 5px;
    }

    progress::-webkit-progress-value {
      background-color: blue;
      border-radius: 5px;
    }

    progress::-moz-progress-bar {
      background-color: #4caf50;
      border-radius: 5px;
    }

    #thumb {
      position: absolute;
      top: 7px;
      width: 30px;
      height: 30px;
      display: flex;
      justify-content: center;
      align-items: center;
      color: white;
      font-weight: bold;
      z-index: 2;
      border: 2px solid rgb(107, 18, 171);
    }

  </style>
</head>
<body>

<!-- Small Sized Card -->
<div class="card shadow-sm rounded-3 mt-4 m-2" style="max-width: 300px; background-color: #ffffff; border-left: 7px solid green !important;">
  <div class="card-header bg-light text-primary fw-semibold rounded-top-3 border-0 d-flex justify-content-between align-items-center" style="background-color: #f0faff !important; border-bottom: 1px solid green !important">
    <span>Coding</span>
    <span style="font-size:30px">👨🏽‍💻</span>
  </div>
  <div class="card-body">
    <p class="card-text">This is a small card with a clean and beautiful UI, featuring a soft shadow, transparent border, and rounded corners.</p>
  </div>
</div><div class="btn-group p-1 rounded-pill border-primary" style="background-color: #f0faff;" role="group" aria-label="Filter buttons">
    <button type="button" class="btn btn-sm rounded-pill m-1">All</button>
    <button type="button" class="btn btn-sm rounded-pill m-1">Prayers</button>
    <button type="button" class="btn btn-sm rounded-pill m-1">Coding</button>
    <button type="button" class="btn btn-sm rounded-pill m-1">Health</button>
    <button type="button" class="btn btn-sm rounded-pill m-1">Coding</button>
  </div>

  <!-- Small Sized Card -->
<div class="card shadow-sm rounded-3 mt-4 m-2" style="max-width: 300px; background-color: #ffffff; border-left: 7px solid green !important;">
  <div class="card-header bg-light text-primary fw-semibold rounded-top-3 border-0 d-flex justify-content-between align-items-center" style="background-color: #f0faff !important; border-bottom: 1px solid green !important">
    <span>Coding</span>
    <span style="font-size:30px">👨🏽‍💻</span>
  </div>
  <div class="card-body">
    <p class="card-text">This is a small card with a clean and beautiful UI, featuring a soft shadow, transparent border, and rounded corners.</p>
  </div>
</div>


  <form id="multiStepForm" class="card shadow rounded-2" style="max-width:1200px;">
    <div id="progressContainer" class="container-sm border rounded-pill p-1 d-flex align-items-center justify-content-center mt-3" style="background-color: #f0faff !important;">
      <progress id="progressBar" value="0" max="100"></progress>
      <div id="thumb" class="bg-primary text-light border rounded-pill">1</div>
    </div>

    <!-- Step 1 -->
    <div class="form-step active" style="height:500px !important; overflow-y:auto">
      <h2 class="card-header" style="background-color: #f0faff !important;">Step 1: Personal Info</h2>
      <!-- <hr> -->
      <div class="card-body">
        <!-- Name -->
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control rounded-pill" id="name" name="name" required>
        </div>
  
        <!-- Email -->
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control rounded-pill" id="email" name="email" required>
        </div>
  
        <!-- Contact Number -->
        <div class="mb-3">
          <label for="contact" class="form-label">Contact Number</label>
          <input type="phone" class="form-control rounded-pill" id="contact" name="contact" pattern="[0-9]{10,15}" required>
          <div class="form-text">Enter 10 to 15 digit phone number</div>
        </div>
      </div>
    </div>
    <!-- <div class="card-footer fixed">
      <button type="button" class="btn btn-primary next">Next</button>
    </diV> -->

    <!-- Step 2 -->
    <div class="form-step" style="height:500px !important; overflow-y:auto">
      <h2 class="card-header" style="background-color: #f0faff !important;">Step 1: Address Info</h2>
      <!-- <hr> -->
      <div class="card-body">
        <div class="mb-3">
          <label for="age" class="form-label">Age</label>
          <input type="number" class="form-control" id="age" name="age" min="1" max="120" required>
        </div>

        <!-- Gender -->
        <div class="mb-3">
          <label class="form-label">Gender</label>
          <select class="form-select" name="gender" required>
            <option value="">-- Select Gender --</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
          </select>
        </div>

        <!-- Weight -->
        <div class="mb-3">
          <label for="weight" class="form-label">Weight (kg)</label>
          <input type="number" class="form-control" id="weight" name="weight" min="1" required>
        </div>
      </div>
    </div>
    <!-- <div class="card-footer fixed">
      <button type="button" class="btn btn-primary prev">Previous</button>
      <button type="button" class="btn btn-primary next">Next</button>
    </diV> -->

    <div class="form-step" style="height:500px !important; overflow-y:auto">
      <h2 class="card-header" style="background-color: #f0faff !important;">Step 3: Select Interests</h2>
      <!-- <hr> -->
      <div class="card-body">
        <label class="form-label">50 Streak Interests</label>
        <div class="container px-0">
          <div class="row g-3 p-3">
              <!-- <hr> -->
              <?php
                  global $wpdb;
                  $table_name = $wpdb->prefix . 'user_interests';
                  // Fetch data
                  $results = $wpdb->get_results("SELECT * FROM $table_name", OBJECT);
                  foreach ($results as $row) {
                      echo '<div class="col-md-3 d-inline-flex align-items-center"><input class="form-check-input me-1" type="checkbox" id="s1"><label class="form-check-label small" for="s1">'.esc_html($row->name).'</label></div>';
                  }
              ?>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="card-footer fixed">
        <button type="button" class="btn btn-primary prev">Previous</button>
        <button type="button" class="btn btn-primary next">Next</button>
    </div> -->
    

    <!-- Step 4 -->
    <div class="form-step" style="height:500px !important; overflow-y:auto">
      <h2 class="card-header" style="background-color: #f0faff !important;">Step 4: Confirm</h2>
      <!-- <hr> -->
      <div class="card-body">
        <p class="card-title">Please confirm your details and submit the form.</p>
      </div>
    </div>
    <div class="card-footer d-inline-block" style="background-color: #f0faff !important;">
      <button type="button" id="next" class="btn btn-primary next">Next</button>
      <button type="button" id="prev" class="btn btn-primary prev">Previous</button>
      <button type="submit" id="confirm" class="btn btn-primary">Confirm</button>
    </div>
  </form>

  <script>
    const steps = document.querySelectorAll(".form-step");
    const nextBtns = document.querySelectorAll(".next");
    const nextBtn =document.getElementById("next");
    const prevBtns = document.querySelectorAll(".prev");
    const prevBtn =document.getElementById("prev");
    const progressBar = document.getElementById("progressBar");
    const confirmBtn =document.getElementById("confirm");
    const thumb = document.getElementById("thumb");

    let currentStep = 0;

    function updateProgressBar() {
      const progress = (currentStep / (steps.length - 1)) * 100;
      progressBar.value = progress;
      const thumbPosition = (currentStep / (steps.length - 1)) * 100;
      thumb.style.left = `calc(${thumbPosition}% - 15px)`; // Adjust thumb position
      thumb.textContent = currentStep + 1; // Display step number
    }

    updateProgressBar(); // Initialize progress bar
    getButtons();
    nextBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        steps[currentStep].classList.remove("active");
        currentStep++;
        steps[currentStep].classList.add("active");
        updateProgressBar();
        getButtons();
      });
    });

    prevBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        steps[currentStep].classList.remove("active");
        currentStep--;
        steps[currentStep].classList.add("active");;;
        updateProgressBar();
        getButtons();
      });
    });

    function getButtons(){
      console.log(currentStep);
    
      if(currentStep == 0){
          prevBtn.style.display = "none";
          confirmBtn.style.display = "none";
          nextBtn.style.display = "";
      }
      else if(currentStep == 3){
          confirmBtn.style.display = "";
          nextBtn.style.display = "none";
          prevBtn.style.display = "";
      }
      else if(currentStep > 0){
          prevBtn.style.display = "";
          confirmBtn.style.display = "none";
          nextBtn.style.display = "";
      }
    }

    

    jQuery(document).ready(function($) {
    // When form is submitted
    $("#multiStepForm").on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Collect form data including selected interests
        var selectedInterests = [];
        $("input[type=checkbox]:checked").each(function() {
            selectedInterests.push($(this).val());
        });

        // Collect other form data
        var formData = {
            name: $("#name").val(),
            email: $("#email").val(),
            contact: $("#contact").val(),
            age: $("#age").val(),
            gender: $("select[name='gender']").val(),
            weight: $("#weight").val(),
            interests: selectedInterests // Array of selected interests
        };

        // Send AJAX request to WordPress
        $.ajax({
            url: my_ajax_obj.ajax_url,
            type: 'POST',
            data: {
                action: 'save_user_data', // The action hook to call in WordPress
                form_data: formData // The form data to send
            },
            success: function(response) {
                // Handle the response (success or failure)
                if(response.success) {
                    alert('Data saved successfully!');
                } else {
                    alert('There was an error saving your data.');
                }
            }
        });
    });
});


 


  </script>

</body>
</html>

