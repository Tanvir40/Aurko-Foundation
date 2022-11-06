@include('backend.dashboard.partial.header');
<!-- header end-->

<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">



                <div class="col-md-6 m-auto">
                    <div class="card card-primary">
                      <div class="card-header">
                        <h3 class="card-title">Edit Executive Committee Member</h3>
                      </div>
                       <div class="col-6 mt-3">
                                  @if ($message = Session::get('success'))
                                    <div class="alert alert-success contact__msg"  role="alert">
                                        {{ $message }}
                                    </div>
                                      @endif
                        </div>
                      <form action="{{route('update.executivecommittee')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" class="form-control" name="id" value="{{$executivecommittee->id}}">
                            <div class="form-group">
                                    <label for="exampleInputFile">Executive Committee Member Photo
                                    </label>
                                <div class="input-group mb-2">
                                    <div class="custom-file">
                                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                    </div>
                                </div>
                                <img width="100" src="{{asset('frontend/img/executivecommittee')}}/{{$executivecommittee->photo}}" alt="">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Executive Committee Member Name</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$executivecommittee->name}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Executive Committee Member Position</label>
                                <input type="text" name="position" class="form-control" id="exampleInputEmail1" value="{{$executivecommittee->position}}">
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
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
