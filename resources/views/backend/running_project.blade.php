@include('backend.dashboard.partial.header');
<!-- header end-->

<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 m-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Add New Running Project</h3>
                        </div>
                        <div class="col-lg-6 my-2">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                        <form action="{{route('save.project')}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project Name</label>
                                <input  class="form-control" id="exampleInputEmail1" type="text" name="project_name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Project Description</label>
                                <textarea class="form-control" id="exampleInputEmail1" name="project_desp" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Add New Project</button>
                        </div>
                        </form>
                    </div>
                </div>


                <div class="col-lg-12 mt-5">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="m-auto">Our Running Project List</h2>
                            @if (session('active'))
                                <div class="alert alert-success"><strong>{{session('active')}}</strong></div>
                            @endif
                            @if (session('deactive'))
                                <div class="alert alert-success"><strong>{{session('deactive')}}</strong></div>
                            @endif
                        </div>
                        <div class="card-body">
                            <div class="table-responsive" id="no-more-tables">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <td>SL</td>
                                        <td>Project Name</td>
                                        <td>Project Description</td>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <td>Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($running_project as $key=>$project)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$project->project_name}}</td>
                                            <td>{{$project->project_desp}}</td>
                                            <td>{{$project->created_at}}</td>
                                            <td>{{$project->updated_at}}</td>
                                            <td>
                                                <button type="button" name="{{route('project.delete' , $project->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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

        </div>

    </section>

</div>
@include('backend.dashboard.partial.footer');
 {{-- delete project success --}}
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
