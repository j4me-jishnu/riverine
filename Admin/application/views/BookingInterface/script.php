<script>
function addMore(){
  var count=$('#counter').val();
  var counter = parseFloat(count) + 1;

  var htmlVal='<DIV class="product-item box box-info id="list_'+counter+'"><div class="row"><div class="col-md-1"><br><input type="checkbox" name="item_index[]"/></div><div class="col-md-3"><br><input name="item_list_id[]" class="form-control" data-pms-required="true" data-pms-type="dropDown" type="text" placeholder="Item Name"  id="item_'+counter+'" autofocus /></div><div class="col-md-2"><br><input name="qty[]" class="form-control" data-pms-required="true" data-pms-type="dropDown"  id="qty_'+counter+'" placeholder="Quantity" autofocus /></div><div class="col-md-2"><br><select name="unit_id[]" class="form-control select2" data-pms-required="true" data-pms-type="dropDown"  id="unit_id'+counter+'" autofocus /></select></div><div class="col-md-2"><br><input type="text" name="rate[]" onkeyup="getSum('+counter+')" class="form-control" id="rate_'+counter+'" placeholder="Rate"></div><div class="col-md-2"><br><input type="text" name="total[]" class="form-control" id="total_'+counter+'" placeholder="Total"></div>';
  $("#service").append(htmlVal);
  $('#counter').val(counter);
}

function deleteRow(){
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
