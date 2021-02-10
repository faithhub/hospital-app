<?php $this->load->view('includes/head_2'); ?>
<?php $this->load->view('includes/sidebar') ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a>Laboratory Requests & Results</h2>
                    </div>            
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card patients-list">
                        <div class="header">
                            <h2>Requests & Results</h2>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                           <!--  <button class="btn btn-primary m-b-15" type="button" data-toggle="modal" data-target="#takeVitals" onclick="clear_textbox()">
                                <i class="icon wb-plus" aria-hidden="true"></i> Take Vitals
                            </button> -->

<!-- 
                <td><input type='text' class='name' id='name' ></td>
                <td><input type='text' class='email' id='email' ></td> -->
 
                            <!-- Tab panes -->
                            <div class="tab-content m-t-10 padding-0">
                                <div class="tab-pane table-responsive active show" id="All">
                                     <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Date</th>
                                                <th>Name</th>
                                                <th>Sex</th>
                                                <th>Hospital No</th>
                                                <th>Account Status</th>
                                                <th>Clinic</th>
                                                <th>Sender</th>
                                                <th>Diagnosis</th>
                                                <th>Status</th>
                                                <th>Test</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            //var_dump($doctors_list);
                                            $i=1;
                                             foreach ($lab_requests_list as $lab_request) { 
                                                //var_dump($appointment);
                                                ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><span class="list-name"><?php  $ini_date = date_create( $lab_request->date_created); echo date_format($ini_date,"D M d, Y");?></span></td>
                                                <td><?php echo $lab_request->patient_title." ".$lab_request->patient_name;; ?></td>
                                                <td><?php echo $lab_request->patient_gender; ?></td>
                                                <td><?php echo $lab_request->patient_id_num; ?></td>
                                                <td><?php echo $lab_request->patient_status ?></td>
                                                <td><?php echo $lab_request->clinic_name; ?></td>
                                                <td><?php echo $lab_request->staff_firstname." ".$lab_request->staff_lastname; ?></td>
                                                <td><?php echo $lab_request->diagnosis; ?></td>
                                                <td><?php echo $lab_request->status; ?></td>
                                                <td><?php echo $lab_request->lab_test_name; ?></td>
                                                <td><span class="badge badge-success"><a href="#" data-toggle="modal" data-target="#requestResult" onclick="clear_textbox()">View More</a></span></td>
                                            </tr>
                                               <?php 
                                               $i++;
                                           } ?>
                                        </tbody>
                                    </table>                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    
<?php $this->load->view('laboratory/request-modal'); ?>
<?php $this->load->view('includes/footer_2'); ?>
<?php $this->load->view('laboratory/script'); ?>