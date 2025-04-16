<?php
// TODO: move all the global logic in /config dir
$urlPath = $_SERVER['REQUEST_URI'] ?? null;

global $urlParts;
$urlParts = explode('/', trim($urlPath, '/')) ?? '';
$pageName = $urlParts[3] ?? '';

global $activeLink;
$activeLink = str_replace('.php', '', $pageName);
?>
<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light w-100 pb-2 border-bottom">
        <div class="container-xl">
            <a class="d-flex" href="<?= app('users'); ?>">
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
                <img src="<?= statf('assets/img/icons-svg/list.svg'); ?>" width="40" height="40"
                    alt="Open TemplateOnweb website menu" />
            </button>
            <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
                <div class="offcanvas-header shadow">
                    <a class="d-flex" href="<?= app('users'); ?>">
                        <b class="fs-2 d-block logo text-center"> <span class="family_1">Tasty Food</span>
                            <span class="d-block text-uppercase font_13">Cooking Recipes</span>
                            <span class="d-block font_12 col_green mt-1">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                            </span>
                        </b>
                    </a>
                    <img src="<?= statf('assets/img/icons-svg/x.svg'); ?>" width="40" height="40" class="ms-auto"
                        data-bs-dismiss="offcanvas" aria-label="Close" alt="Close TemplateOnweb website menu" />
                </div>
                <div class="offcanvas-body pt-0 align-items-center">
                    <ul class="navbar-nav align-items-lg-center ms-auto mt-2">
                        <li class="nav-item">
                            <a class="nav-link <?= ($activeLink === 'index' || $activeLink === '') ? 'active' : '' ?>"
                                href="<?= app('users'); ?>" title="Visit home page">
                                Dashboard
                            </a>
                        </li>
                        <li class="nav-item dropdown drop_border">
                            <a class="nav-link dropdown-toggle <?= ($activeLink === 'discover' || $activeLink === 'views') ? 'active' : '' ?>"
                                href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Find Recipes<img src="<?= statf('assets/img/icons-svg/chevron-down.svg'); ?>" width="15"
                                    height="15" alt="Submenu open/close icon">
                            </a>
                            <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= app('users/discover/recipes'); ?>">Discover
                                        Recipes</a></li>
                                <li><a class="dropdown-item border-0" href="<?= app('users/discover/chefs'); ?>">
                                        Discover
                                        Chefs</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $activeLink === 'bookmarks' ? 'active' : '' ?>"
                                href="<?= app('users/bookmarks'); ?>" title="Visit Bookmarked recipes">
                                Bookmarks
                            </a>
                        </li>
                        <li class="nav-item dropdown drop_border">
                            <a class="nav-link dropdown-toggle <?= $activeLink === 'recipe' ? 'active' : '' ?>" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Manage Recipes<img src="<?= statf('assets/img/icons-svg/chevron-down.svg'); ?>"
                                    width="15" height="15" alt="Submenu open/close icon">
                            </a>
                            <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= app('users/recipe/submit'); ?>"> Submit a
                                        Recipe</a></li>
                                <li><a class="dropdown-item border-0" href="<?= app('users/recipe/mine'); ?>"> My
                                        Recipes</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= $activeLink === 'settings' ? 'active' : '' ?>"
                                href="<?= app('users/settings'); ?>" title="Visit Settings">
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
                                    <img src="<?= statf('assets/img/members/jack.jpg'); ?>" class="rounded-circle me-2"
                                        width="37" height="37" alt="User profile picture">
                                </div>
                                <div class="greeting d-flex align-items-start flex-column">
                                    <span class="name">Hello, Jack</span>
                                    <span class="role">User</span>
                                </div>
                            </div>
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"><img
                                    src="<?= statf('assets/img/icons-svg/chevron-down.svg'); ?>" width="15" height="15"
                                    alt="Submenu open/close icon">
                            </a>
                            <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= app('users'); ?>"> Dashboard</a></li>
                                <li><a class="dropdown-item" href="<?= app('users/settings'); ?>">
                                        Settings</a>
                                </li>
                                <li><a class="dropdown-item border-0" href="<?= app('landing'); ?>">
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