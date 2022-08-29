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
                "url": "<?php echo base_url(); ?>getTestimonial",
                "type": "POST",
                "data": function(d) {

                }
            },
            "createdRow": function(row, data, index) {

                $table.column(0).nodes().each(function(node, index, dt) {
                    $table.cell(node).data(index + 1);
                });
                $('td', row).eq(5).html('<center><a href="<?php echo base_url(); ?>editTestimonial/' + data['tsml_id'] + '"><i class="fa fa-edit iconFontSize-medium" ></i></a> &nbsp;&nbsp;&nbsp;<a onclick="return confirmDelete(' + data['tsml_id'] + ')"><i class="fa fa-trash-o iconFontSize-medium" ></i></a></center>');
            },

            "columns": [
                {
                    "data": "tsml_status",
                    "orderable": false
                },
                {
                    "data": "tsml_img",
                    "render": function(data,row,meta){
                        return '<img src="<?php echo base_url() ?>uploads/testimoney/'+data+'" height="70px;" width="70px;">'
                    }
                },
                {
                    "data": "tsml_cname",
                    "orderable": false
                },
                {
                    "data": "tsml_descp",
                    "orderable": false
                },
                {
                    "data": "tsml_date",
                    "orderable": false
                },
                {
                    "data": "tsml_id",
                    "orderable": false
                }

            ]

        });


    });

    function confirmDelete(tsml_id ) {
        var conf = confirm("Do you want to Delete Testimonial Link ?");
        if (conf) {
            $.ajax({
                url: "<?php echo base_url(); ?>deleteTestimonial",
                data: {
                    tsml_id: tsml_id
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