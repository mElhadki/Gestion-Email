<html>
 <head>
  <title>Mis A Jour</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://www.jqueryscript.net/demo/Dialog-Modal-Dialogify/dist/dialogify.min.js"></script>
 </head>
 <body>
  <div class="container">
   <br />
   <h3 align="center">Mis A Jour </h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Employee Data</h3>
      </div>
  <!--     <div class="col-md-6" align="right">
    <button type="button" name="add_data" id="add_data" class="btn btn-success btn-xs">Add</button> 
      </div> -->
     </div>
    </div>
    <div class="panel-body">
     <div class="table-responsive">
      <span id="form_response"></span>
      <table id="user_data" class="table table-bordered table-striped">
       <thead>
        <tr>
         <td>Email</td>
         <td>Ferst</td>
         <td>Last</td>
         <td>Middle_name</td>
        <td>Edit</td>
        </tr>
       </thead>
      </table>      
     </div>
    </div>
   </div>
  </div>
 </body>
</html>
<!--   -->
<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 var dataTable = $('#user_data').DataTable({
  "processing":true,
  "serverSide":true,
  "order":[],
  "ajax":{
   url:"fetch.php",
   type:"POST"
  },
  "columnDefs":[
   {
    "targets":[4],
    "orderable":false,},], }); 
    
/*
$(document).on('click', '.view', function(){
  var id = $(this).attr('id');
  var options = {
   ajaxPrefix: '',
   ajaxData: {id:id},
   ajaxComplete:function(){
    this.buttons([{
     type: Dialogify.BUTTON_PRIMARY
    }]);
   }
  };
  new Dialogify('fetch_single.php', options)
   .title('View Employee Details')
   .showModal();
 });*/
 /*
 $('#add_data').click(function(){
  var options = {
   ajaxPrefix:''
  };
  new Dialogify('add_data_form.php', options)
   .title('Add New Employee Data')
   .buttons([
    {
     text:'Cancle',
     click:function(e){
      this.close();
     }
    },
    {
     text:'Insert',
     type:Dialogify.BUTTON_PRIMARY,
     click:function(e)
     {
      var image_data = $('#images').prop("files")[0];
      var form_data = new FormData();
      form_data.append('images', image_data);
      form_data.append('Email', $('#Email').val());
      form_data.append('Ferst', $('#Ferst').val());
      form_data.append('Last', $('#Last').val());
      form_data.append('Fonction', $('#Fonction').val());
      form_data.append('Phonne', $('#Phonne').val());
      $.ajax({
       method:"POST",
       url:'insert_data.php',
       data:form_data,
       dataType:'json',
       contentType:false,
       cache:false,
       processData:false,
       success:function(data)
       {
        if(data.error != '')
        {
         $('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
        }
        else
        {
         $('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
         dataTable.ajax.reload();
        }
       }
      });
     }
    }
   ]).showModal();
 });*/
 $(document).on('click', '.update', function(){
  var id = $(this).attr('id');
  $.ajax({
   url:"fetch_single_data.php",
   method:"POST",
   data:{id:id},
   dataType:'json',
   success:function(data)
   {
    localStorage.setItem('C_origine', data[0].C_origine);
    localStorage.setItem('Email', data[0].Email);
    localStorage.setItem('First_name', data[0].First_name);
    localStorage.setItem('Last_name', data[0].Last_name);
    localStorage.setItem('Middle_name', data[0].Middle_name);
       localStorage.setItem('Fonction', data[0].Fonction);
       localStorage.setItem('Phone_Number', data[0].Phone_Number);
       localStorage.setItem('Company', data[0].Company);
       localStorage.setItem('Country', data[0].Country);
       localStorage.setItem('Interested', data[0].Interested);
       localStorage.setItem('Source', data[0].Interested);
    localStorage.setItem('images', data[0].images);

    var options = {
     ajaxPrefix:''
    };
    new Dialogify('edit_data_form.php', options)
     .title('Edit Employee Data')
     .buttons([
      {
       text:'Cancle',
       click:function(e){
        this.close();
       }
      },
      {
       text:'Edit',
       type:Dialogify.BUTTON_PRIMARY,
       click:function(e)
       {
        var image_data = $('#images').prop("files")[0];
        var form_data = new FormData();
        form_data.append('images', image_data);
        form_data.append('C_origine', $('#C_origine').val());
        form_data.append('Email', $('#Email').val());
        form_data.append('First_name', $('#First_name').val());
        form_data.append('Last_name', $('#Last_name').val());
        form_data.append('Middle_name', $('#Middle_name').val());
           form_data.append('Fonction', $('#Fonction').val());
           form_data.append('Phone_Number', $('#Phone_Number').val());
           form_data.append('Company', $('#Company').val());
           form_data.append('Country', $('#Country').val());
           form_data.append('Interested', $('#Interested').val());
           form_data.append('Source', $('#Source').val());
        form_data.append('hidden_images', $('#hidden_images').val());
        form_data.append('id', data[0].id);
        $.ajax({
         method:"POST",
         url:'update_data.php',
         data:form_data,
         dataType:'json',
         contentType:false,
         cache:false,
         processData:false,
         success:function(data)
         {
          if(data.error != '')
          {
$('#form_response').html('<div class="alert alert-danger">'+data.error+'</div>');
          }
          else
          {
$('#form_response').html('<div class="alert alert-success">'+data.success+'</div>');
           dataTable.ajax.reload();
          }
         }
        });
       }
      }
     ]).showModal();
   }
  })
 });
   /* 
 $(document).on('click', '.delete', function(){
  var id = $(this).attr('id');
  Dialogify.confirm("<h3 class='text-danger'><b>Are you sure you want to remove this data?</b></h3>", {
   ok:function(){
    $.ajax({
     url:"delete_data.php",
     method:"POST",
     data:{id:id},
     success:function(data)
     {
      Dialogify.alert('<h3 class="text-success text-center"><b>Data has been deleted</b></h3>');
      dataTable.ajax.reload();
     }
    })
   },
   cancel:function(){
    this.close();
   }
  });
 });*/
});
</script>