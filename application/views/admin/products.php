<div class="row">
  <div class="col-sm-12">
    <div class="white-box">
      <?php if($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
      <?php } ?>
      <?php if($this->session->flashdata('product_deleted')) { ?>
        <div class="alert alert-success">
          <?php echo $this->session->flashdata('product_deleted'); ?>
        </div>
      <?php } ?><?php if($this->session->flashdata('product_updated')) { ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('product_updated'); ?>
          </div>
        <?php } ?>
        <h3 class="box-title m-b-0">Data Export</h3>
        <p class="text-muted m-b-30">Export data to Copy, CSV, Excel, PDF &amp; Print</p>
        <div class="table-responsive">
            <div id="example23_wrapper" class="dataTables_wrapper">
              <table id="example23" class="display nowrap dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                <thead>
                    <tr role="row">
                      <th class="sorting_asc" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">SN</th>
                      <th class="" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending">Name</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending">Description</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" >Price</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" >Category</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" >Image</th>
                      <th class="sorting" tabindex="0" aria-controls="example23" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending">Action</th>
                    </tr>
                </thead>

                <tbody>
                  <?php $count = 1; if(!empty($view)) { foreach($view as $row) { ?>
                  <tr role="row" class="odd">
                    <td class="sorting_1"><?php echo $count++; ?></td>
                    <td class=""><?php echo $row->name; ?></td>
                    <td><?php echo $row->description; ?></td>
                    <td><?php echo $row->price; ?></td>
                    <td><?php echo $this->db->get_where('categories',array('id'=>$row->category_id))->row()->name; ?></td>
                     <td><img class="img-thumbnail" src="<?php echo base_url(); ?>uploads/products/<?php echo $row->images; ?>" width="120px" alt="<?php echo $row->name; ?>"></td>
                     <!-- <php if( $this->session->userdata('type') === 1): ?> -->
                    <td>
                      <a href="<?php echo base_url(); ?>admin/products/edit/<?php echo $row->id; ?>"><input type="button" value="Edit" class="btn btn-primary"></a> | <br><br> 
                      <?php echo form_open('admin/products/delete/'.$row->id) ?><input type="submit" value="Delete" class="btn btn-danger" ></form>
                    </td>
                  <!-- <php endif; ?> -->
                </tr>
              <?php } } ?>
            </tbody>
            </table></div>
        </div>
    </div>
  </div>
</div>
