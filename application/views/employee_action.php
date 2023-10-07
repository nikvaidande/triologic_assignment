
<style>
body {
     color: #566787;
     background: #f5f5f5;
     font-family: 'Varela Round', sans-serif;
     font-size: 13px;
}
.breadcrumb {
    padding: 0px !important;
   margin-bottom: 0px !important; 
    list-style: none;
    background-color: #435d7d;
    border-radius: 4px;
}

ul.breadcrumb {
     list-style: none;
}
ul.breadcrumb li {
  display: inline;
  font-size: 18px;
}
ul.breadcrumb li+li:before {
  color: black;
}
ul.breadcrumb li a {
  color: #fff;
  text-decoration: none;
}



.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
     background: #fff;
     padding: 20px 25px;
     border-radius: 3px;
     min-width: 1000px;
     box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
     padding-bottom: 15px;
     background: #435d7d;
     color: #fff;
     padding: 16px 30px;
     min-width: 100%;
     margin: -20px -25px 10px;
     border-radius: 3px 3px 0 0;
}
.table-title h2 {
     margin: 5px 0 0;
     font-size: 24px;
}
.table-title .btn-group {
     float: right;
}
.table-title .btn {
     color: #fff;
     float: right;
     font-size: 13px;
     border: none;
     min-width: 50px;
     border-radius: 2px;
     border: none;
     outline: none !important;
     margin-left: 10px;
}
.table-title .btn i {
     float: left;
     font-size: 21px;
     margin-right: 5px;
}
.table-title .btn span {
     float: left;
     margin-top: 2px;
}
.error{
     color: red;
}
  
</style>

</head>
<body>
<div class="container-xl">
     <div class="table-responsive">
          <div class="table-wrapper">
               <div class="table-title">
                    <div class="row">
                         <div class="col-sm-6">
                              <ul class="breadcrumb">
                                <li><a href="<?php echo base_url();?>">Dashboard</a></li>
                                <li><?php echo $header;?></li>
                              </ul>
                         </div>
                    </div>
               </div>
               <div class="modal-content">
                    <?php echo form_open('/dashboard/user_action/'.(!empty($update_query->id) ? $update_query->id : "")); ?>
                         <div class="modal-header">                             
                              <h4 class="modal-title"><?php echo $header;?></h4>
                         </div>
                         <div class="modal-body">  
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Name</label>
                                             <td><?php $inputName=array('name' => 'name', 'class' => 'form-control', 'value' => (!empty($update_query->name) ? $update_query->name : "")); echo form_input($inputName); ?></td>
                                             <span class="error"><?php echo form_error('name'); ?></span>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Company Name</label>
                                             <td><?php $inputCompanyname=array('name' => 'company_name', 'class' => 'form-control', 'value' => (!empty($update_query->company_name) ? $update_query->company_name : "")); echo form_input($inputCompanyname); ?></td>
                                             <span class="error"><?php echo form_error('company_name'); ?></span>
                                        </div>
                                   </div>
                              </div>
                              <div class="row">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Designation</label>
                                             <td><?php $inputDesignation=array('name' => 'designation', 'class' => 'form-control', 'value' => (!empty($update_query->designation) ? $update_query->designation : "")); echo form_input($inputDesignation); ?></td>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label>Email</label>
                                             <td><?php $inputEmail=array('type' => 'email','name' => 'email', 'class' => 'form-control', 'value' => (!empty($update_query->email) ? $update_query->email : "")); echo form_input($inputEmail); ?></td>
                                             <span class="error"><?php echo form_error('email'); ?></span>
                                        </div>
                                   </div>
                              </div>                   
                         </div>
                         <div class="modal-footer">
                              <!-- <input type="submit" class="btn btn-success" value="Add"> -->
                              <td><?php $insubmit=array('name' =>'submit','class' =>'btn btn-success','value' => 'Submit'); echo form_submit($insubmit);  ?></td>
                              <td class="error"><?php echo form_error(); ?></td>
                         </div>
                    <?php echo form_close(); ?>
               </div>
          </div>
     </div>        
</div>



<script>
$(document).ready(function(){

     
});
</script>
