<script>
$(document).ready(function() {
  $table = $('#events_table').DataTable({
    "processing": true,
    "serverSide": false,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>Events/getEvents",
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
      {"data": "updated_at","orderable": false},
      {"data": "event_name","orderable": false},
      {"data": "event_description","orderable": false},
      {"data": "image_count","orderable": false},
      {"data": "event_date","orderable": false},
      { "data": null, render:function(data,type,full,meta){
          return '<a href="#"><img src="data:image/png;base64,'+data['event_qr']+'" height="70px;" width="70px;"/></a>'
      }},
      {"data": "created_at","defaultContent":"","orderable": false},
      {"data": null,render:function(data,type,row){
        return "<center><div><i class='fa fa-pencil-square-o' aria-hidden='true'></i> &nbsp;&nbsp;&nbsp; <i class='fa fa-trash-o' aria-hidden='true'></div></center>";
      }},
    ]
  });
});

function showAddEventModal(){
  $('#showAddEventsModal').modal('show');
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
