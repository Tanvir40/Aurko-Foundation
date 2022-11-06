@include('frontend.partial.header')


    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Notice Board</h1>
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Notice</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">

                	<div class="card">



					    <!-- /.card-header -->
					    <div class="card-body">
				<table id="datatable" class="table table-bordered table-hover" style="text-align:center">
					            <thead>
					                <tr>
					                    <th>SL. No</th>
					                    <th>Title</th>
					                    <th>Date</th>
					                    <th>Download Notice</th>
					                </tr>
					            </thead>
					            <tbody>
                                    @foreach ($noticeboard as $key=>$notice)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>
                                                {{$notice->notice_title}}
                                            </td>
                                            <td>
                                                {{$notice->created_at->format('d-m-Y')}}
                                            </td>
                                            <td>
                                                <a href="{{asset('frontend/pdf')}}/{{$notice->notice}}">Download</a>
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
        </div>
        <!-- /.container-fluid -->
    </div>


@include('frontend.partial.footer')
