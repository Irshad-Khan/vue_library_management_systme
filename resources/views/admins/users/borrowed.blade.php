@extends('layouts.main_layout')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1 style="color: #44b89d;">Borrowed Books</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}" style="color: black;">Home</a></li>
        
        </ol>
      </nav>
    </div><!-- End Page Title -->
     @if(session('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        {{session('success')}}
       <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
         @endif
        
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
            <div class="card-body">
<div class="row">
    <div class="col-md-6">
    <h5 class="card-title" style="color: #44b89d;">Borrowed Books List</h5>
    {{--  <button id="checkout-button">Pay Now</button>  --}}
</div>

</div>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Auther</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Publish Year</th>
                    <th scope="col">Borrowed Date</th>
                    <th scope="col">Fine</th>
                    <th scope="col">Action</th>
                  </tr>
                </head>
                <tbody>
                  @foreach ($books as $book)
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ $book->book_picture_url }}" alt="" width="50"></td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->auther }}</td>
                    <td>{{ $book->isbn_number }}</td>
                    <td>{{ $book->publish_year }}</td>
                    <td>{{ $book->borrow_date}}</td>

                    @php
                        // Assuming $book->borrow_date is a string in the 'Y-m-d' format
                        $borrowDate = \Carbon\Carbon::parse($book->borrow_date);
                        $dueDate = $borrowDate->addDays(15);

                        // Check if the due date is in the past
                        $isOverdue = now()->greaterThan($dueDate);
                    @endphp

                    @if ($isOverdue)
                      <td><button data-fine="20" class="btn btn-info btn-sm checkout-button" title="Return Book">PAY FINE (20)</button></td>
                    @else
                        <td><p>No fine</p></td>
                    @endif
                    <td><a href="{{ route('admins.return.Book',['id'=>$book->id]) }}" onclick="return confirm('Are you sure?')" class="btn btn-primary btn-sm" title="Return Book"><i class="bi bi-upload"></i></a></td>
                  @endforeach
                </tbody>
              </table>

            </div>
          </div>
    </section>


            

@endsection

@section('script')
<script src="https://js.stripe.com/v3/"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        var stripe = Stripe('pk_test_51OJTpGSIjEcZrUKIrOpTAES9F5gIyqgGVzcJK4tgv0sOEMI0rnwW2eq7z5ErLK8rBW821kZdRCqCWfcKMgRewW8R00eMtyfd0t');

        document.querySelector('.checkout-button').addEventListener('click', function () {
          var amount = this.dataset.fine;
          axios.post('/create-checkout-session', { amount: amount })
              .then(function (response) {
                  return stripe.redirectToCheckout({ sessionId: response.data.id });
              })
              .then(function (result) {
                  if (result.error) {
                      alert(result.error.message);
                  }
              })
              .catch(function (error) {
                  console.error('Error:', error);
              });
      });
    </script>
@endsection