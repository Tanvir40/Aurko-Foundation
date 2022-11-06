@include('backend.dashboard.partial.header');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->

    <!-- Main content -->
    <div class="container-xl">

            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">

                        <div class="col-sm-6">
                            <h2>Add <b>sunamganj flood relief project Photo</b></h2>
                        </div>

                    </div>
                </div>

                    <div class="col-md-10 m-auto">
                        <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Photo</h3>
                        </div>
                        <div class="col-6">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                        @endif
                                    </div>
                        <form action="{{route('sunamganjfloodreliefproject.save')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">

                                <label for="exampleInputEmail1">Photo Title</label>
                                <input type="text" name="title" class="form-control" id="exampleInputEmail1">

                                <div class="input-group mt-3">
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>


                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Photo</button>
                            </div>
                        </form>
                        </div>

                    </div>
                    </div>


                    <div class="col-sm-12">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <td>SL</td>
                                    <td>Photo Title</td>
                                    <td>Photo</td>
                                    <th>Created At</th>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sunamganjfloodreliefproject as $key=>$mask)
                                <tr>
                                        <td data-title="SL">{{$key+1}}</td>
                                        <td data-title="Small Text">{{$mask->title}}</td>
                                        <td data-title="Carousel Image">
                                            <img style="height:48px" src="{{asset('frontend/img/PhotoGallery/sunamganjfloodreliefproject')}}/{{$mask->photo}}" alt="">
                                        </td>
                                    <td>{{$mask->created_at->format('d-m-Y H-i A')}}</td>
                                    <td data-title="Action">
                                        <button type="button" name="{{route('sunamganjfloodreliefproject.delete'
                                        , $mask->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
<!-- /.content-wrapper -->
@include('backend.dashboard.partial.footer');
{{-- delete banner success --}}
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
