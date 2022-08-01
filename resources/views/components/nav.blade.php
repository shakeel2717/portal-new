<ul class="navbar-nav iq-main-menu" id="sidebar-menu">
  <li class="nav-item static-item">
    <a class="nav-link static-item disabled" href="#" tabindex="-1">
      <span class="default-icon">Home</span>
      <span class="mini-icon">-</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="{{ route('employee.dashboard.index') }}">
      <i class="icon">
        <i class="bi bi-view-stacked"></i>
      </i>
      <span class="item-name">Dashboard</span>
    </a>
  </li>
  <li class="nav-item mt-2">
    <a class="nav-link" aria-current="page" href="{{ route('employee.dashboard.index') }}">
      <i class="bi bi-list-task"></i>
      <span class="item-name">My Tasks</span>
    </a>
  </li>
</ul>