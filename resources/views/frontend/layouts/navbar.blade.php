<!-- Top Navbar -->
    <div>
      <div class="top-navbar">
        <div class="logo">
          <a style="cursor: pointer" href="{{route('home')}}">
            <img src="{{ asset('frontend') }}/assets/images/logo/logo.png" alt="" />
          </a>
        </div>
        <div class="tagline">
          <a href="{{route('product')}}"><h4>Additives</h4></a>
        </div>
        <div class="tagline">
          <h3>Committed to excellence</h3>
        </div>
      </div>
    </div>

    <!-- Main Navbar -->
  <nav class="navbar navbar-expand-lg">
      <div class="main-navbar">
        <div class="main_logo">
          <a href="{{route('home')}}">
            <img src="{{ asset('frontend') }}/assets/images/logo/logo.png" alt="" />
          </a>
        </div>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <div class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Applications
              </a>
              <ul
                class="dropdown-menu dropdown-align-left"
                aria-labelledby="navbarDropdown"
              >
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Adhesive & Sealant</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Paint & Coating</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- PVC</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Textiles</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Agriculture</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Construction</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Plastic Recycling</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Personal Care</a
                  >
                </li>
              </ul>
            </div>
            <div class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdown"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Products
              </a>
              <ul
                class="dropdown-menu dropdown-align-right"
                aria-labelledby="navbarDropdown"
              >
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Antifoam & Defoamers</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Wetting & Dispersing Agents</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Rheology Control</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Softener</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Silicone</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- UV Protector</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Emulsifier</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="{{route('product')}}"
                    >- Detergent</a
                  >
                </li>
              </ul>
            </div>
            <a class="nav-link" href="{{route('company-news')}}">Company & News</a>
            <a class="nav-link" href="{{route('sustainability')}}">Sustainability</a>
            <a class="nav-link" href="{{route('services')}}">Service</a>
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
          </div>
        </div>
      </div>
    </nav>