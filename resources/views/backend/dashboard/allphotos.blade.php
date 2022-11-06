@include('backend.dashboard.partial.header');


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Photo Information</h1>
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
                <h3 class="card-title">All Photo Information</h3>

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
              <div class="card-body table-responsive p-0" style="height: 800px;">
                <table class="table table-head-fixed text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Photo Name</th>
                      <th>Photo Description</th>
                      <th>Image</th>
                     
                      
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                     $sliders=DB::table('tbl_sliders')->get();

                    ?>

                    @foreach ($sliders as $slider)

                    <tr>
                      <td>{{ $slider->id }}</td>
                      <td>{{ $slider->slidername }}</td>
                      <td>{{ $slider->sliderdescription }}</td>
                      <td><img src="public/frontend/img/slider/{{ $slider->image }}" style="height: 100px; width: 150px"></td>
                      
                      
                     
                      
                      <td>
                            <a href="{{asset('deleteslideinfo/'.$slider->id)}}" onclick="ConfirmDelete()"><input type="button" name="delelemessage" value="Delete" class="btn btn-danger" name=""></a>
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

  <script type="text/javascript">
    function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
      return true;
  else
    return false;
}

    
  </script>
@include('backend.dashboard.partial.footer');