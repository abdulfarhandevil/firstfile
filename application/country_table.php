<!-- Static Table Start -->
<div class="data-table-area mg-b-15">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="sparkline13-list shadow-reset">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                            <div class="sparkline13-outline-icon">
                                <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                <span><i class="fa fa-wrench"></i></span>
                                <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <div class="container">
                                <?php if(validation_errors()) { ?>
                                  <div class="alert alert-danger">
                                    <?php echo validation_errors(); ?>
                                  </div>
                                  <?php } 
                                  ?>
                                <div id="login"><?php echo $this->session->flashdata('success_message'); ?></div>
                                 <?php 
                                    if (!empty($results))
                                    {
                                 ?>
                                <table>
                                    <tr>
                                        <th>Id</th>
                                        <th>Country_Name</th>
                                        <th>Country_Code</th>
                                        <th colspan="2">Action</th>
                                    </tr> 
                                    <?php foreach($results as $key => $val){ ?>
                                    <tr>
                                        <td><?php echo $val['id']; ?></td>
                                        <td><?php echo $val['Country_Name']; ?></td>
                                        <td><?php echo $val['Country_Code']; ?></td>
                                        <td><a href="<?php echo base_url('Country_Controller/update_country/'.$val['id']); ?>"><i class="fa fa-edit"></i></a></td>
                                        <td id="delete"><a href="<?php echo base_url('Country_Controller/delete_country/'.$val['id']); ?>" onclick="return confirm('Are you sure you want to delete this item')"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php } ?>
                                </table> 
                                 <p id="links"><?php echo $this->pagination->create_links(); ?></p>
                                 <div>
                                     <?php 
                                    }
                                    else
                                    {
                                        echo "no user found";
                                    }
                                     ?>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>