<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="card custom-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-info-circle me-3"></i>
                                    News
                                </h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered academic-calendar">
                                    <thead class="table-secondary">
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">View / Download</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($aNews) && is_array($aNews) && !empty($aNews)) {
                                        foreach($aNews as $row) { ?>
                                    <tr>
                                        <td><?php echo config_date($row->created_date); ?></td>
                                        <td>
                                            <a href="<?php echo media_download_url($row->attachment, 'news'); ?>"><?php echo $row->title; ?></a>
                                        </td>
                                        <td>
                                            <a href="<?php echo media_download_url($row->attachment, 'news'); ?>"><i class="far fa-file-pdf"></i></a>
                                        </td>
                                    </tr>
                                <?php } } else { ?>
                                    <tr>
                                        <td colspan="3" class="text-center">No entries yet.</td>
                                    </tr>
                                <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php'); ?>