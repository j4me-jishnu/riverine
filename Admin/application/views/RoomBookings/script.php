<script>
$(document).ready(function() {
  $table = $('#gallery_table').DataTable({
    "processing": true,
    "serverSide": true,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>getNearby",
      "type": "POST",
      "data": function(d) {
      }
    },
    "createdRow": function(row, data, index) {
      $table.column(0).nodes().each(function(node, index, dt) {
        $table.cell(node).data(index + 1);
      });
    },
    "columns": [
      {
        "data": "nearby_status",
        "orderable": false
      },
      {
        "data": "nearby_img",
        "render": function(data,row,meta){
          return '<img src="<?php echo base_url() ?>uploads/nearby/'+data+'" height="70px;" width="70px;">'
        }
      },
      {
        "data": "nearby_date",
        "orderable": false
      },
      {
        "data": "nearby_id",
        "orderable": false
      }
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


function showBookingModal(){
  $.ajax({
    url: '<?php echo base_url() ?>Rooms/getBookingId',
    type: 'post',
    data: {}
  })
  .done(function(d) {
    var data=JSON.parse(d);
    $('#booking_code').val(data);
  })

  $('#addBookingModal').modal('show');
}

function addMore(){
  var count=$('#counter').val();
  var counter = parseFloat(count) + 1;

  $.ajax({
    url:"<?php echo base_url();?>Rooms/listNationalities",
    type:'POST',
    dataType:"json",
    success:function(data){
      var html = '<option>Select</option>';
      var code = '';
      var i;
      for(i=0; i<data.length; i++){
        html += '<option value='+data[i].id+'>'+data[i].nationality_name+'</option>';
      }
      $('#nationality_'+counter+'').html(html);
    }
  });
  $.ajax({
    url:"<?php echo base_url();?>Rooms/listPOIs",
    type:'POST',
    dataType:"json",
    success:function(data){
      var html = '<option>Select</option>';
      var code = '';
      var i;
      for(i=0; i<data.length; i++){
        html += '<option value='+data[i].poi_id+'>'+data[i].poi_name+'</option>';
      }
      $('#poi_type_'+counter+'').html(html);
    }
  });

  var htmlVal='<DIV class="product-item box box-info id="list_'+counter+'"><div class="row"><div class="col-md-1"><br><input type="checkbox" name="item_index[]"/></div><div class="col-md-2"><br><input name="guest_name[]" class="form-control" data-pms-required="true" data-pms-type="dropDown" type="text" placeholder="Guest name"  id="guest_name_'+counter+'" autofocus /></div><div class="col-md-2"><br><input name="mobile[]" class="form-control" data-pms-required="true" data-pms-type="dropDown"  id="mobile_'+counter+'" placeholder="Mobile" autofocus /></div><div class="col-md-2"><br><input name="address[]" class="form-control" data-pms-required="true" data-pms-type="dropDown"  id="address_'+counter+'" placeholder="Address" autofocus /></div><div class="col-md-1"><br><select name="poi_type[]" class="form-control select2" data-pms-required="true" data-pms-type="dropDown"  id="poi_type_'+counter+'" autofocus /></select></div><div class="col-md-2"><br><input type="text" name="document_no[]" class="form-control" placeholder="Document No." id="document_no_'+counter+'" autofocus ></div><div class="col-md-1"><br><select name="nationality[]" class="form-control select2" data-pms-required="true" data-pms-type="dropDown"  id="nationality_'+counter+'" autofocus/></select></div>';
  $("#service").append(htmlVal);
  $('#counter').val(counter);

  // <div class="col-md-2"><br><input name="address[]" class="form-control" data-pms-required="true" data-pms-type="dropDown"  id="address_'+counter+'" placeholder="Address" autofocus /></div>
}

function deleteRow() {
  $('DIV.product-item').each(function(index, item){
    jQuery(':checkbox', this).each(function () {
      if ($(this).is(':checked')) {
        $(item).remove();
        var counter = $('#counter').val();
        counter = counter - 1;
        $('#counter').val(counter);
        getNetTotal();
      }
    });
  });
}

</script>
