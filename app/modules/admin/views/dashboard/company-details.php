 <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo $title; ?> : Manage</div>
                <div class="panel-body">
                    <?php show_message(); ?>
                    <?php
                    $edit_id = 0;
                    $activeClass = '';
                    if (isset($aContentInfo->company_details_id)) {
                        $edit_id = $aContentInfo->company_details_id;
                        $activeClass = 'hide';
                    }
                    $attribute = array("id" => "form1", "method" => "post", "class" => "form-horizontal");
                    echo form_open('', $attribute);
                    echo form_hidden('company_details_id', $edit_id);
                    ?>
                    <fieldset>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Total Population
                                <span class="required">*</span></label>
                            <div class="col-md-6">
                                <?php
                                $population = '';
                                if (isset($_POST['population'])) {
                                    $population = $_POST['population'];
                                } else if (isset($aContentInfo->population)) {
                                    $population = $aContentInfo->population;
                                }
                                ?>
                                <input id="population" name="population" validate="Required" type="text" placeholder="Total Population" class="form-control" value="<?php echo $population ?>">
                                <div class="error" id="error_population"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Number of wards
                                <span class="required">*</span></label>
                            <div class="col-md-6">
                                <?php
                                $ward = '';
                                if (isset($_POST['ward'])) {
                                    $ward = $_POST['ward'];
                                } else if (isset($aContentInfo->ward)) {
                                    $ward = $aContentInfo->ward;
                                }
                                ?>
                                <input id="ward" name="ward" validate="Required" type="text" placeholder="Number of wards" class="form-control" value="<?php echo $ward ?>">
                                <div class="error" id="error_ward"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label">Municipal Corporation in CG
                                <span class="required">*</span></label>
                            <div class="col-md-6">
                                <?php
                                $nagar_nigam = '';
                                if (isset($_POST['nagar_nigam'])) {
                                    $nagar_nigam = $_POST['nagar_nigam'];
                                } else if (isset($aContentInfo->nagar_nigam)) {
                                    $nagar_nigam = $aContentInfo->nagar_nigam;
                                }
                                ?>
                                <input id="nagar_nigam" name="nagar_nigam" validate="Required" type="text" placeholder="Total Municipal Corporation in CG" class="form-control" value="<?php echo $nagar_nigam ?>">
                                <div class="error" id="error_nagar_nigam"></div>
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="col-md-3 control-label">CG Municipal Council
                                <span class="required">*</span></label>
                            <div class="col-md-6">
                                <?php
                                $nagar_palika = '';
                                if (isset($_POST['nagar_palika'])) {
                                    $nagar_palika = $_POST['nagar_palika'];
                                } else if (isset($aContentInfo->nagar_palika)) {
                                    $nagar_palika = $aContentInfo->nagar_palika;
                                }
                                ?>
                                <input id="nagar_palika" name="nagar_palika" validate="Required" type="text" placeholder="Total CG Municipal Council" class="form-control" value="<?php echo $nagar_palika ?>">
                                <div class="error" id="error_nagar_palika"></div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label">CG Nagar Panchayat
                                <span class="required">*</span></label>
                            <div class="col-md-6">
                                <?php
                                $nagar_panchayat = '';
                                if (isset($_POST['nagar_panchayat'])) {
                                    $nagar_panchayat = $_POST['nagar_panchayat'];
                                } else if (isset($aContentInfo->nagar_panchayat)) {
                                    $nagar_panchayat = $aContentInfo->nagar_panchayat;
                                }
                                ?>
                                <input id="nagar_panchayat" name="nagar_panchayat" validate="Required" type="text" placeholder="CG Total Nagar Panchayat" class="form-control" value="<?php echo $nagar_panchayat ?>">
                                <div class="error" id="error_nagar_panchayat"></div>
                            </div>
                        </div>

                        <!-- Form actions -->
                        <div class="form-group" >								
                            <div class="col-md-9 col-md-offset-3 error" id="errorMessages">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-3">
                                <input type="hidden" name="submitform" id="submitform" value="submit">	
                                <button type="button" onclick="formValidate('form1')" class="btn btn-primary btn-md">Save</button>
                            </div>
                        </div>
                    </fieldset>
                    <?php echo form_close(); ?>		
                </div>
            </div>
        </div>
    </div><!--/.row-->