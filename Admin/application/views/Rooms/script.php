<script>
$(document).ready(function() {
  $('a[href="#tabs-1"]').tab('show');
  $table = $('#categoryTable').DataTable({
    "processing": true,
    "serverSide": false,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>Rooms/getRoomCategories",
      "type": "POST",
      "data": function(d){
      }
    },
    "createdRow": function(row, data, index) {
      $table.column(0).nodes().each(function(node, index, dt) {
        $table.cell(node).data(index + 1);
      });
    },
    "columns": [
      { "data": "created_at", "orderable": false },
      { "data": "cat_name", "orderable": false },
      { "data": null, render:function(data){
        return "<button class='btn btn-xs btn-primary' type='button'>Edit</button>&nbsp;<button class='btn btn-xs btn-danger' type='button'>Delete</button>";
      }},
    ]
  });
  $table1 = $('#roomsTable').DataTable({
    "processing": true,
    "serverSide": false,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>Rooms/getRooms",
      "type": "POST",
      "data": function(d){
      }
    },
    "createdRow": function(row, data, index) {
      $table1.column(0).nodes().each(function(node, index, dt) {
        $table1.cell(node).data(index + 1);
      });
    },
    "columns": [
      { "data": "created_at", "orderable": false },
      { "data": "room_name", "orderable": false },
      { "data": "image_count", "orderable": false },
      { "data": "room_adult_price", "orderable": false },
      { "data": "room_below_five_price", "orderable": false },
      { "data": "room_above_five_price", "orderable": false },
      { "data": "room_extra_bed_price", "orderable": false },
      { "data": "room_status", render:function(data){
        if(data==0){
          return "<strong style='color:red;'>Not Available</strong>";
        }
        else if(data==1){
          return "<strong style='color:green;'>Available</strong>";
        }
      }},
      { "data": null, render:function(data){
        return "<button class='btn btn-xs btn-primary' type='button'>Edit</button>&nbsp;<button class='btn btn-xs btn-danger' type='button'>Delete</button>";
      }},
      { "data": "updated_at", "orderable": false },
    ]
  });
});

function confirmDelete(nearby_id ) {
  var conf = confirm("Do you want to Delete Home Title Link ?");
  if (conf) {
    $.ajax({
      url: "<?php echo base_url(); ?>deleteNearby",
      data: {
        nearby_id: nearby_id
      },
      method: "POST",
      datatype: "json",
      success: function(data) {
        var options = $.parseJSON(data);
        noty(options);
        $table.ajax.reload();
      }
    });
  }
}

function showCategoryModal(){
  $('#showCategoryModal').modal('show');
}

function showAddRoomModal(){
  $.ajax({
    url: '<?php echo base_url(); ?>Rooms/getRoomCategories',
    type: 'post',
    data: {}
  })
  .done(function(d) {
    var response=JSON.parse(d)
    var select=document.getElementById('room_cat');
    var data=response.data;
    data.forEach((item) => {
      $(select).append('<option value='+item.cat_id+'>'+item.cat_name+'</option>');
    });
  })

  $('#showAddRoomModal').modal('show');
}
</script>
