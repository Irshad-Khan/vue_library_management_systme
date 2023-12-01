<aside id="sidebar" class="sidebar" >

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" >
        <a class="nav-link active " href="{{route('admin.dashboard')}}"  style="color: black";>
          <i class="bi bi-grid"  style="color: black";></i>
          <span>Dashboard</span>
        </a>
      </li>

      @if(Auth::user()->role->name=="Admin")
      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.categories.index')}}"  style="color: black";>
          <i class="bi bi-diagram-3-fill"  style="color: black";></i>
          <span>Categories</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.roles.index')}}"  style="color: black";>
        <i class="bi bi-person-bounding-box"  style="color: black";></i>
          <span>Roles</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.users.index')}}"  style="color: black";>
        <i class="bi bi-person"  style="color: black";></i>
          <span>Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.books.index')}}"  style="color: black";>
        <i class="bi bi-book"  style="color: black";></i>
          <span>Books</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admins.contact.index')}}"  style="color: black";>
        <i class="bi bi-envelope-fill"  style="color: black";></i>
          <span>Contact Us</span>
        </a>
      </li>

    

      <li class="nav-item">
        <a class="nav-link " href="{{route('admins.users.profile')}}"  style="color: black";>
        <i class="bi bi-person"  style="color: black";></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('logout')}}"  style="color: black";>
        <i class="bi bi-box-arrow-right"  style="color: black";></i>
          <span>Sign Out</span>
        </a>
      </li>

@endif

@if(Auth::user()->role->name=="Librarian")


<li class="nav-item">
        <a class="nav-link " href="{{route('admin.users.index')}}"  style="color: black";>
        <i class="bi bi-person"  style="color: black";></i>
          <span>Users</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.books.index')}}"  style="color: black";>
        <i class="bi bi-book"  style="color: black";></i>
          <span>Books</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admins.users.profile')}}"  style="color: black";>
        <i class="bi bi-person"  style="color: black";></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('logout')}}"  style="color: black";>
        <i class="bi bi-box-arrow-right"  style="color: black";></i>
          <span>Sign Out</span>
        </a>
      </li>
      @endif


@if(Auth::user()->role->name=="User")

      <li class="nav-item">
        <a class="nav-link " href="{{route('admin.books.index')}}"  style="color: black";>
        <i class="bi bi-file"  style="color: black";></i>
          <span>Borrow Books</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('admins.users.profile')}}"  style="color:black";>
        <i class="bi bi-person"  style="color: black";></i>
          <span>Profile</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="{{route('logout')}}"  style="color: black";>
        <i class="bi bi-box-arrow-right"  style="color: black";></i>
          <span>Sign Out</span>
        </a>
      </li>
      @endif
    </ul>

  </aside>