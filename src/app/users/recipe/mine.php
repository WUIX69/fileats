<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Recipes - Fil eats</title>
    <link href="../../../../public/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../public/assets/css/global.css" rel="stylesheet">
    <link href="../../../../public/assets/css/loader/window.css" rel="stylesheet">
    <link href="../../../../public/assets/css/users/style.css" rel="stylesheet">
    <style>
        .recipe-card {
            border: none;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease-in-out;
        }

        .recipe-card:hover {
            transform: translateY(-5px);
        }

        .recipe-card .card-img-top {
            height: 416px;
            object-fit: stretch;
            object-position: center;
        }

        .btn-outline-secondary {
            border-color: #e9ecef;
        }

        .btn-outline-secondary:hover {
            background-color: #f8f9fa;
            border-color: #e9ecef;
            color: #212529;
        }

        .badge {
            font-weight: 500;
            padding: 0.5em 1em;
        }

        .recipe-meta {
            color: #6c757d;
        }

        .recipe-meta i {
            font-size: 0.875rem;
        }

        .ui.card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .ui.card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .ui.card .image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }

        .ui.card .image img {
            object-fit: cover;
            height: 100%;
            width: 100%;
        }

        .ui.card .corner.label {
            border-radius: 0;
            min-height: 2em;
            min-width: 2em;
        }

        .ui.card .corner.label i {
            font-size: 1em;
        }

        .ui.card .meta {
            margin-top: 0.5em;
        }

        .ui.card .meta .category {
            color: #2185d0;
            font-weight: 600;
        }

        .ui.pagination.menu {
            box-shadow: none;
            border: none;
            margin-top: 2rem;
        }

        .ui.pagination.menu .item {
            min-width: 3em;
            text-align: center;
        }

        .ui.pagination.menu .active.item {
            background-color: #2185d0;
            color: white;
        }

        .recipe-card {
            transition: transform 0.2s ease, box-shadow 0.2s ease;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .recipe-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .card-actions {
            position: absolute;
            top: 1rem;
            right: 1rem;
            opacity: 0;
            transition: opacity 0.2s ease;
        }

        .recipe-card:hover .card-actions {
            opacity: 1;
        }

        .card-actions .btn {
            width: 32px;
            height: 32px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .recipe-stats {
            border-top: 1px solid #eee;
            padding-top: 0.75rem;
        }

        .pagination .page-link {
            border: none;
            margin: 0 3px;
            border-radius: 4px;
            padding: 8px 16px;
        }

        .pagination .page-item.active .page-link {
            background-color: var(--bs-primary);
        }
    </style>
</head>

<body>

    <div class="shared-standalone-cont">
        <div class="loader-window-cont">
            <div class="loader-window-overlay"></div>
            <div class="loader-window"></div>
        </div>
    </div>

    <div class="site-cont">
        <header class="site-header">
            <nav class="navbar navbar-expand-lg navbar-light w-100 pb-2 border-bottom">
                <div class="container-xl">
                    <a class="d-flex" href="../index.html">
                        <b class="fs-2 d-block logo text-center"> <span class="family_1">Fil Eats</span> <span
                                class="d-block text-uppercase font_13">Cooking Recipes</span>
                            <span class="d-block font_12 col_green mt-1">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>
                        </b>
                    </a>
                    <button class="navbar-toggler offcanvas-nav-btn  ms-auto me-3" type="button">
                        <img src="../../../../public/assets/img/icons-svg/list.svg" width="40" height="40"
                            alt="Open TemplateOnweb website menu" />
                    </button>
                    <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                        <div class="offcanvas-header shadow">
                            <a class="d-flex" href="../index.html">
                                <b class="fs-2 d-block logo text-center"> <span class="family_1">Tasty Food</span>
                                    <span class="d-block text-uppercase font_13">Cooking Recipes</span>
                                    <span class="d-block font_12 col_green mt-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </b>
                            </a>
                            <img src="../../../../public/assets/img/icons-svg/x.svg" width="40" height="40"
                                class="ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"
                                alt="Close TemplateOnweb website menu" />
                        </div>
                        <div class="offcanvas-body pt-0 align-items-center">
                            <ul class="navbar-nav align-items-lg-center ms-auto mt-2">
                                <li class="nav-item">
                                    <a class="nav-link" href="../index.html" title="Visit home page">
                                        Dashboard
                                    </a>
                                </li>
                                <li class="nav-item dropdown drop_border">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Find Recipes<img src="../../../../public/assets/img/icons-svg/chevron-down.svg"
                                            width="15" height="15" alt="Submenu open/close icon">
                                    </a>
                                    <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="../recipe/index.html">Discover Recipes</a>
                                        </li>
                                        <li><a class="dropdown-item border-0" href="../recipe/single-view.html">
                                                Discover
                                                Chefs</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../bookmarks.html" title="Visit Bookmarked recipes">
                                        Bookmarks
                                    </a>
                                </li>
                                <li class="nav-item dropdown drop_border">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Manage Recipes<img
                                            src="../../../../public/assets/img/icons-svg/chevron-down.svg" width="15"
                                            height="15" alt="Submenu open/close icon">
                                    </a>
                                    <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="submit.html"> Submit a Recipe</a></li>
                                        <li><a class="dropdown-item border-0" href="mine.html"> My
                                                Recipes</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="../settings.html" title="Visit Settings">
                                        Settings
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav align-items-lg-center ms-auto mt-2 gap-2 right-end">
                                <li class="nav-item">
                                    <a class="nav-link fs-4" href="#" title="Notifications">
                                        <i class="bi bi-bell"></i>
                                    </a>
                                </li>
                                <li class="nav-item dropdown drop_border">
                                    <div class="user-greeting d-flex align-items-center">
                                        <div class="profile">
                                            <img src="../../../../public/assets/img/members/jack.jpg"
                                                class="rounded-circle me-2" width="37" height="37"
                                                alt="User profile picture">
                                        </div>
                                        <div class="greeting d-flex align-items-start flex-column">
                                            <span class="name">Hello, Jack</span>
                                            <span class="role">User</span>
                                        </div>
                                    </div>
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false"><img
                                            src="../../../../public/assets/img/icons-svg/chevron-down.svg" width="15"
                                            height="15" alt="Submenu open/close icon">
                                    </a>
                                    <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="../index.html"> Dashboard</a></li>
                                        <li><a class="dropdown-item" href="../settings.html">
                                                Settings</a>
                                        </li>
                                        <li><a class="dropdown-item border-0" href="javascript:void(0)">
                                                Logout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <main class="site-main">
            <!-- Page Header -->
            <section id="header">
                <div class="container-xl">
                    <div class="content">
                        <div class="header">
                            <h1 class="mb-1">My Recipes <span class="emoji">🍲</span></h1>
                            <p class="text-muted mb-0">Manage and organize your culinary creations</p>
                        </div>
                        <div class="filters">
                            <!-- Filter Dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    <i class="bi bi-filter"></i> Filter
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">All Recipes</a></li>
                                    <li><a class="dropdown-item" href="#">Main Dishes</a></li>
                                    <li><a class="dropdown-item" href="#">Desserts</a></li>
                                    <li><a class="dropdown-item" href="#">Beverages</a></li>
                                </ul>
                            </div>
                            <!-- Sort Dropdown -->
                            <div class="dropdown">
                                <button class="btn btn-outline-secondary dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown">
                                    <i class="bi bi-sort-down"></i> Sort
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Latest First</a></li>
                                    <li><a class="dropdown-item" href="#">Most Popular</a></li>
                                    <li><a class="dropdown-item" href="#">Name A-Z</a></li>
                                </ul>
                            </div>
                            <!-- Add Recipe Button -->
                            <a href="submit.html" class="btn btn-success">
                                <i class="bi bi-plus-lg"></i> Add Recipe
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Recipes Grid -->
            <section class="recipes-grid py-4">
                <div class="container-xl">
                    <div class="row g-4">
                        <!-- Recipe Card -->
                        <div class="col-md-6 col-lg-4">
                            <div class="card recipe-card h-100">
                                <div class="position-relative">
                                    <img src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
                                        class="card-img-top" alt="Recipe Image">
                                    <div class="card-actions">
                                        <button class="btn btn-light btn-sm rounded-circle me-2"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="tooltip"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <span
                                        class="badge bg-primary position-absolute bottom-0 start-0 m-3">Breakfast</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Baked Creamy Eggs</h5>
                                    <p class="card-text text-muted">A delicious breakfast recipe with creamy eggs and
                                        fresh herbs.</p>
                                    <div class="recipe-stats d-flex gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-clock me-1"></i> 25 mins</span>
                                        <span><i class="bi bi-heart-fill me-1 text-danger"></i> 142</span>
                                        <span><i class="bi bi-star-fill me-1 text-warning"></i> 4.5</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-success flex-grow-1">View Recipe</a>
                                        <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Share">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card recipe-card h-100">
                                <div class="position-relative">
                                    <img src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
                                        class="card-img-top" alt="Recipe Image">
                                    <div class="card-actions">
                                        <button class="btn btn-light btn-sm rounded-circle me-2"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="tooltip"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <span
                                        class="badge bg-primary position-absolute bottom-0 start-0 m-3">Breakfast</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Baked Creamy Eggs</h5>
                                    <p class="card-text text-muted">A delicious breakfast recipe with creamy eggs and
                                        fresh herbs.</p>
                                    <div class="recipe-stats d-flex gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-clock me-1"></i> 25 mins</span>
                                        <span><i class="bi bi-heart-fill me-1 text-danger"></i> 142</span>
                                        <span><i class="bi bi-star-fill me-1 text-warning"></i> 4.5</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-success flex-grow-1">View Recipe</a>
                                        <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Share">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card recipe-card h-100">
                                <div class="position-relative">
                                    <img src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
                                        class="card-img-top" alt="Recipe Image">
                                    <div class="card-actions">
                                        <button class="btn btn-light btn-sm rounded-circle me-2"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="tooltip"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <span
                                        class="badge bg-primary position-absolute bottom-0 start-0 m-3">Breakfast</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Baked Creamy Eggs</h5>
                                    <p class="card-text text-muted">A delicious breakfast recipe with creamy eggs and
                                        fresh herbs.</p>
                                    <div class="recipe-stats d-flex gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-clock me-1"></i> 25 mins</span>
                                        <span><i class="bi bi-heart-fill me-1 text-danger"></i> 142</span>
                                        <span><i class="bi bi-star-fill me-1 text-warning"></i> 4.5</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-success flex-grow-1">View Recipe</a>
                                        <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Share">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card recipe-card h-100">
                                <div class="position-relative">
                                    <img src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
                                        class="card-img-top" alt="Recipe Image">
                                    <div class="card-actions">
                                        <button class="btn btn-light btn-sm rounded-circle me-2"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="tooltip"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <span
                                        class="badge bg-primary position-absolute bottom-0 start-0 m-3">Breakfast</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Baked Creamy Eggs</h5>
                                    <p class="card-text text-muted">A delicious breakfast recipe with creamy eggs and
                                        fresh herbs.</p>
                                    <div class="recipe-stats d-flex gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-clock me-1"></i> 25 mins</span>
                                        <span><i class="bi bi-heart-fill me-1 text-danger"></i> 142</span>
                                        <span><i class="bi bi-star-fill me-1 text-warning"></i> 4.5</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-success flex-grow-1">View Recipe</a>
                                        <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Share">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="card recipe-card h-100">
                                <div class="position-relative">
                                    <img src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
                                        class="card-img-top" alt="Recipe Image">
                                    <div class="card-actions">
                                        <button class="btn btn-light btn-sm rounded-circle me-2"
                                            data-bs-toggle="tooltip" title="Edit">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                        <button class="btn btn-light btn-sm rounded-circle" data-bs-toggle="tooltip"
                                            title="Delete">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <span
                                        class="badge bg-primary position-absolute bottom-0 start-0 m-3">Breakfast</span>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Baked Creamy Eggs</h5>
                                    <p class="card-text text-muted">A delicious breakfast recipe with creamy eggs and
                                        fresh herbs.</p>
                                    <div class="recipe-stats d-flex gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-clock me-1"></i> 25 mins</span>
                                        <span><i class="bi bi-heart-fill me-1 text-danger"></i> 142</span>
                                        <span><i class="bi bi-star-fill me-1 text-warning"></i> 4.5</span>
                                    </div>
                                </div>
                                <div class="card-footer bg-transparent border-top-0">
                                    <div class="d-flex gap-2">
                                        <a href="#" class="btn btn-success flex-grow-1">View Recipe</a>
                                        <button class="btn btn-outline-success" data-bs-toggle="tooltip" title="Share">
                                            <i class="bi bi-share"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination -->
                    <div class="paging mt-4">
                        <ul class="mb-0 paginate text-center">
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html"><i
                                        class="bi bi-chevron-left"></i> </a></li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block active"
                                    href="single-view.html">1</a></li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html">2</a>
                            </li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html">3</a>
                            </li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html">4</a>
                            </li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html">5</a>
                            </li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html">6</a>
                            </li>
                            <li class="d-inline-block mt-1 mb-1"><a class="border d-block" href="single-view.html"><i
                                        class="bi bi-chevron-right"></i></a></li>
                        </ul>
                    </div>

                    <!-- Empty State -->
                    <div class="text-center py-5 d-none">
                        <i class="bi bi-journal-text display-1 text-muted"></i>
                        <h3 class="mt-3">No Recipes Yet</h3>
                        <p class="text-muted">Start creating your culinary collection by adding your first recipe.</p>
                        <a href="submit.html" class="btn btn-success">
                            <i class="bi bi-plus-lg"></i> Add Your First Recipe
                        </a>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="../../../../public/lib/jquery/jquery.min.js"></script>
    <script src="../../../../public/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../public/assets/js/theme.min.js"></script>
    <script>
        $(document).ready(function () {
            // Initialize tooltips
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
            var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl)
            });
        });
    </script>

</body>

</html>