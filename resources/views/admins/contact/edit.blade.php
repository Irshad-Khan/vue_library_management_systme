@extends('layouts.main_layout')

@section('content')


<main id="main" class="main">

    <div class="pagetitle">
      <h1>Edit Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.categories.index')}}">Categories</a></li>
        
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Category Detail</h5>

              <form action="{{route('admin.categories.update')}}" method="POST"class="row g-3">
                @csrf
                <input type="hidden" name="id" value="{{$contact->id}}">
                <div class="col-6">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" value="{{$contact->name}}" name="name" class="form-control" id="name">
                </div>
                
                <div class="col-6">
                  <label for="name" class="form-label">Email</label>
                  <input type="text"  value="{{$contact->email}}" name="email" class="form-control" id="name">
                </div>
                
                <div class="col-6">
                  <label for="name" class="form-label">Contact Number</label>
                  <input type="number" value="{{$contact->contact_number}}" name="contact_number" class="form-control" id="name">
                </div>

                <div class="col-6">
                  <label for="name" class="form-label">Subject</label>
                  <input type="text" value="{{$contact->subject}}" name="subject" class="form-control" id="name">
                </div>

                <div class="col-12">
                  <label for="name" class="form-label">Message</label>
                  <input type="text" value="{{$contact->message}}" name="message" class="form-control" id="name">
                </div>
                
                
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>

            
            </div>
          </div>
    </section>


            

@endsection