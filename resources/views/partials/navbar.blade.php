<div class="container">
    <ul class="nav nav-underline pb-3 pt-3">
        <li class="nav-item">
          <a class="nav-link  {{ $name == "Home" ? "active" : "text-black" }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $name == "Posts" ? "active" : "text-black" }}" href="/posts">Posts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $name == "About" ? "active" : "text-black" }}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ $name == "Contact" ? "active" : "text-black" }}" href="/contact">Contact</a>
        </li>
      </ul>

    </div>