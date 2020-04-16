
<html>
 <head>
  <title></title>
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
   <h3 align="center"></h3>
   <br />
   <div class="panel panel-default">
    <div class="panel-heading">
     <div class="row">
      <div class="col-md-6">
       <h3 class="panel-title">Client Data</h3>
      </div>
      
     </div>
    </div>
   
     <div class="table-responsive">
      <table id="user_data" class="table table-bordered table-striped">
       <thead>
        <tr>
         <td>C_origine</td>
         <td>Email</td>
         <td>First_name</td>
         <td>Last_name</td>
         <td>Middle_Name</td>
         <td>Phone_Number</td>
         <td>Fonction </td>
         <td>Company </td>
         <td>Country </td>
         <td>Website </td>
         <td>Source</td>
         <td>interesse</td>
            <td>Black_Liste </td>
         <td>Category </td>
         <td>Advanced_diploma </td>
         <td>Foundation_diploma</td>
         <td>training_lang</td>
            <td>Certificate</td>
            <td>E_ID</td>
       </thead>
      </table>      
     </div>
    
   </div>
  </div>
 </body>
</html>

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
    "targets":[],
    "orderable":false,
   },
  ],
 });

    
 /*$(document).on('click', '.view', function(){
  var C_ID = $(this).attr('C_ID');
  var options = {
   ajaxPrefix: '',
   ajaxData: {C_ID:C_ID},
   ajaxComplete:function(){
    this.buttons([{
     type: Dialogify.BUTTON_PRIMARY
    }]);
   }
  };
  new Dialogify('fetch_single.php', options)
   .title('View Employee Details')
   .showModal();
 });
 
    
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
      form_data.append('C_origine', $('#C_origine').val());
      form_data.append('Email', $('#Email').val());
      form_data.append('First_name', $('#First_name').val());
      form_data.append('Last_name', $('#Last_name').val());
      form_data.append('Middle_Name', $('#Middle_Name').val());
      form_data.append('Phone_Number', $('#Phone_Number').val());
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
 });

 $(document).on('click', '.update', function(){
  var C_ID = $(this).attr('C_ID');
  $.ajax({
   url:"fetch_single_data.php",
   method:"POST",
   data:{C_ID:C_ID},
   dataType:'json',
   success:function(data)
   {
    localStorage.setItem('C_origine', data[0].C_origine);
       localStorage.setItem('Email', data[0].Email);
    localStorage.setItem('First_name', data[0].First_name);
    localStorage.setItem('Last_name', data[0].Last_name);
    localStorage.setItem('Middle_Name', data[0].Middle_Name);
    localStorage.setItem('Phone_Number', data[0].Phone_Number);
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
      form_data.append('Middle_Name', $('#Middle_Name').val());
      form_data.append('Phone_Number', $('#Phone_Number').val());
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

 $(document).on('click', '.delete', function(){
     
  var id = $(this).attr('C_ID');
     
     
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
 });
 */
 
});
</script>
