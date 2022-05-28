
    <header style="background-color: #0a4275;" class=" p-3 text-white ">


        <div class="container ">

            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start mr-5 ">
                <a style="font-size: 22px; " href="{{route('front.index')}}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none ">
                    <b>TÜRKMEN NEWS</b>
                </a>
                <ul style="margin-left: 5%; " class="nav ml-5 col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0 ">
                    <li class="active "><a href="{{route('front.index')}}" class="nav-link px-2 text-white ">Esasy Sahypa</a></li>
                    <li><a href="{{route('front.news')}}" class="nav-link px-2 text-white ">Habarlar</a></li>
                    <li><a href="{{route('front.about')}}" class="nav-link px-2 text-white ">Biz Barada</a></li>
                    <li><a href="{{route('front.contact')}}" class="nav-link px-2 text-white ">Habarlaşmak</a></li>
                    <!-- <li><a href="# " class="nav-link px-2 text-white ">About</a></li> -->
                </ul>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 " action="{{route('front.gozleg')}}" method="GET">
                    <input type="text " value="{{old('gozleg')}}" class="form-control form-control-dark " name="gozleg" placeholder="Search... " aria-label="Search ">
                </form>

                <div class="text-end ">
                    @guest
                    <a href="/login" type="button " class="btn btn-outline-light me-2 ">Login</a>
                    {{-- <a href="/register" type="button " class="btn btn-outline-light ">Sign-up</a> --}}
                    @endguest
                    @auth
                    @if(Auth::user()->utype==='Super_admin' || Auth::user()->utype==='admin')
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="{{route('admin.index')}}">Admin Panel</a></li>
                          <li><a class="dropdown-item" href="#">Profil</a></li>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li><button class="dropdown-item" >Logout</button></li>
                        </form>

                        </ul>
                      </div>
                      @else
                      <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="#">Profil</a></li>

                          <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <li><button class="dropdown-item" >Logout</button></li>
                        </form>
                        </ul>
                      </div>
                      @endif
                    @endauth
                    </div>
            </div>
        </div>

    </header>
