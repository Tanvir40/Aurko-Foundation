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
                        <h3 class="card-title">About US Text</h3>
                        </div>
                        <div class="col-lg-6 my-2">
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                        <form action="{{route('save.about')}}" method="post">
                        @csrf
                        <div class="card-body">
                            @foreach ($abouts as $about)
                                <input type="hidden" name="id" value="{{$about->id}}">
                            <div class="form-group">
                            <label for="exampleInputEmail1">About Us Content Update</label>
                            <textarea  class="form-control" id="exampleInputEmail1" name="about" id="" cols="30" rows="10">{{$about->about}}</textarea>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update About</button>
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
