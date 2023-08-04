<script src="<?php assets(); ?>js/bootstrap.min.js"></script>
<script src="<?php assets(); ?>js/bootstrap-datepicker.js"></script>
<script src="<?php assets(); ?>js/select2.js"></script>
<script src="<?php assets(); ?>js/bootstrap-clockpicker.js"></script>

<script src="<?php assets(); ?>bootstrap-table/bootstrap-table.js"></script>
<script src="<?php assets(); ?>bootstrap-table/extensions/reorder-rows/jquery.tablednd.js"></script>
<script src="<?php assets(); ?>bootstrap-table/extensions/reorder-rows/bootstrap-table-reorder-rows.js"></script>
<script src="<?php assets(); ?>js/jquery.tablednd_0_5.js"></script>
<script type="text/javascript">
    function load_language() {
        var lang = $('#language_id').val();
        window.location = BASE_URL + 'admin_language/add/' + lang;
    }
    function update_label(label_id) {
        var label = $('#label_' + label_id).val();
        var csrf_token_name = '<?php echo $this->security->get_csrf_token_name() ?>';
        var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';
        $.ajax({
            url: BASE_URL + 'admin_language/update_label/',
            type: 'POST',
            data: {label_id: label_id, label: label, csrf_token_name: csrf_value},
            success: function (response) {
                window.location.reload();
            }
        });
    }
   
    $('.date').datepicker({
        format: "dd-M-yyyy",
        //todayBtn: true,
        //clearBtn: true,
        autoclose: true,
        todayHighlight: true
    });
    //------row sorting------------
    $(".row-sorting tbody").tableDnD({
        onDrop: function (table, row) {
            var sequences = $.tableDnD.serialize();
            $.ajax({
                url: BASE_URL + 'common/row_sorting/',
                type: 'POST',
                data: {sequences: sequences, csrf_token_name: csrf_value, module_id: MODULE_ID},
                dataType: 'json',
                success: function (response) {
                    csrf_token_name = response.csrf_token_name;
                    csrf_value = response.csrf_hash;
                }
            });

        }
    });
</script>