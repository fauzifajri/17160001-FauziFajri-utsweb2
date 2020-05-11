<link href="<?php echo base_url('assets/bootstrap-datepicker-1.6.1-dist/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
<link href="<?php echo base_url();?>assets/js/js/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
<script src="<?php echo base_url();?>assets/js/js/jquery-1.11.1.min.js"></script> 
<link href="<?php echo base_url('assets/bootstrap-datepicker-1.6.1-dist/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">
<script src="<?php echo base_url('assets/bootstrap-datepicker-1.6.1-dist/js/bootstrap-datepicker.min.js')?>"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" />
 
    <!-- <link href="<?php echo base_url();?>assets/datetime/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen"> -->
<div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?php echo $title;?></h1>
          <?php echo $confirm;?>
          <div class="row">

            <div class="col-lg-6">

              <!-- Default Card Example -->
              <div class="card mb-4">
                <div class="card-header">
                  Profile Kegiatan
                </div>
                <div class="card-body">
                
<?php
$attributes = array('class' => 'form_user', 'id' => 'myform');
echo form_open('Home/save_form_user', $attributes);

?>
 
  <div class="form-group">
    <label for="inputAddress">Name</label>
    <input type="text" name="name" class="form-control" id="inputAddress">
  </div>
  <div class="form-group">
  <label for="inputState">Previledge</label>
      <select id="inputState" class="form-control" name="previledge">
        <option selected>Admin</option>
        <option>...</option>
      </select>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Username</label>
    <input type="text" name="username" class="form-control" id="inputAddress" >
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Password</label>
      <input type="text" name="password" class="form-control" id="inputAddress2">
    </div>
  <div class="form-group">
    <label for="inputAddress">Tanggal Lahir</label>
    <input type="text" name="tanggal_lahir" class="form-control form_date" id="form_date" >
  </div>
  </div>
  
  <button type="submit" class="btn btn-primary">Save</button>
</form> 
<?php
echo form_close();

?>
                </div>
              </div>             
            </div>

            <div class="col-lg-6">

              <!-- Dropdown Card Example -->
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
                </div>
              </div>
                <!-- Card Body -->
                <div class="card-body">
                <form>
                     <div class="form-group">
                     <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                     </div>
                   </form>
                </div>
                <div class="card-body">
                <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Previledge</th>
                <th>Username</th>
                <th>Tanggal Lahir</th>
            </tr>
        </thead>
        <tbody>

        <?php
        if($read_user){
            foreach($read_user as $key => $value){

        
        ?>
            <tr>
                <td><?php echo $value->name;?></td>
                <td><?php echo $value->previledge;?></td>
                <td><?php echo $value->username;?></td>
                <td><?php echo $value->tanggal_lahir;?></td>
            </tr>
        <?php
                    }
                }
        ?>
            <tbody>
            </table>
                </div>
              </div>             
            </div>

          </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    var $j = jQuery.noConflict();
    $j(document).ready(function() {
      $j('#example').DataTable();
    } );

    $('.form_date').datepicker({
      autoclose: true,
      format: "yyyy-mm-dd",
      todayHighlight: true,
      orientation: "auto",
      todayBtn: true,
    });
</script>
