<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Listing</div>
            <div class="panel-body">
                <?php show_message(); ?>
                <table id="table">
                    <thead>
                        <tr>
                            <th  data-field="state" data-checkbox="true" ></th>
                            <th  data-field="sn" data-sortable="false">#</th>
                            <th  data-field="role"  data-sortable="true">Role</th>								
                            <th data-field="action_commands" data-sortable="false">Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div><!--/.row-->