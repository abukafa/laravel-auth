<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Vascomm Freelancer</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($title === "Users") ? 'active' : '' }}" href="/users">Users</a>
                </li>
            </ul>
            @auth
                <span class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ auth()->user()->name; }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="/logout">Logout</a></li>
                        </ul>
                    </li>
                </span>
            @endauth
            
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                id="bd-theme"
              >
                <i
                  class="bi bi-sun-fill theme-icon-active"
                  data-theme-icon-active="bi-sun-fill"
                ></i>
              </a>
              <ul class="dropdown-menu  dropdown-menu-end">
                <li>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-bs-theme-value="light"
                    id="bd-theme-text"
                    ><i
                      class="bi bi-sun-fill"
                      data-theme-icon="bi-sun-fill"
                    ></i>
                    Light</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-bs-theme-value="dark"
                    id="bd-theme-text"
                    ><i
                      class="bi bi-moon-stars-fill"
                      data-theme-icon="bi-moon-stars-fill"
                    ></i>
                    Dark</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-bs-theme-value="auto"
                    id="bd-theme-text"
                    ><i
                      class="bi bi-circle-half"
                      data-theme-icon="bi-circle-half"
                    ></i>
                    Auto</a
                  >
                </li>
              </ul>
            </li>
          </ul>
        </div>
    </div>
</nav>