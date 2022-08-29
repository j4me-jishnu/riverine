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
                "url": "<?php echo base_url(); ?>getActivity",
                "type": "POST",
                "data": function(d) {

                }
            },
            "createdRow": function(row, data, index) {

                $table.column(0).nodes().each(function(node, index, dt) {
                    $table.cell(node).data(index + 1);
                });
                $('td', row).eq(6).html('<center><a href="<?php echo base_url(); ?>editActivity/' + data['act_id'] + '"><i class="fa fa-edit iconFontSize-medium" ></i></a> &nbsp;&nbsp;&nbsp;<a onclick="return confirmDelete(' + data['act_id'] + ')"><i class="fa fa-trash-o iconFontSize-medium" ></i></a></center>');
            },

            "columns": [
                {
                    "data": "act_status",
                    "orderable": false
                },
                {
                    "data": "act_img",
                    "render": function(data,row,meta){
                        return '<img src="<?php echo base_url() ?>uploads/activity/'+data+'" height="70px;" width="70px;">'
                    }
                },
                {
                    "data": "act_title",
                    "orderable": false
                },
                {
                    "data": "act_desc",
                    "orderable": false
                },
                {
                    "data": "act_pricing_info",
                    "orderable": false
                },
                {
                    "data": "act_date",
                    "orderable": false
                },
                {
                    "data": "act_id",
                    "orderable": false
                }

            ]

        });


    });

    function confirmDelete(act_id ) {
        var conf = confirm("Do you want to Delete Home Title Link ?");
        if (conf) {
            $.ajax({
                url: "<?php echo base_url(); ?>deleteActivity",
                data: {
                    act_id: act_id
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