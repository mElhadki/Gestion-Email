<div class="form-group">
 <label>Enter Employee C_origine</label>
 <input type="text" name="C_origine" id="C_origine" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Employee Email</label>
 <input type="text" name="Email" id="Email" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Employee First_name</label>
 <input type="text" name="First_name" id="First_name" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Employee Last_name</label>
 <input type="text" name="Last_name" id="Last_name" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Employee Middle_Name</label>
 <input type="text" name="Middle_Name" id="Middle_Name" class="form-control" />
</div>
<div class="form-group">
 <label>Enter Employee Phone_Number</label>
 <input type="text" name="Phone_Number" id="Phone_Number" class="form-control" />
</div>
<div class="form-group">
 <label>Select Employee Image</label>
 <input type="file" name="images" id="images" />
 <span id="uploaded_image"></span>
 <input type="hidden" name="hidden_images" id="hidden_images" />
</div>

<script>
 $(document).ready(function () {

  var C_origine = localStorage.getItem('C_origine');
  var Email = localStorage.getItem('Email');
  var First_name = localStorage.getItem('First_name');
  var Last_name = localStorage.getItem('Last_name');
  var Middle_Name = localStorage.getItem('Middle_Name');
  var Phone_Number = localStorage.getItem('Phone_Number');
  var images = localStorage.getItem('images');

  $('#C_origine').val(name);
  $('#Email').val(address);
  $('#First_name').val(gender);
  $('#Last_name').val(designation);
  $('#Middle_Name').val(Middle_Name);
     $('#Phone_Number').val(Phone_Number);

  if(images != '')
  {
   $('#uploaded_image').html('<img src="images/'+images+'" class="img-thumbnail" width="100" />');
   $('#hidden_images').val(images);
  }

 });
</script>
