<!-- Bootstrap 4.0.0 -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- JQuery 1.11.1 -->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<!-- Dynamic Select Dropdown JS -->
<script src="dynamic-select-dropdown.js"></script>

<!-- Include the above in your HEAD tag -->

<div class="row">
  <div class="col-md-6 mb-3">
  	<label for="validationCustom03">Category:</label>
      <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
        <option value="">Choose... </option>
        <option value="Classroom Instruction and Assessment">Classroom Instruction and Assessment</option>
        <option value="Curriculum Development and Alignment">Curriculum Development and Alignment</option>
        <option value="District Committee">District Committee</option>
        <option value="Meeting">Meeting</option>
        <option value="Other Category">Other Category</option>
        <option value="Professional Conference">Professional Conference</option>
        <option value="Professional Workshop / Training">Professional Workshop / Training</option>
        <option value="Pupil Services">Pupil Services</option>
      </select>
	<div class="invalid-feedback">
		Please provide a category.
	</div>
  </div>
  <div class="col-md-6 mb-3">
  	<label for="validationCustom04">Activity:</label>
     <select class="form-control form-control-lg" id="validationCustom04" name="activity" required></select>
    <div class="invalid-feedback">
		Please provide an activity.
	</div>
  </div>
</div>
