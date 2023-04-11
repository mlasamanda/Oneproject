    <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
     </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
<!-- new -->
 
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Edit Profile</a></li>
                        <li><a class="dropdown-item" href="#!">change Password</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li class="dropdown-item">
                      <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                     <p>{{ __('Logout') }}</p>
                    </a>
                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf</form>
                       </li>
                        </li>
                    </ul>
                </li>
            </ul>
                     
    </ul>