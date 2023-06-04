<?php if(isset($aLatestNotification) && is_array($aLatestNotification) && !empty($aLatestNotification)) { ?>
                        <div class="card news-card mt-4 mb-3">
                            <div class="card-header">
                                <span>
                                    <i class="fas fa-list-ul me-2"></i>
                                    Latest Notices & Notifications
                                </span>
                            </div>
                            <div class="card-body">
                                <ul class="news">
                                    <?php foreach($aLatestNotification as $row) { ?>
                                    <li class="news-item">
                                        <div class="news-wrapper">
                                            <div class="news-text">
                                                <p class="card-text">
                                                    <span class="date"><?php echo config_date($row->created_date); ?></span>
                                                    <a href="<?php echo media_download_url($row->attachment, 'notification'); ?>" class="mb-5">
                                                        <?php echo $row->title; ?>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <a href="<?php echo $site_url; ?>notification/">View All</a>
                            </div>
                        </div>
                    <?php } ?>