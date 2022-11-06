@include('backend.dashboard.partial.header');
<!-- header end-->

<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-md-6 m-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Update Mission Text</h3>
                        </div>
                        <div class="col-lg-6 my-2">
                                    @if ($message = Session::get('mission'))
                                        <div class="alert alert-success contact__msg"  role="alert">
                                            {{ $message }}
                                        </div>
                                    @endif
                                </div>
                        <form action="{{route('save.mission')}}" method="post">
                        @csrf
                        <div class="card-body">
                            @foreach ($mission_vision as $mission)
                                <input type="hidden" name="id" value="{{$mission->id}}">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Our Mission</label>
                            <textarea  class="form-control" id="exampleInputEmail1" name="mission" id="" cols="30" rows="10">{{$mission->mission}}</textarea>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Mission</button>
                        </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 m-auto">
                    <div class="card card-primary">
                        <div class="card-header">
                        <h3 class="card-title">Update Vision Text</h3>
                        </div>
                        <div class="col-lg-6 my-2">
                                    @if ($message = Session::get('vision'))
                                    <div class="alert alert-success contact__msg"  role="alert">
                                        {{ $message }}
                                    </div>
                                        @endif
                                </div>
                        <form action="{{route('save.vision')}}" method="post">
                        @csrf
                        <div class="card-body">
                            @foreach ($mission_vision as $vision)
                                <input type="hidden" name="id" value="{{$vision->id}}">
                            <div class="form-group">
                            <label for="exampleInputEmail1">Our Vision</label>
                            <textarea name="vision" id=""  class="form-control" id="exampleInputEmail1" cols="30" rows="10">{{$vision->vision}}</textarea>
                            </div>
                            @endforeach
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update Vision</button>
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
