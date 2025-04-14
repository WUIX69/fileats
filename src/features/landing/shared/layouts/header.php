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
            <a class="d-flex" href="<?= app('landing'); ?>">
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
                    <a class="d-flex" href="<?= app('landing'); ?>">
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
                            <a class="nav-link <?= ($activeLink === 'index' || $activeLink === '') ? 'active' : '' ?> fs-4 mt-1"
                                href="<?= app('landing'); ?>" title="Visit home page">
                                <i class="bi bi-house"></i>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $activeLink === 'about' ? 'active' : '' ?>"
                                href="<?= app('landing/about'); ?>" title="Visit home page">
                                About Us
                            </a>
                        </li>
                        <li class="nav-item dropdown drop_border">
                            <a class="nav-link dropdown-toggle <?= $activeLink === 'recipe' ? 'active' : '' ?>" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Recipes<img src="<?= statf('assets/img/icons-svg/chevron-down.svg'); ?>" width="15"
                                    height="15" alt="Submenu open/close icon">
                            </a>
                            <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= app('landing/recipe/'); ?>"> Recipes</a></li>
                                <li><a class="dropdown-item border-0" href="<?= app('landing/recipe/single-view'); ?>">
                                        Recipe
                                        Detail</a>
                                </li>
                            </ul>
                        </li>


                        <li class="nav-item dropdown drop_border">
                            <a class="nav-link dropdown-toggle <?= $activeLink === 'blog' ? 'active' : '' ?>" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Blog<img src="<?= statf('assets/img/icons-svg/chevron-down.svg'); ?>" width="15"
                                    height="15" alt="Submenu open/close icon">
                            </a>
                            <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= app('landing/blog/'); ?>"> Blog</a></li>
                                <li><a class="dropdown-item border-0" href="<?= app('landing/blog/single-view'); ?>">
                                        Blog
                                        Detail</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $activeLink === 'team' ? 'active' : '' ?>"
                                href="<?= app('landing/team'); ?>" title="Visit home page">
                                Team
                            </a>
                        </li>

                        <li class="nav-item dropdown drop_border">
                            <a class="nav-link dropdown-toggle <?= $activeLink === 'auth' ? 'active' : '' ?>" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Pages<img src="<?= statf('assets/img/icons-svg/chevron-down.svg'); ?>" width="15"
                                    height="15" alt="Submenu open/close icon">
                            </a>
                            <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="<?= app('auth'); ?>"> Login</a></li>
                                <li><a class="dropdown-item border-0" href="<?= app('auth/register'); ?>">Register</a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link <?= $activeLink === 'contact' ? 'active' : '' ?>"
                                href="<?= app('landing/contanct'); ?>" title="Visit home page">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav align-items-lg-center ms-auto mt-2">
                        <li class="nav-item">
                            <a class="nav-link submit-recipe-btn button" href="<?= app('auth'); ?>"
                                title="Submit Recipe">
                                Submit Recipe
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>