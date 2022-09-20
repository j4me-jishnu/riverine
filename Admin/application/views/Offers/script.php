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

function showAddOfferModal(){
  $('#showAddOfferModal').modal('show');
}

$('#roomSelect').on('change',function(){
  var id=this.value;
  $.ajax({
    url: '<?php echo base_url() ?>Offers/getSingleRoomPrice',
    type: 'post',
    data: {id: id}
  })
  .done(function(d) {
    console.dir();
    var data=JSON.parse(d);
    console.log(data);
  })

})
</script>
