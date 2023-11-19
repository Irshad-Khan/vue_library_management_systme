@extends('layouts.main_layout')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Book</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.books.index')}}">Books</a></li>
        
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Books Detail</h5>
              <form action="{{route('admin.books.store')}}" method="POST"class="row g-3">

                @csrf
                <div class="col-6">
                  <label for="name" class="form-label">Book Name</label>
                  <input type="text" name="title" class="form-control" id="title">
                  
                </div>
                


                <div class="col-6">
                  <label for="name" class="form-label">Auther</label>
                  <input type="text" name="auther" class="form-control" id="auther">
                
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Isbn Number</label>
                  <input type="number" name="isbn_number" class="form-control" id="isbn_number">
                
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Publisih Year</label>
                  <input type="date" name="publish_year" class="form-control" id="publish_year">
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Type</label>
                  <input type="text" name="type" class="form-control" id="type">
                  
                </div>
                

                <div class="col-6">
                  <label for="name" class="form-label">Available Books</label>
                  <input type="number" name="available_books" class="form-control" id="available_books">
                </div>
                
                <div class="col-6">
                  <label for="name" class="form-label">Category ID</label>
                  <input type="text" name="category_id" class="form-control" id="category_id">
                    </div>
                

                    <div class="col-6">
                  <label for="status" class="form-label">Status</label>
                  <select name="status" name="status" id="status"  class="form-control">
                    <option value="">Please Select</option>
                    <option value="1">Active</option>
                    <option value="0">In-active</option> 
                  </select>
                </div>
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

            
            </div>
          </div>
    </section>


            

@endsection




