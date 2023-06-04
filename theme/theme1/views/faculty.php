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
                                    Faculty
                                </h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered academic-calendar">
                                    <thead class="table-secondary">
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Designation</th>
                                        <th scope="col">Department</th>
                                        <th scope="col">Qualification</th>
                                        <th scope="col">Mobile No.</th>
                                        <th scope="col">Email-ID</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($aFaculty) && is_array($aFaculty) && !empty($aFaculty)) { 
                                    foreach($aFaculty as $row) { ?>
                                    <tr>
                                        <td><?php echo $row->faculty_name; ?></td>
                                        <td><?php echo $row->designation; ?></td>
                                        <td><?php echo $row->department; ?></td>
                                        <td><?php echo $row->qualification; ?></td>
                                        <td><?php echo $row->mobile; ?></td>
                                        <td><?php echo $row->email; ?></td>
                                    </tr>
                                    <?php } } else { ?>
                                    <tr>
                                        <td colspan="6" class="text-center">No entries yet.</td>
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