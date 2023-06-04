<?php include_once('header.php'); ?>
    <main>
        <section class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <?php include_once('quicklinks.php'); ?>
                    </div>
                    <div class="col-md-9 col-sm-12">
                        <div class="card message-card mt-4 mb-3">
                            <div class="card-header bg-white">
                                <h6 class="card-title mb-1 mt-1">
                                    <i class="fas fa-info-circle me-3"></i>
                                    Important Links
                                </h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered academic-calendar">
                                    <thead class="table-secondary">
                                    <tr>
                                        <th scope="col">Links</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($aLinks) && is_array($aLinks) && !empty($aLinks)) {
                                        foreach($aLinks as $row) { ?>
                                    <tr>
                                        <td class="text-center">
                                            <div class="d-grid gap-2">
                                              <a class="btn" href="<?php echo $row->link; ?>" target="_blank"><?php echo $row->title; ?></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } } else { ?>
                                    <tr>
                                        <td class="text-center">No entries yet.</td>
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