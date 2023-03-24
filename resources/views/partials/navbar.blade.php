<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><h1><b>Shop</b></h1></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active border me-3" href="{{ url('category') }}">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active border me-3" href="{{ url('product') }}">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active border" href="{{ url('cart') }}">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
