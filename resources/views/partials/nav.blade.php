<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Fruits & Veggies </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link {{request()->is('/')?'active':''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('fruit')?'active':''}}" href="/fruit">Fruits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{request()->is('legume')?'active':''}}" href="/legume">Legumes</a>
        </li>
      </ul>
    </div>
  </nav>
