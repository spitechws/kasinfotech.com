<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $title; ?></title>

    <link rel="shortcut icon" href="<?php echo config_item('media_url') . 'site_settings/' . config_item('site_favicon') ?>" type="image/x-icon">
    <link href="<?php assets(); ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?php assets(); ?>css/datepicker3.css" rel="stylesheet">
    <link href="<?php assets(); ?>font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php assets(); ?>css/select2.css" rel="stylesheet">
    <link href="<?php assets(); ?>css/bootstrap-clockpicker.css" rel="stylesheet">
    <link href="<?php assets(); ?>bootstrap-table/bootstrap-table.css" rel="stylesheet">
    <link href="<?php assets(); ?>bootstrap-table/extensions/reorder-rows/bootstrap-table-reorder-rows.css" rel="stylesheet">
    <link href="<?php assets(); ?>css/styles.css" rel="stylesheet">
    <link href="<?php assets(); ?>css/theme.css" rel="stylesheet">
   
    <script src="<?php assets(); ?>js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
    <!---Custom Javascript-->
    <script type="text/javascript">
        var BASE_URL = '<?php echo base_url() ?>';
        var MEDIA_URL = '<?php echo media_url() ?>';
        var MODULE_ID = '<?php config_item('module_id'); ?>';
    </script>
    <script src="<?php assets(); ?>js/app/app.js"></script>
    <script src="<?php assets(); ?>js/app/validations.js"></script>
    <script type="text/javascript">
        var csrf_token_name = '<?php echo $this->security->get_csrf_token_name() ?>';
        var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';

        function change_language() {
            var language = $('#language').val();
            $.ajax({
                url: BASE_URL + 'admin_language/set_default_language/',
                type: 'POST',
                data: {
                    language: language,
                    csrf_token_name: csrf_value
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        }
    </script>
</head>