<nav class="navbar navbar-expand-lg navbar-dark test">
    <div class="container">
        <a class="navbar-brand" href="#">Universitas Binaniaga Indonesia</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('ControllerData') ?>">Data</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo site_url('ControllerChat') ?>">Chat</a>
                </li>
            </ul>
        </div>
        <div class="flex-shrink-0 dropdown">
            <a href="" class="btn btn-outline-light me-2">Logout</a>

        </div>
    </div>
</nav>