<nav class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px; height: 100%;">
    <a href="{{route('inicio')}}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Blockbuster</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{route('inicio')}}" class="nav-link active" aria-current="page">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{route('peliculas.create')}}" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                Dar de alta pelicula
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                Orders
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                Products
            </a>
        </li>
        <li>
            <a href="#" class="nav-link text-white">
                <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                Customers
            </a>
        </li>
    </ul>

</nav>
