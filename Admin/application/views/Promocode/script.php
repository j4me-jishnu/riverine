<script>
$(document).ready(function() {
  $table = $('#promocode_table').DataTable({
    "processing": true,
    "serverSide": true,
    "bDestroy": true,
    "ajax": {
      "url": "<?php echo base_url(); ?>Promocode/getPromocode",
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
      {"data": "created_at","orderable": false},
      {"data": null, render:function(data,type,row){
        return "<strong style='color:green;'>"+data['code_name']+"</strong>";
      }},
      {"data": "code_description","orderable": false},
      {"data": "cat_name","orderable": false},
      {"data": "code_deduction_perc","orderable": false},
      {"data": "code_max_ded_amt","orderable": false},
      {"data": null,render:function(data,type,row){
        var status=data['code_status'];
        return status==false ? "<strong style='color:red;'>Expired</strong>" : "<strong style='color:green;'>Active</strong>";
      }},
      {"data": "updated_at","orderable": false},
      {"data": null,render:function(data,type,row){
        var status=data['code_status'];
        if(status){
          return "<button type='button'>Re-Activate</button>";
        }
        else{
          return "<button type='button'>Turn off</button>";
        }
      }},
    ]
  });
});

function showAddPromoModal(){
  $('#showAddPromoModal').modal('show');
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
