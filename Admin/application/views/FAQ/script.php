<script>
$(document).ready(function() {
  $table = $('#faq_table').DataTable({
    "processing": true,
    "serverSide": true,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>FAQ/getFAQs",
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
      {"data": "status","orderable": false},
      {"data": "question","orderable": false},
      {"data": "answer","orderable": false},
      {"data": "updated_at","orderable": false},
      {"data": null,render:function(){
        return "<center><div><i class='fa fa-pencil-square-o' aria-hidden='true'></i> &nbsp;&nbsp;&nbsp; <i class='fa fa-trash-o' aria-hidden='true'></div></center>";
      }},
    ]
  });
});

function showAddFAQModal(){
  $('#showAddFAQModal').modal('show');
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
