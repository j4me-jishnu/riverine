



<div class="content-wrapper">
  <section class="content-header">
    <h1>
      New Booking
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo base_url(); ?>Dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo base_url(); ?>addNearby"><i class="fa fa-dashboard"></i> Back To Add</a></li>
      <li class="active">Booking Interface</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="box">
        <div class="box-header">
          <input type="hidden" id="response" value="<?php echo $this->session->flashdata('response'); ?>" />
          <div class="col-md-8">
            <h2 class="box-title"></h2>
          </div>
        </div>

        <div class="box-body">
          <fieldset>
            <legend>Available Rooms</legend>
            <table>
              <tr>
                <?php foreach ($avl_rooms as $room) { ?>
                  <td> <input type="checkbox" name="test[]" value="<?php echo $room->room_id; ?>"> </td>
                  <td><?php echo $room->room_name; ?></td>
                <?php } ?>
              </tr>
            </table>
          </fieldset>
          <hr>

          <div class="col-md-12">
            <h4>Add Customer Details</h4>
          </div>
          <div class="col-md-1">
            <label for=""></label>
          </div>
          <div class="col-md-3">
            <label for="">Item</label>
          </div>
          <div class="col-md-2">
            <label for="">Quantity</label>
          </div>
          <div class="col-md-2">
            <label for="">Unit</label>
          </div>
          <div class="col-md-2">
            <label for="">Rate</label>
          </div>
          <div class="col-md-2">
            <label for="">Total</label>
          </div>

          <!-- ########## -->
          <div class="row">
            <input type="hidden" name="counter" id="counter" value="0">
          </div>
          <DIV id="service" class="box-body no-padding">
          </div>
          <i class="fa fa-fw fa-plus-square fa-2x" onClick="addMore();" Style="color:green;"></i>
          <i class="fa fa-fw fa-minus-square pull-right fa-2x" onClick="deleteRow();" style="color:red;"></i>

        </div>


      </div>
    </div>
  </section>
</div>
