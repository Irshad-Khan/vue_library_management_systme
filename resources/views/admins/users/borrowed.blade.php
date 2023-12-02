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
</div>

</div>
              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>

                    <th scope="col">Tital</th>
                    <th scope="col">Auther</th>
                    <th scope="col">ISBN</th>
                    <th scope="col">Publish Year</th>
                    <th scope="col">Type</th>
                    <th scope="col">Category</th>
                    <td>
                      <a href="" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>|
                      <a href="" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>|
                      <a href="" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')"><i class="bi bi-trash"></i></a>

                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
    </section>


            

@endsection