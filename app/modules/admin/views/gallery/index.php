<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $title; ?> : Listing</div>
            <div class="panel-body">
                <?php show_message(); ?>					
                <?php get_search_form('', $moduleUrl, 'Search By Title'); ?>				
                <!--GRID START-->
                <div class="table-container">
                    <table class="table table-bordered table-responsive">
                        <thead>
                            <tr>								
                                <th width="5%">#</th>
                                <th width="10%">Title</th>
                                <th width="*">Images</th>
                                <th width="25%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $columns = 4;
                            if (!empty($aGrid->rows)  && is_array($aGrid->rows)) {
                                $i = get_grid_sn();
                                foreach ($aGrid->rows as $row) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row->title ?></td>
                                        <td>
                                            <?php
                                            $aImage = $row->aImage;
                                            if (isset($aImage) && is_array($aImage) && !empty($aImage)) {
                                                $photos = '';
                                                foreach ($aImage as $value) {
                                                    $image = base_url() . 'media/gallery/' . $value->image;
                                                    $photos .= '<div id="div_' . $value->image_id . '" class="tbl-img" title="' . $value->title . '"><img src="' . $image . '" height="100" width="100" alt="' . $value->title . '"/><br/>';
                                                    $photos .= '<center>
														<span onclick="deleteImg(' . $value->image_id . ')" class="btn text-center text-red fa fa-times" title="Delete"></span>';
                                                    $photos .= '</center></div>';
                                                }
                                                echo $photos;
                                            }
                                            ?>
                                        </td>										
                                        <td class="text-center">
                                            <a class="btn btn-success btn-xs" href="<?php echo $moduleUrl; ?>add_image/<?php echo $row->gallery_id; ?>">+ Add Images</a>
                                            <a class="btn btn-primary btn-xs" href="<?php echo $moduleUrl; ?>add/<?php echo $row->gallery_id ?>">Edit</a>
                                            <a onclick="return confirm('Are you sure want to delete this gallery #<?php echo $i; ?>')" class="btn btn-danger btn-xs" href="<?php echo $moduleUrl; ?>delete/<?php echo $row->gallery_id ?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }
                            } else {
                                ?>
                                <tr><td colspan="<?php echo $columns ?>" class="text-center">No Records Found</td></tr>	
                                <?php
                            }
                            ?>
                        </tbody>										
                    </table>
                    <?php
                    if (isset($aGrid->pages)) {
                        echo $aGrid->pages;
                    }
                    ?>
                </div>
                <!--GRID STOP-->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function deleteImg(img_id) {
        var response = confirm('Are you sure want to delete gallery image');
        if (response) {
            var csrf_token_name = '<?php echo $this->security->get_csrf_token_name() ?>';
            var csrf_value = '<?php echo $this->security->get_csrf_hash(); ?>';
            $.ajax({
                url: '<?php echo $moduleUrl; ?>deleteImg/',
                type: 'POST',
                data: {rowId: img_id, csrf_token_name: csrf_value},
                success: function (response) {
                    window.location = '<?php echo $moduleUrl; ?>';
                }
            });
        }
    }
</script>
