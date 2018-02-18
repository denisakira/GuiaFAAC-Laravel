<nav class="navbar navbar-dark box-shadow" id="navbar">
    <div class="container-fluid">

        <div class="navbar-header aligned">
            <button type="button" id="sidebarCollapse" class="btn btn-info custom-btn">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="nav-item">
            <img src="/img/guia.png">
        </div>

        <div class="nav-item" id="faac-img">
            <img src="/img/faac.png" alt="">
        </div>

        <div class="nav-item" id="unesp-img">
            <img src='/img/unesp.png' alt="">
        </div>

        <div class="nav-item" id="searchbar">
            <form class="form-inline" method="POST" action="/busca">
                {{ csrf_field() }}
                <input class="form-control mr-sm-2" type="search" placeholder="Busca" name="busca" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
</nav>
