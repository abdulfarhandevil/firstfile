
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
                                <div id="login"><?php echo $msg = $this->session->flashdata('success_message'); 
                                ?></div>
                                 <?php 
                                    if (!empty($results))
                                    {
                                        //print_r($results); die;
                                 ?>
                                <table>
                                    <tr>
                                        <th>Id</th>
                                        <th>City Name</th>
                                        <th>State Name</th>
                                        <th>Country Name</th>
                                        <th colspan="2">Action</th>
                                    </tr> 
                                    <?php foreach($results as $key => $val){ ?>
                                    <tr>
                                        <td><?php echo $val['id']; ?></td>
                                        <td><?php echo $val['City_Name']; ?></td>
                                        <td><?php echo $val['State_Name']; ?></td>
                                        <td><?php echo $val['Country_Name']; ?></td>
                                        <td><a href="<?php echo base_url('City_Controller/update_city/'.$val['id']); ?>"><i class="fa fa-edit"></i></a></td>
                                        <td id="delete"><a href="<?php echo base_url('City_Controller/delete_city/'.$val['id']); ?>" onclick="return confirm('Are you sure you want to delete this item')"><i class="fa fa-trash"></i></a></td>
                                    </tr>
                                <?php } ?>
                                </table> 
                                 <p id="links"> <?php echo $this->pagination->create_links(); ?></p>
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