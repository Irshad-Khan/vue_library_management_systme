@extends('layouts.main_layout')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Show Books</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.books.index')}}">Book</a></li>
        
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Book Detail</h5>

              <form action="{{route('admin.books.store')}}" method="POST"class="row g-3">
                @csrf
                <input type="hidden" name="id" value="{{$book->id}}">
                <div class="col-6">
                  <label for="name" class="form-label">Book Name</label>
                  <input type="text" value="{{$book->title}}" name="title" class="form-control" id="title">
                  
                </div>
                


                <div class="col-6">
                  <label for="name" class="form-label">Auther</label>
                  <input type="text" value="{{$book->auther}}" name="auther" class="form-control" id="auther">
                
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Isbn Number</label>
                  <input type="number" value="{{$book->isbn_number}}" name="isbn_number" class="form-control" id="isbn_number">
                
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Publisih Year</label>
                  <input type="date" value="{{$book->publish_year}}" name="publish_year" class="form-control" id="publish_year">
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Type</label>
                  <input type="text" value="{{$book->type}}" name="type" class="form-control" id="type">
                  
                </div>
                

                <div class="col-6">
                  <label for="name" class="form-label">Available Books</label>
                  <input type="number" value="{{$book->available_books}}" name="available_books" class="form-control" id="available_books">
                </div>
                
                <div class="col-6">
                  <label for="name" class="form-label">Category ID</label>
                  <input type="text" value="{{$book->category_id}}" name="category_id" class="form-control" id="category_id">
                    </div>
                
                <div class="col-6">
                  <label for="status" class="form-label">Status</label><br>
                   @if($book->status == 1)
                    <span class="badge bg-success">Active</span>
                    @else
                    <span class="badge bg-danger">In-active</span>
                    @endif
                </div>
                
              
              </form><!-- Vertical Form -->

            </div>
          </div>

            
            </div>
          </div>
    </section>


            

@endsection