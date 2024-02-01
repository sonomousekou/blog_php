<nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-0">
            <a class="navbar-brand" href="<?= URL ?>"><img src="public/assets/images/brand/logo/logo.svg"
                    alt="Geeks" /></a>
            <div class="order-lg-3 d-flex align-items-center">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="dropdown me-2">
                            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center"
                                type="button" aria-expanded="false" data-bs-toggle="dropdown"
                                aria-label="Toggle theme (auto)">
                                <i class="bi theme-icon-active"></i>
                                <span class="visually-hidden bs-theme-text">Toggle theme</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="light" aria-pressed="false">
                                        <i class="bi theme-icon bi-sun-fill"></i>
                                        <span class="ms-2">Light</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="dark" aria-pressed="false">
                                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                                        <span class="ms-2">Dark</span>
                                    </button>
                                </li>
                                <li>
                                    <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="auto" aria-pressed="true">
                                        <i class="bi theme-icon bi-circle-half"></i>
                                        <span class="ms-2">Auto</span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                        <a href="<?= URL ?>" class="btn btn-outline-primary shadow-sm me-2 d-none d-md-block">Sign In</a>
                        <a href="<?= URL ?>" class="btn btn-primary d-none d-md-block me-2 me-lg-0">Sign Up</a>
                    </div>
                </div>
                <!-- Button -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbar-default" aria-controls="navbar-default" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="navbar-default">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>">Blog</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>">Tutoriels</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>">Formations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>">Realisations</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= URL ?>apropos">A propos</a>
                    </li>
                </ul>
                <form class="mt-3 mt-lg-0 ms-lg-3 d-flex align-items-center">
                    <span class="position-absolute ps-3 search-icon">
                        <i class="fe fe-search"></i>
                    </span>
                    <label for="search" class="visually-hidden"></label>
                    <input type="search" id="search" class="form-control ps-6" placeholder="Search Courses" />
                </form>
            </div>
        </div>
    </nav>