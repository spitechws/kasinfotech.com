<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : <?php echo lang('Manage') ?></div>
            <div class="panel-body">
                <?php
                //debug($this->config);
                $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal", 'enctype' => 'multipart/form-data');
                echo form_open('', $attribute);
                ?>
                <fieldset>	
                    <div class="text-center">                       
                        <?php echo show_message(); ?>							
                    </div>
                    <div class="col-sm-6 col-xs-12">                        
                        <form method="post" id="form1" name="form1">
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Sn.</th>
                                            <th>Folder Name</th>
                                            <th>Files</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $aMedia = media_scan();
                                        $i = 1;
                                        foreach ($aMedia as $row) {
                                            ?>
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td><?php echo $row->folder_name; ?></td>
                                                <td><?php echo $row->file_count; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>    
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="submitform_media" id="submitform_media" value="submit">	
                                    <button  type="button" onclick="delete_media()" class="btn btn-danger btn-md">Clean Media Folder</button>                                            
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-sm-6 col-xs-12">
                        <form method="post" id="form2" name="form2">
                            <div class="form-group">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Table Name</th>
                                            <th>Rows Count</th>                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $aData = db_scan();
                                        foreach ($aData as $row) {
                                            ?>
                                            <tr>                                               
                                                <td><?php echo $row->table_name; ?></td>
                                                <td><?php echo $row->row_count; ?></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="hidden" name="submitform_db" id="submitform_db" value="submit">	
                                    <button  type="button" onclick="delete_db()" class="btn btn-danger btn-md">Clean Database</button>                                            
                                </div>
                            </div>
                        </form>
                    </div>
                </fieldset>
                <?php echo form_close(); ?>		
            </div>
        </div>
    </div>
</div><!--/.row-->
<script type="text/javascript">
    function delete_media() {
        var response = confirm('Are you sure want to delete all the files from media folder?');
        if (response) {
            formValidate('form1');
        }
    }
    function delete_db() {
        var response = confirm('Are you sure want to clean database records related to current database <?php echo APP_DB_NAME; ?>?');
        if (response) {
            formValidate('form2');
        }
    }
</script>