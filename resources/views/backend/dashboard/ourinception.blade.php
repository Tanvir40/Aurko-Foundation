@include('backend.dashboard.partial.header');


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>OUR INCEPTION</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Simple Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
       
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">OUR INCEPTION</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Inception First column</th>
                      <th>Inception Second column</th>
                      <th>Description</th>
                      <th>Image</th>
                      
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     $inceptions=DB::table('tbl_our_inceptions')->limit(1)->get();


                    ?>

                    @foreach ($inceptions as $key => $inception)

                    <tr>
                      <td>{{ ++$key }}</td>
                      <td>{{ $inception->inception_first_column }}</td>
                      <td>{{ $inception->inception_second_column }}</td>
                      <td>{{ $inception->descriptions }}</td>
                      <td><img src="public/frontend/img/slider/{{ $inception->image }}"></td>
                      
                     
                      
                      <td>
                            <a href="{{asset('ourinceptionadded/'.$inception->id)}}"><input type="button" name="delelemessage" value="Edit" class="btn btn-info" name=""></a>
                      </td>
                    </tr>

                    @endforeach
                   

                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
      
      
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

 
@include('backend.dashboard.partial.footer');