<div class="container d-flex justify-content-md-between gap-3">
    <ul class="nav nav-underline pb-3 pt-3">

        <li class="nav-item">
          <a class="nav-link  {{ $active == "home" ? "active" : "text-black" }}" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ $active == "posts" ? "active" : "text-black" }}" href="/posts">Posts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ $active == "categories" ? "active" : "text-black" }}" href="/categories">Categories</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ $active == "authors" ? "active" : "text-black" }}" href="/authors">Authors</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ $active == "about" ? "active" : "text-black" }}" href="/about">About</a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ $active == "contact" ? "active" : "text-black" }}" href="/contact">Contact</a>
        </li>

      </ul>

      <ul class="nav nav-underline pb-3 pt-3">
        <li class="nav-item">
          <a href="/login" class="nav-link text-decoration-none text-dark fw-bold {{ $active == "login" ? "active" : "text-black" }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-door-open" viewBox="0 0 16 16">
            <path d="M8.5 10c-.276 0-.5-.448-.5-1s.224-1 .5-1 .5.448.5 1-.224 1-.5 1z"/>
            <path d="M10.828.122A.5.5 0 0 1 11 .5V1h.5A1.5 1.5 0 0 1 13 2.5V15h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117zM11.5 2H11v13h1V2.5a.5.5 0 0 0-.5-.5zM4 1.934V15h6V1.077l-6 .857z"/>
          </svg>
          Login
        </a>
        </li>
      </ul>

    </div>