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
                                    Recruitment
                                </h6>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered academic-calendar">
                                    <thead class="table-secondary">
                                    <tr>
                                        <th scope="col">Post Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">View & Apply</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(isset($aCareer) && is_array($aCareer) && !empty($aCareer)) {
                                        foreach($aCareer as $row) { 
                                            $url = base_url() . 'career-apply?career_id=' . base64_encode($row->career_id);
                                            $salary = salary();
                                            $salary = $salary[$row->salary];

                                            $job_type = job_type();
                                            $job_type = $job_type[$row->job_type];

                                            $work_mode = work_mode();
                                            $work_mode = $work_mode[$row->work_mode]; ?>
                                    <tr>
                                        <td><?php echo $row->job_title; ?></td>
                                        <td>
                                            <p class="job-title"><b>Job Type</b>: <?php echo $row->job_type; ?></p>
                                            <p class="job-fields"><b>No. of Positions</b>: <?php echo $row->posts; ?></p>
                                            <p class="job-fields"><b>Salary</b>: Rs. <?php echo $salary; ?></p>
                                            <p class="job-fields"><b>Location</b>: <?php echo $row->location; ?></p>
                                            <p class="job-fields"><b>Work Mode</b>: <?php echo $work_mode; ?></p>
                                        </td>
                                        <td>
                                            <a href="<?php echo $url; ?>" class="btn btn-primary btn-sm">View & Apply</a>
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