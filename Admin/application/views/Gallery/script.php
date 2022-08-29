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
                "url": "<?php echo base_url(); ?>getGallery/",
                "type": "POST",
                "data": function(d) {

                }
            },
            "createdRow": function(row, data, index) {

                //            $('td',row).eq(0).html(index+1);
                $table.column(0).nodes().each(function(node, index, dt) {
                    $table.cell(node).data(index + 1);
                });
                $('td', row).eq(4).html('<center><a href="<?php echo base_url(); ?>editGallery/' + data['gallery_id'] + '"><i class="fa fa-edit iconFontSize-medium" ></i></a> &nbsp;&nbsp;&nbsp;<a onclick="return confirmDelete(' + data['gallery_id'] + ')"><i class="fa fa-trash-o iconFontSize-medium" ></i></a></center>');
            },

            "columns": [{
                    "data": "gallery_status",
                    "orderable": false
                },
                {
                    "data": "gallery_title",
                    "orderable": false
                },
                {
                    "data": "gallery_image",
                    "render": function(data, type, row) {
                            return '<img src="<?php echo base_url() ?>uploads/gallery/'+data+'" height="50px" width="50px;"/>';
                    }
                },
                {
                    "data": "gallery_date",
                    "type":"password",
                    "orderable": false
                },
                {
                    "data": "gallery_id",
                    "orderable": false
                }

            ]

        });


    });

    function confirmDelete(gallery_id) {
        var conf = confirm("Do you want to Delete Gallery Link ?");
        if (conf) {
            $.ajax({
                url: "<?php echo base_url(); ?>deleteGallery",
                data: {
                    gallery_id: gallery_id
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