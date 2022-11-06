@include('backend.dashboard.partial.header');
<!-- header end-->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                    <div class="col-lg-12 mt-5">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="m-auto">Executive Committee List</h2>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive" id="no-more-tables">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Created At</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($executivecommittee as $key=>$executivecommitte)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>
                                                    <img style="height:48px" src="{{asset('frontend\img\executivecommittee/')}}/{{$executivecommitte->photo}}" alt="">
                                                </td>
                                                <td>{{$executivecommitte->name}}</td>
                                                <td>{{$executivecommitte->position}}</td>
                                                <td>{{$executivecommitte->created_at}}</td>
                                                <td>
                                                    <a href="{{route('edit.executivecommittee' , $executivecommitte->id)}}" class="action-icon btn btn-danger shadow btn-xs sharp mr-1"> <i class="fa fa-paint-brush"></i></a>
                                                    <button type="button" name="{{route('executivecommittee.delete' , $executivecommitte->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Add Executive Committee Member</h3>
                      </div>
                       <div class="col-6 mt-3">
                                  @if ($message = Session::get('success'))
                                    <div class="alert alert-success contact__msg"  role="alert">
                                        {{ $message }}
                                    </div>
                                      @endif
                        </div>
                      <form action="{{route('save.executivecommittee')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">

                            <div class="form-group">
                                    <label for="exampleInputFile">Executive Committee Member Photo
                                    </label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Executive Committee Member Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Banner Name">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Executive Committee Member Position</label>
                                <input type="text" name="position" class="form-control" id="exampleInputEmail1" placeholder="Enter Banner Name">
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                    </div>
            </div>
        </div>
    </section>
</div>
<!-- footer start-->
@include('backend.dashboard.partial.footer');
 {{-- delete executivecommittee success --}}
 <script>
    $('.delete').click(function(){
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
           var link = $(this).attr('name');
           window.location.href =link;
        }
        })
    })
</script>
@if(session('delete'))
<script>
    Swal.fire(
      'Deleted!',
      '{{session('delete')}}',
      'success'
    )
</script>
@endif
