@extends('layouts.main_layout')

@section('content')
<main id="main" class="main" style="min-height: 100%">

    <div class="pagetitle">
      <h1>Roles</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('admin.dashbaord') }}">Home</a></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session('success'))
      <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
   
    <section class="section">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                    <h5 class="card-title">Roles List</h5>
                </div>
                <div class="col-md-6 mt-3" style="text-align: right">
                    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary">Add New</a>
                </div>
              </div>

              
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($roles as $role)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $role->name }}</td>
                      <td>
                        @if($role->status == 1)
                          <span class="badge bg-success">Active</span>
                        @else
                        <span class="badge bg-danger">In-active</span>
                        @endif
                        
                      </td>
                      <td>
                        <a href="{{ route('admin.roles.show',['id' => $role->id]) }}" class="btn btn-info btn-sm">Show</a> |
                        <a  href="{{ route('admin.roles.edit',['id' => $role->id]) }}" class="btn btn-primary btn-sm">Edit</a> |
                        <a href="{{ route('admin.roles.delete',['id' => $role->id]) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection