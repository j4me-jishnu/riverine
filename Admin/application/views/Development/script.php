<script>
  var response = $("#response").val();
  if (response) {
    console.log(response, 'response');
    var options = $.parseJSON(response);
    noty(options);
  }
  $(function() {
    var enquiry_type = {
      'J': 'Job',
      'C': 'Complaint',
      'F': 'Follow-up'
    };
    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {
      "placeholder": "dd/mm/yyyy"
    });
    //Date picker
    $('#date').datepicker({
      autoclose: true,
      format: 'dd/mm/yyyy'
    });
    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
    $table = $('#gallery_table').DataTable({
      "processing": true,
      "serverSide": true,
      "bDestroy": true,
      "ajax": {
        "url": "<?php echo base_url(); ?>Development/get/",
        "type": "POST",
        "data": function(d) {
        }
      },
      "createdRow": function(row, data, index) {
        $table.column(0).nodes().each(function(node, index, dt) {
          $table.cell(node).data(index + 1);
        });
        $('td', row).eq(10).html('<center><a href="<?php echo base_url(); ?>index.php/Development/edit/' + data['develop_id'] + '"><i class="fa fa-edit iconFontSize-medium" ></i></a> &nbsp;&nbsp;&nbsp;<a onclick="return confirmDelete(' + data['develop_id'] + ')"><i class="fa fa-trash-o iconFontSize-medium" ></i></a></center>');
      },
      "columns": [{ "data": "develop_status","orderable": false },
        { "data": "devlop_heading", "orderable": false },
        { "data": "develop_1_title", "orderable": false },
        { "data": "develop_1_desc", "orderable": false },
        { "data": "develop_2_title", "orderable": false },
        { "data": "develop_2_desc", "orderable": false },
        { "data": "develop_3_title", "orderable": false },
        { "data": "develop_3_desc", "orderable": false },
        { "data": "develop_4_title", "orderable": false },
        { "data": "develop_4_desc", "orderable": false },
        { "data": "develop_id", "orderable": false }
      ]
    });
  });
  function confirmDelete(develop_id) {
    var conf = confirm("Do you want to Delete Development item ?");
    if (conf) {
      $.ajax({
        url: "<?php echo base_url(); ?>Development/delete",
        data: {
            develop_id: develop_id
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
</script>