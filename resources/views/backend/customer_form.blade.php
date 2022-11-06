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
                        <h2 class="m-auto">Customer Submitted Form List</h2>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="no-more-tables">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Customer Name</th>
                                    <th>Category Email</th>
                                    <th>Subject</th>
                                    <th>Customer Phone</th>
                                    <th>Message</th>
                                    <th>Form Submitted</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($customers as $key=>$customer)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$customer->name}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->subject}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->message}}</td>
                                        <td>{{$customer->created_at}}</td>
                                        <td>
                                            <button type="button" name="{{route('customer.form.delete' , $customer->id)}}" class="delete btn btn-danger shadow btn-xs sharp mr-1"><i class="fa fa-trash"></i></button>
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
    </section>
</div>
<!-- footer start-->
@include('backend.dashboard.partial.footer');
{{-- customer Form success --}}
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
