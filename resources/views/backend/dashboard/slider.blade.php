@include('backend.dashboard.partial.header');


  <div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-10">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Slider</h3>
              </div>
              <div class="col-12">
                          @if ($message = Session::get('success'))
                            <div class="alert alert-success contact__msg"  role="alert">
                                {{ $message }}
                            </div>
                              @endif
                        </div>
              <form action="{{asset('savesliders')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Name</label>
                    <input type="text" name="slidername" class="form-control" id="exampleInputEmail1" placeholder="Enter Slider Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Slider Description</label>
                    <input type="text" name="sliderdescription" class="form-control" id="exampleInputEmail1" placeholder="Enter Details">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Image</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
           
            <!-- /.card -->

     
            <!-- /.card -->

          </div>
         
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  
@include('backend.dashboard.partial.footer');