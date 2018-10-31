<div class="row">
  <form method="post" action="<?php echo base_url(); ?>admin/products/addproduct" enctype="multipart/form-data">
  <div class="col-md-12">
      <div class="white-box">
        <?php if($this->session->flashdata('error')) { ?>
          <div class="alert alert-danger">
            <?php echo $this->session->flashdata('error'); ?>
          </div>
        <?php } ?>

          <h3 class="box-title m-b-0">Product Information</h3>
          <p class="text-muted m-b-30 font-13"> Fill the below form </p>
          <div class="row">
              <div class="col-sm-12 col-xs-12">
                  <div class="form-group">
                      <label for="exampleInputuname">Product Name</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-user"></i></div>
                          <input type="text" class="form-control" name="sname" placeholder="Product Name" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Description</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-"></i></div>
                          <textarea name="description" class="form-control"  rows="8" cols="80"></textarea>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Price</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-money"></i></div>
                          <input type="number" class="form-control" name="price" placeholder="Enter Product Price" required>
                      </div>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Select Category</label>
                      <select class="form-control" data-placeholder="Choose a State" tabindex="1" name="category" required>
                        <?php foreach($cat as $row){ ?>
                          <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>
                        <?php } ?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputEmail1">Product Price</label>
                      <div class="input-group">
                          <div class="input-group-addon"><i class="ti-"></i></div>
                          <input type="file" class="form-control" name="userfile"  required/>
                      </div>
                  </div>
                      <br /> <hr/>
                  <input type="submit" class="btn btn-success waves-effect waves-light m-r-10" style="width:300px;" value="Add New Product"/>
                  </div>

              </div>
          </div>
      </div>
  </div>

</form>
</div>
