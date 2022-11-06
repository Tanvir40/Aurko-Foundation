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
					                    <th>Article</th>
					                    <th>Date</th>


					                </tr>
					            </thead>
					            <tbody>

					                <tr>
					                    <td>1</td>
				                    	<td>
				                    		<a href="{{asset('frontend/pdf/Souvenir%20of%20Pulmonary%20rehabilitation%20week.pdf')}}">Cardiopulmonary Exercise Test(CPET) </a>
				                    	</td>
				                    	<td> 06/08/2022 </td>







					                </tr>

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
