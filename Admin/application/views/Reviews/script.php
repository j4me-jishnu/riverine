<script>
$(document).ready(function() {
  $table = $('#offers_table').DataTable({
    "processing": true,
    "serverSide": true,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>Reviews/getReviews",
      "type": "POST",
      "data": function(d) {
      }
    },
    "createdRow": function(row, data, index) {
      $table.column(0).nodes().each(function(node, index, dt) {
        $table.cell(node).data(index + 1);
        console.log(data);
      });
    },
    "columns": [
      {"data": "updated_at","orderable": false},
      {"data": "user_name","orderable": false},
      {"data": "user_contact","orderable": false},
      {"data": "user_rating","orderable": false},
      {"data": "user_comment","orderable": false},
      {"data": "created_at","orderable": false},
      {"data": "status","orderable": false},
      {"data": null,  render:function(data,type,row){
        return "<center><div><i class='fa fa-pencil-square-o' aria-hidden='true'></i> &nbsp;&nbsp;&nbsp; <i class='fa fa-trash-o' aria-hidden='true'></div></center>";
      }},
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
