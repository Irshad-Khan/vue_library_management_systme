@extends('layouts.main_layout')

@section('content')
<main id="main" class="main" style="min-height: 100%">

    <div class="pagetitle">
      <h1>Edit Category</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.categories.index') }}">Categories</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Category Detail</h5>
                  <form action="{{ route('admin.categories.update') }}" method="POST" class="row g-3">
                    @csrf
                    <input type="hidden" name="id" value="{{ $category->id }}">
                    <div class="col-12">
                      <label for="name" class="form-label">Name</label>
                      <input value="{{ $category->name }}" type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="col-12">
                      <label for="parent_id" class="form-label">Parent Category</label>
                      <select name="parent_id" id="parent_id" class="form-control">
                        <option value="0">Please Select</option>
                        @foreach ($categories as $categoryData)
                          <option value="{{ $categoryData->id }}" {{ $categoryData->id == $category->parent_id ? 'selected' : ''  }}>{{ $categoryData->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="col-12">
                      <label for="status" class="form-label">Status</label>
                      <select name="status" id="status" class="form-control" required>
                        <option value="">Please Select</option>
                        <option value="1" {{ $category->status == 1 ? 'selected' : ''  }}>Active</option>
                        <option value="0" {{ $category->status == 0 ? 'selected' : ''  }}>In-active</option>
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
      </div>
    </section>

  </main>
@endsection