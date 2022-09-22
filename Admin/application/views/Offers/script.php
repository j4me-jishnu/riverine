<script>
$(document).ready(function() {
  $table = $('#offers_table').DataTable({
    "processing": true,
    "serverSide": true,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>Offers/getOffers",
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
      {"data": null,render:function(data,type,row){
        return "<strong style='color:green;'>"+data['offer_name']+"</strong>";
      }},
      {"data": "offer_desc","orderable": false},
      {"data": null, render:function(data,type,row){
        return "<strong style='color:#A52A2A;'>"+data['cat_name']+"</strong>";
      }},
      {"data": "offer_start","orderable": false},
      {"data": "offer_end","orderable": false},
      {"data": null,render:function(data,type,row){
        return data['offer_status']==1 ? "<strong style='color:green;'>Active</strong>" : "<strong style='color:red;'>Inactive</strong>";
      }},
      {"data": null,render:function(data){
        return "<center>"+data['created_at']+"</center>";
      }},
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
