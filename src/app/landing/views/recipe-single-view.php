<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cooking</title>
    <link href="../../../../public/vendor/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../../../public/assets/css/global.css" rel="stylesheet">
    <link href="../../../../public/assets/css/landing/recipe.css" rel="stylesheet">
</head>

<body>

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
                                <b class="fs-2 d-block logo text-center"> <span class="family_1">Tasty Food</span> <span
                                        class="d-block text-uppercase font_13">Cooking Recipes</span>
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
                                    <a class="nav-link  fs-4 mt-1" href="../index.html" title="Visit home page">
                                        <i class="bi bi-house"></i>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="../about.html" title="Visit home page">
                                        About Us
                                    </a>
                                </li>
                                <li class="nav-item dropdown drop_border">
                                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown"
                                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Recipes<img src="../../../../public/assets/img/icons-svg/chevron-down.svg"
                                            width="15" height="15" alt="Submenu open/close icon">
                                    </a>
                                    <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="index.html"> Recipes</a></li>
                                        <li><a class="dropdown-item border-0" href="single-view.html"> Recipe Detail</a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item dropdown drop_border">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Blog<img src="../../../../public/assets/img/icons-svg/chevron-down.svg"
                                            width="15" height="15" alt="Submenu open/close icon">
                                    </a>
                                    <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="../blog/index.html"> Blog</a></li>
                                        <li><a class="dropdown-item border-0" href="../blog/single-view.html"> Blog
                                                Detail</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="../team.html" title="Visit home page">
                                        Team
                                    </a>
                                </li>

                                <li class="nav-item dropdown drop_border">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Pages<img src="../../../../public/assets/img/icons-svg/chevron-down.svg"
                                            width="15" height="15" alt="Submenu open/close icon">
                                    </a>
                                    <ul class="dropdown-menu drop_1 shadow" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="../../auth/login.html"> Login</a></li>
                                        <li><a class="dropdown-item border-0"
                                                href="../../auth/register.html">Register</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="../contact.html" title="Visit home page">
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                            <ul class="navbar-nav align-items-lg-center ms-auto mt-2">
                                <li class="nav-item">
                                    <a class="nav-link button submit-recipe-btn" href="../../auth/index.html"
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

        <main class="site-main">
            <section id="center" class="pt-4 pb-4 center_o shadow">
                <div class="container-xl">
                    <div class="row center_o1 text-center">
                        <div class="col-md-12">
                            <span class="col_green icon_cup fs-2"><i class="bi bi-cup-hot"></i></span>
                            <ul class="mt-3 mb-0">
                                <li class="d-inline-block"> <a href="#">Home</a></li>
                                <li class="d-inline-block mx-2 text-muted">|</li>
                                <li class="d-inline-block col_green"> Recipe Detail</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="recipe" class="pt-5 pb-5 img-nr">
                <div class="container-xl">
                    <div class="row recipe_dt1 row border-bottom pb-4 mb-4">
                        <div class="col-md-12">
                            <ul class="mb-0 font_14 d-flex justify-content-between flex-wrap">
                                <li class="me-2">
                                    <b class="d-block mb-2">Recipe Type</b>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">(Any)</option>
                                        <option value="1">Breakfast</option>
                                        <option value="2">Dessert</option>
                                        <option value="3">Dinner</option>
                                        <option value="4">Lunch</option>
                                        <option value="5">Fruits</option>
                                        <option value="6">Starter</option>
                                    </select>
                                </li>
                                <li class="me-2">
                                    <b class="d-block mb-2">Course</b>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">(Any)</option>
                                        <option value="1">Breakfast</option>
                                        <option value="2">Dessert</option>
                                        <option value="3">Dinner</option>
                                        <option value="4">Lunch</option>
                                        <option value="5">Fruits</option>
                                        <option value="6">Starter</option>
                                    </select>
                                </li>
                                <li class="me-2">
                                    <b class="d-block mb-2">Cuisine</b>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">(Any)</option>
                                        <option value="1">English</option>
                                        <option value="2">Italian</option>
                                        <option value="3">Spanish</option>
                                        <option value="4">Canadian</option>
                                        <option value="5">French</option>
                                        <option value="6">Indian</option>
                                    </select>
                                </li>
                                <li class="me-2">
                                    <b class="d-block mb-2">Skill Level</b>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected="">(Any)</option>
                                        <option value="1">Easy</option>
                                        <option value="2">Expert</option>
                                        <option value="3">Medium</option>
                                        <option value="4">Moderate</option>
                                    </select>
                                </li>
                                <li>
                                    <b class="d-block mb-2">Skill Level</b>
                                    <span class="d-block text-center"><a class="button px-3" href="#"><i
                                                class="bi bi-search"></i></a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row recipe_1">
                        <div class="col-md-8 col-lg-9">
                            <div class="recipe_dt">
                                <h4 class="mb-4 head_after">Dealing With a Diet Plan</h4>
                                <div class="recipe_dt1 position-relative">
                                    <div class="recipe_dt1_inner">
                                        <a href="#"><img
                                                src="../../../../public/assets/img/contents/menus/breakfast/kalderatang-itlog.jpg"
                                                class="img-fluid" alt="abc"></a>
                                    </div>
                                    <div class="recipe_dt1_inner1 position-absolute top-0 text-end p-3 w-100">
                                        <h6 class="mb-0"><a class="d-inline-block bg_green p-2 text-white px-4 tag-box2"
                                                href="#">Watch
                                                Video</a></h6>
                                    </div>
                                </div>
                                <div class="recipe_dt12 bg-black">
                                    <ul class="justify-content-between mb-0 d-flex flex-wrap">
                                        <li class="text-white p-4  border-end"><span class="text-white-50">Yield:</span>
                                            20
                                        </li>
                                        <li class="text-white p-4  border-end"><span
                                                class="text-white-50">Serving:</span>
                                            12
                                        </li>
                                        <li class="text-white p-4  border-end"><span class="text-white-50">Prep
                                                time:</span>
                                            6 m
                                        </li>
                                        <li class="text-white p-4  border-end"><span class="text-white-50">Cook
                                                time:</span>
                                            30
                                            m</li>
                                        <li class="text-white p-4"><span class="text-white-50">Ready in:</span> 40 m
                                        </li>
                                    </ul>
                                </div>

                                <div class="recipe_dt13 mt-4 shadow p-4 box">
                                    <ul class="mb-0  d-flex justify-content-between flex-wrap">
                                        <li><span class="font_14"> Cuisine: <a class="fw-bold" href="#">Spanish</a>
                                                <span class="mx-3"> Course: <a class="fw-bold"
                                                        href="#">Brunch</a></span>
                                                Skill
                                                Level: <a class="fw-bold" href="#">Medium</a> </span></li>
                                        <li>
                                            <span class="col_green">
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star-fill"></i>
                                                <i class="bi bi-star"></i>
                                            </span>
                                            (4 / 5)
                                        </li>
                                    </ul>
                                    <hr>
                                    <p class="mt-4">Lorem Ipsum is simply dummy text of the printing and typesetting
                                        industry.
                                        Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,
                                        when
                                        an
                                        unknown printer took a galley of type and scrambled it to make a type specimen
                                        book.
                                        It
                                        has survived not only five centuries, but also the leap into electronic
                                        typesetting,
                                        remaining essentially unchanged.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum
                                        has been the industry’s standard dummy text ever since the 1500s, when an
                                        unknown
                                        printer took a galley of type and scrambled it to make a type specimen book. It
                                        has
                                        survived not only five centuries, but also the leap into electronic typesetting,
                                        remaining essentially unchanged.</p>
                                    <div class="recipe_dt13_inner border_light p-3 mt-4 box">
                                        <div class="recipe_dt13_inner1 row  row-cols-1 row-cols-md-2">
                                            <div class="col">
                                                <div class="recipe_dt13_inner1_left">
                                                    <h5 class="mb-4">Ingredients</h5>
                                                    <ul
                                                        class="nav nav-tabs mb-0 font_14 gap-3 flex-wrap tab_click border-0">
                                                        <li class="nav-item">
                                                            <a href="#profile1" data-bs-toggle="tab"
                                                                aria-expanded="true" class="nav-link active">
                                                                <span class="d-md-block">Shake</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="#profile2" data-bs-toggle="tab"
                                                                aria-expanded="true" class="nav-link">
                                                                <span class="d-md-block">Marination</span>
                                                            </a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a href="#profile3" data-bs-toggle="tab"
                                                                aria-expanded="true" class="nav-link">
                                                                <span class="d-md-block">Raita</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <div class="tab-content mt-4">

                                                        <div class="tab-pane active" id="profile1">
                                                            <div class="profile1_inner">
                                                                <div class="d-flex font_14">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">Vegetable oil spray for misting</a>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">18.25 ounces plain devil's food cake
                                                                            mix
                                                                            or
                                                                            devil's food</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 can (21 ounces) cherry pie
                                                                            filling</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">2 large eggs</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 teaspoon pure almond extract</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 cup sugar</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1/3 cup butter</a>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="profile2">
                                                            <div class="profile1_inner">
                                                                <div class="d-flex font_14">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">4 teaspoons soyasaus</a>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">2 cup lemon juice</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 cup water</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">2 teaspoons soda</a>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="profile3">
                                                            <div class="profile1_inner">
                                                                <div class="d-flex font_14">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 cup of yogurt</a>
                                                                    </label>
                                                                </div>
                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1/4 cup of water</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 teaspoon salt</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1 teaspoon dry coriander</a>
                                                                    </label>
                                                                </div>

                                                                <div class="d-flex font_14 mt-3">
                                                                    <input class="form-check-input me-2" type="checkbox"
                                                                        value="" id="invalidCheck" required="">
                                                                    <label class="form-check-label" for="invalidCheck">
                                                                        <a href="#">1/2 teaspoon cumin</a>
                                                                    </label>
                                                                </div>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="recipe_dt13_inner1_right">
                                                    <h5 class="mb-4">Nutrients</h5>
                                                    <ul class="mb-0 font_14">
                                                        <li class="border-bottom pb-2 mb-2">
                                                            <span class="d-block">Calories</span>
                                                            <b class="d-block">500</b>
                                                        </li>
                                                        <li
                                                            class="justify-content-evenly d-flex border-bottom pb-2 mb-2">
                                                            <span>
                                                                <span class="d-block">Protine</span>
                                                                <b class="d-block">6.60g</b>
                                                            </span>
                                                            <span>
                                                                <span class="d-block">Fat Saturated</span>
                                                                <b class="d-block">36.40g</b>
                                                            </span>
                                                        </li>
                                                        <li
                                                            class="justify-content-between d-flex border-bottom pb-2 mb-2">
                                                            <span>
                                                                <span class="d-block">Deitary Fiber</span>
                                                                <b class="d-block">60g</b>
                                                            </span>
                                                            <span>
                                                                <span class="d-block">Sodium</span>
                                                                <b class="d-block">30g</b>
                                                            </span>
                                                        </li>
                                                        <li
                                                            class="justify-content-between d-flex border-bottom pb-2 mb-2">
                                                            <span>
                                                                <span class="d-block">Fat Total</span>
                                                                <b class="d-block">40g</b>
                                                            </span>
                                                            <span>
                                                                <span class="d-block">Energy</span>
                                                                <b class="d-block">600mg</b>
                                                            </span>
                                                        </li>
                                                        <li class="border-bottom">
                                                            <span class="d-block">Cholesterol</span>
                                                            <b class="d-block">70g</b>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="recipe_dt13_inner2 mt-5">
                                            <h5 class="head_after">Step by step method</h5>
                                            <b class="mt-4 d-block">Step 1</b>
                                            <p class="mt-4 mb-0">Place a rack in the center of the oven and preheat the
                                                oven
                                                to
                                                350 degrees F. Lightly mist a 13- by 9-inch baking pan with vegetable
                                                oil
                                                spray.
                                                Set the pan aside.</p>
                                            <b class="mt-5 d-block">Step 2</b>
                                            <p class="mt-4 mb-0">Place the cake mix, cherry pie filling, eggs, and
                                                almond
                                                extract in a large mixing bowl. Blend with an electric mixer on low
                                                speed
                                                for 1
                                                minute. Stop the machine and scrape down the sides of the bowl with a
                                                rubber
                                                spatula. Increase the mixer speed to medium and beat 2 minutes more,
                                                scraping
                                                the sides down again if needed. The batter should look thick and well
                                                blended.
                                                Pour the batter into the prepared pan, smoothing the top with the rubber
                                                spatula. Place the pan in the oven.</p>
                                            <b class="mt-5 d-block">Step 3</b>
                                            <p class="mt-4 mb-0">Bake the cake until it springs back when lightly
                                                pressed
                                                with
                                                your finger and just starts to pull away from the sides of the pan, 30
                                                to 35
                                                minutes. Remove the pan from the oven and place it on a wire rack while
                                                you
                                                prepare the glaze.</p>
                                            <b class="mt-5 d-block">Step 4</b>
                                            <p class="mt-4 mb-0">For the glaze, place the sugar, butter, and milk in a
                                                small
                                                saucepan over medium-low heat and cook, stirring constantly, until the
                                                mixture
                                                comes to a boil. Boil, stirring constantly, for 1 minute. Remove the pan
                                                from
                                                the heat and stir in the chocolate chips. When the chips have melted and
                                                the
                                                glaze is smooth, pour it over the warm cake so it covers the entire
                                                surface.
                                                The
                                                glaze will be thin but will firm up. Cool the cake for 20 minutes before
                                                cutting
                                                into squares and serving.</p>
                                            <b class="mt-5 d-block">Step 5</b>
                                            <p class="mt-4 mb-0">Store this cake, covered in aluminum foil, at room
                                                temperature
                                                for up to 5 days or in the refrigerator for up to 1 week. Or freeze the
                                                cake,
                                                wrapped in foil, for up to 6months. Thaw the cake overnight on the
                                                counter
                                                before serving.</p>
                                        </div>
                                        <div class="recipe_dt13_inner3 mt-5 shadow border_1 p-4 box">
                                            <h5 class="mb-4">Tips & variations</h5>
                                            <ul class="mb-0 family_2">
                                                <li class="d-flex"><i class="bi bi-check me-2 col_green fs-3"></i> Rinse
                                                    the
                                                    chicken pieces in cold water and pat dry. Place the chicken in a
                                                    large,
                                                    resealable zip-top bag and pour in the marinade. Toss the chicken
                                                    inside
                                                    the
                                                    bag to cover.</li>
                                                <li class="d-flex mt-3"><i class="bi bi-check me-2 col_green fs-3"></i>
                                                    Sed
                                                    ut
                                                    perspiciatis unde omnis iste natus error voluptate accusantium
                                                    doloremque
                                                    laudantium, totam rem aperiam eaque ipsa quae abillo inventore
                                                    veritatis
                                                </li>
                                                <li class="d-flex mt-3"><i class="bi bi-check me-2 col_green fs-3"></i>
                                                    Beatae
                                                    magnam, incidunt temporibus minus expedita, officia tempore delectus
                                                    molestiae voluptates architecto dignissimos aut quasi nihil
                                                    explicabo
                                                    porro
                                                    harum quis. </li>
                                            </ul>

                                        </div>
                                        <hr class="mt-4 mb-4">
                                        <div class="recipe_dt13_inner3">
                                            <ul class="mb-0 tags">
                                                <li class="d-inline-block">Tags:</li>
                                                <li class="d-inline-block"><a href="#">Gastronomy</a></li>
                                                <li class="d-inline-block"><a href="#">Restaurant</a></li>
                                                <li class="d-inline-block"><a href="#">Eat</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="recipe_dt4 row mt-4">
                                    <div class="col-md-4 pe-0">
                                        <div class="recipe_dt4_left">
                                            <a href="#"><img src="../../../../public/assets/img/members/jack.jpg"
                                                    class="img-fluid" alt="abc"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 ps-0">
                                        <div class="recipe_dt4_right shadow p-4">
                                            <ul>
                                                <li class="d-flex justify-content-between">
                                                    <b class="text-uppercase"><a href="#">Lorem Amet</a></b>
                                                    <span class="fs-5">
                                                        <a class="mx-1" href="#"><i class="bi bi-facebook"></i></a>
                                                        <a class="mx-1" href="#"><i class="bi bi-linkedin"></i></a>
                                                        <a class="mx-1" href="#"><i class="bi bi-pinterest"></i></a>
                                                        <a class="mx-1" href="#"><i class="bi bi-instagram"></i></a>
                                                        <a class="mx-1" href="#"><i class="bi bi-dribbble"></i></a>
                                                    </span>
                                                </li>
                                            </ul>
                                            <hr class="line">
                                            <span>Executive Chef</span>
                                            <p class="mt-3">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                                                diam
                                                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                                sed
                                                diam
                                                voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                            <b class="d-block font_14 mt-4"><a href="#">Read More <i
                                                        class="bi bi-arrow-right ms-1"></i></a></b>
                                        </div>
                                    </div>
                                </div>

                                <div class="recipe_dt5  mt-4">
                                    <h4 class="mb-4 head_after">Related Recipes</h4>
                                    <div class="recipe_1_left2o row row-cols-1 row-cols-md-3">
                                        <div class="col">
                                            <div class="recipe_1_left2o1">
                                                <div class="recipe_1_left2_inner_left position-relative">
                                                    <div class="recipe_1_left2_inner_left1">
                                                        <a href="#"><img
                                                                src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"
                                                                class="img-fluid" alt="abc"></a>
                                                    </div>
                                                    <div
                                                        class="recipe_1_left2_inner_left2 position-absolute top-0 text-end p-3 w-100">
                                                        <h6 class="mb-0 font_14"><a
                                                                class="d-inline-block bg_green p-2 text-white px-4 tag-box2"
                                                                href="#">Vegan</a></h6>
                                                    </div>
                                                </div>
                                                <div class="recipe_1_left2o1i p-2 shadow">
                                                    <div class="recipe_1_left2o1i1 p-3 border_light box">
                                                        <b class="font_14 d-block"><a href="#">PRESENTATION IS AS
                                                                IMPORTANT
                                                                AS
                                                                TASTE</a></b>
                                                        <hr class="line">
                                                        <p> Cum quo odit molestiae repellendus, repudiandae consequatur
                                                        </p>
                                                        <span class="font_14"> <i
                                                                class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
                                                            Ipsum <i
                                                                class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
                                                            22/02/2024</span>
                                                        <span class="col_green d-block mt-3">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star"></i>
                                                            (4 / 5)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="recipe_1_left2o1">
                                                <div class="recipe_1_left2_inner_left position-relative">
                                                    <div class="recipe_1_left2_inner_left1">
                                                        <a href="#"><img
                                                                src="../../../../public/assets/img/contents/menus/breakfast/burger-set.jpg"
                                                                class="img-fluid" alt="abc"></a>
                                                    </div>
                                                    <div
                                                        class="recipe_1_left2_inner_left2 position-absolute top-0 text-end p-3 w-100">
                                                        <h6 class="mb-0 font_14"><a
                                                                class="d-inline-block bg_green p-2 text-white px-4 tag-box2"
                                                                href="#">Hot</a></h6>
                                                    </div>
                                                </div>
                                                <div class="recipe_1_left2o1i p-2 shadow">
                                                    <div class="recipe_1_left2o1i1 p-3 border_light box">
                                                        <b class="font_14 d-block"><a href="#">PASTO PIZZA WITH EXTRA
                                                                TOPPINGS</a></b>
                                                        <hr class="line">
                                                        <p> Cum quo odit molestiae repellendus, repudiandae consequatur
                                                        </p>
                                                        <span class="font_14"> <i
                                                                class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
                                                            Lorem <i
                                                                class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
                                                            23/02/2024</span>
                                                        <span class="col_green d-block mt-3">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-half"></i>
                                                            (4.5 / 5)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="recipe_1_left2o1">
                                                <div class="recipe_1_left2_inner_left position-relative">
                                                    <div class="recipe_1_left2_inner_left1">
                                                        <a href="#"><img
                                                                src="../../../../public/assets/img/contents/menus/breakfast/morning-fresh.jpg"
                                                                class="img-fluid" alt="abc"></a>
                                                    </div>
                                                    <div
                                                        class="recipe_1_left2_inner_left2 position-absolute top-0 text-end p-3 w-100">
                                                        <h6 class="mb-0 font_14"><a
                                                                class="d-inline-block bg_green p-2 text-white px-4 tag-box2"
                                                                href="#">Best</a></h6>
                                                    </div>
                                                </div>
                                                <div class="recipe_1_left2o1i p-2 shadow">
                                                    <div class="recipe_1_left2o1i1 p-3 border_light box">
                                                        <b class="font_14 d-block"><a href="#">DEALING WITH A DIET
                                                                PLAN</a></b>
                                                        <hr class="line">
                                                        <p> Cum quo odit molestiae repellendus, repudiandae consequatur
                                                        </p>
                                                        <span class="font_14"> <i
                                                                class="bi bi-person-fill col_green me-1 fs-6 align-middle"></i>
                                                            Augue <i
                                                                class="bi bi-calendar3 col_green me-1 fs-6 align-middle ms-2"></i>
                                                            24/02/2024</span>
                                                        <span class="col_green d-block mt-3">
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            <i class="bi bi-star-fill"></i>
                                                            (5 / 5)
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-3">
                            <div class="recipe_1_right">
                                <div class="recipe_1_right1">
                                    <h5 class="head_after mb-4">Recent Recipes</h5>
                                    <ul class="mb-0 recipes-downward-fmt">
                                        <li class="d-flex border-bottom  pb-3 mb-3">
                                            <span><a href="#"><img width="100" alt="abc"
                                                        src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"></a></span>
                                            <span class="flex-column ms-3">
                                                <b class="d-block font_14"><a href="#">Nulla Quis Sem Nibh
                                                        Imperdiet</a></b>
                                                <span class="mt-1 font_14 d-block">Jan 16, 2016</span>
                                            </span>
                                        </li>
                                        <li class="d-flex border-bottom  pb-3 mb-3">
                                            <span><a href="#"><img width="100" alt="abc"
                                                        src="../../../../public/assets/img/contents/menus/breakfast/morning-fresh.jpg"></a></span>
                                            <span class="flex-column ms-3">
                                                <b class="d-block font_14"><a href="#">Ligula in libero Sed lacinia
                                                        nunc</a></b>
                                                <span class="mt-1 font_14 d-block">Jan 18, 2016</span>
                                            </span>
                                        </li>
                                        <li class="d-flex border-bottom  pb-3 mb-3">
                                            <span><a href="#"><img width="100" alt="abc"
                                                        src="../../../../public/assets/img/contents/menus/breakfast/burger-set.jpg"></a></span>
                                            <span class="flex-column ms-3">
                                                <b class="d-block font_14"><a href="#">Consectetur Elit Integer Nec
                                                        Libero</a></b>
                                                <span class="mt-1 font_14 d-block">Jan 19, 2016</span>
                                            </span>
                                        </li>

                                        <li class="d-flex">
                                            <span><a href="#"><img width="100" alt="abc"
                                                        src="../../../../public/assets/img/contents/menus/launch/super-steak.jpg"></a></span>
                                            <span class="flex-column ms-3">
                                                <b class="d-block font_14"><a href="#">Atque nulla illo rem eveniet
                                                        nemo,</a></b>
                                                <span class="mt-1 font_14 d-block">Jan 29, 2016</span>
                                            </span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="recipe_1_right1 mt-5">
                                    <h5 class="head_after mb-4">Categories</h5>
                                    <ul class="mb-0 font_14">
                                        <li><a class="d-block pb-3  border-bottom" href="#"><i
                                                    class="bi bi-chevron-right me-1 col_green"></i> Breakfast <span
                                                    class="float-end">23</span></a></li>
                                        <li><a class="d-block py-3  border-bottom" href="#"><i
                                                    class="bi bi-chevron-right me-1 col_green"></i> Desssert <span
                                                    class="float-end">12</span></a></li>
                                        <li><a class="d-block py-3 border-bottom" href="#"><i
                                                    class="bi bi-chevron-right me-1 col_green"></i> Dinner <span
                                                    class="float-end">16</span></a></li>
                                        <li><a class="d-block py-3 border-bottom" href="#"><i
                                                    class="bi bi-chevron-right me-1 col_green"></i> Fruits <span
                                                    class="float-end">09</span></a></li>
                                        <li><a class="d-block py-3  border-bottom" href="#"><i
                                                    class="bi bi-chevron-right me-1 col_green"></i> Lunch <span
                                                    class="float-end">07</span></a></li>
                                        <li><a class="d-block pt-3" href="#"><i
                                                    class="bi bi-chevron-right me-1 col_green"></i>
                                                Popular <span class="float-end">17</span></a></li>
                                    </ul>
                                </div>
                                <div class="recipe_1_right1 mt-5">
                                    <h5 class="head_after mb-4">Measurements</h5>
                                    <ul class="mb-0 font_14">
                                        <li class="d-inline-block border-bottom pb-3 mb-3"><i
                                                class="bi bi-chevron-double-right col_green me-1 align-middle"></i> 1
                                            cup =
                                            250
                                            ml = 16 Tablespoons</li>
                                        <li class="d-inline-block border-bottom pb-3 mb-3"><i
                                                class="bi bi-chevron-double-right col_green me-1 align-middle"></i> 1/2
                                            cup
                                            =
                                            125 ml = 8 Tablespoons</li>
                                        <li class="d-inline-block border-bottom pb-3 mb-3"><i
                                                class="bi bi-chevron-double-right col_green me-1 align-middle"></i> 1/3
                                            cup
                                            = 83
                                            ml = 5.3 Tablespoons</li>
                                        <li class="d-inline-block border-bottom pb-3 mb-3"><i
                                                class="bi bi-chevron-double-right col_green me-1 align-middle"></i> 1/4
                                            cup
                                            = 62
                                            ml = 4 Tablespoons</li>
                                        <li class="d-inline-block"><i
                                                class="bi bi-chevron-double-right col_green me-1 align-middle"></i> 1
                                            Pinch
                                            =
                                            1/8 Teaspoon</li>
                                    </ul>
                                </div>
                                <div class="recipe_1_right1 mt-5">
                                    <h5 class="head_after mb-4">Tags</h5>
                                    <ul class="mb-0 tags">
                                        <li class="d-inline-block"><a href="#">Food</a></li>
                                        <li class="d-inline-block"><a href="#">Gastronomy</a></li>
                                        <li class="d-inline-block"><a href="#">Restaurant</a></li>
                                        <li class="d-inline-block"><a href="#">Eat</a></li>
                                        <li class="d-inline-block"><a href="#">Rest</a></li>
                                        <li class="d-inline-block"><a href="#">Montreal</a></li>
                                        <li class="d-inline-block"><a href="#">Fast Food</a></li>
                                        <li class="d-inline-block"><a href="#">Recipes</a></li>
                                        <li class="d-inline-block"><a href="#">Coffee</a></li>
                                    </ul>
                                </div>
                                <div class="recipe_1_right1 mt-5">
                                    <h5 class="head_after mb-4">Newsletter</h5>
                                    <b class="text-uppercase font_12 d-block">Subscribe Now!</b>
                                    <p class="mt-2 mb-3">Aliqm Lorem Ante, Dapibus In, Viverra Feugiat Phasellus.</p>
                                    <div class="input-group">
                                        <input type="text" class="form-control font_12"
                                            placeholder="Your Email address...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-primary bg_green border-0 rounded-0 p-3 px-4 font_12"
                                                type="button">
                                                SEND </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="footer_m pt-5 pb-5">
                <div class="container-xl">
                    <div class="row footer_1">
                        <div class="col-md-3">
                            <div class="footer_1_left">
                                <b class="fs-2 d-block logo text-center text-white"> <span class="family_1">FIL
                                        EATS</span> <span class="d-block text-uppercase font_13">Cooking
                                        Recipes</span>
                                    <span class="d-block font_12 col_green mt-1">
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                        <i class="bi bi-star-fill"></i>
                                    </span>
                                </b>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="footer_1_right">
                                <p class="mb-0 mt-3 text-white-50">Lorem ipsum dolor sit amet, consetetur sadipscing
                                    elitr,
                                    sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                                    with
                                    an
                                    extra ordinary design and quality development features in low</p>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 footer_2 mt-4 pt-4">
                        <div class="col">
                            <div class="footer_2_left">
                                <b class="text-white d-block fs-5">Recent Recipes</b>
                                <hr class="line">
                                <ul class="mb-0 recipes-downward-fmt">
                                    <li class="d-flex border-bottom  pb-3 mb-3">
                                        <span><a href="#"><img width="100" alt="abc"
                                                    src="../../../../public/assets/img/contents/menus/breakfast/baked-creamy.jpg"></a></span>
                                        <span class="flex-column ms-3">
                                            <b class="d-block font_14"><a class="text-white-50" href="#">Nulla Quis
                                                    Sem
                                                    Nibh
                                                    Imperdiet</a></b>
                                            <span class="mt-1 font_13 d-block text-white-50">Jan 16, 2016</span>
                                        </span>
                                    </li>
                                    <li class="d-flex border-bottom  pb-3 mb-3">
                                        <span><a href="#"><img width="100" alt="abc"
                                                    src="../../../../public/assets/img/contents/menus/launch/tooplate-soup.jpg"></a></span>
                                        <span class="flex-column ms-3">
                                            <b class="d-block font_14"><a class="text-white-50" href="#">Ligula in
                                                    libero
                                                    Sed lacinia nunc</a></b>
                                            <span class="mt-1 font_13 d-block text-white-50">Jan 18, 2016</span>
                                        </span>
                                    </li>
                                    <li class="d-flex">
                                        <span><a href="#"><img width="100" alt="abc"
                                                    src="../../../../public/assets/img/contents/menus/dinner/salmon.jpg"></a></span>
                                        <span class="flex-column ms-3">
                                            <b class="d-block font_14"><a class="text-white-50" href="#">Consectetur
                                                    Elit
                                                    Integer Nec Libero</a></b>
                                            <span class="mt-1 font_13 d-block text-white-50">Jan 19, 2016</span>
                                        </span>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer_1_left">
                                <b class="text-white d-block fs-5">Contact Us</b>
                                <hr class="line">
                                <span class="fw-bold text-white-50 d-block mb-2">Address:</span>
                                <span class="text-white-50  d-block font_14 ps-2">Something Street lorem porta quis
                                    sem
                                    eget
                                    New York 2003 SU</span>
                                <span class="fw-bold text-white-50 mt-3 d-block mb-2">Open hours:</span>
                                <span class="text-white-50 d-block font_14 ps-2">Mon – Fri: 11AM – 8PM</span>
                                <span class="fw-bold text-white-50 mt-3 d-block mb-2">Cell Phone:</span>
                                <span class="text-white-50 mb-0 d-block font_14 ps-2">+(000) 345 67 89</span>
                            </div>
                        </div>
                        <div class="col">
                            <div class="footer_1_left">
                                <b class="text-white d-block fs-5">Subscribe Us</b>
                                <hr class="line">
                                <input class="form-control bg-dark border-0 text-white" type="text">
                                <span class="d-block mt-3"><a class="button py-2" href="#">Subscribe</a></span>
                                <b class="text-white d-block fs-5 mt-4">Follow Us</b>
                                <hr class="line">
                                <ul class="mb-0 d-flex social_brands">
                                    <li><a class="bg_green d-inline-block text-white text-center" href="#"><i
                                                class="bi bi-facebook"></i></a></li>
                                    <li class="ms-2"><a class="bg-success d-inline-block text-white text-center"
                                            href="#"><i class="bi bi-instagram"></i></a></li>
                                    <li class="ms-2"><a class="bg-warning d-inline-block text-white text-center"
                                            href="#"><i class="bi bi-linkedin"></i></a></li>
                                    <li class="ms-2"><a class="bg-info d-inline-block text-white text-center"
                                            href="#"><i class="bi bi-pinterest"></i></a></li>
                                    <li class="ms-2"><a class="bg-danger d-inline-block text-white text-center"
                                            href="#"><i class="bi bi-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="footer_bottom1 row mt-4 pt-4">
                        <div class="col-md-4">
                            <div class="footer_bottom1_right">
                                <ul class="font_13 mb-0">
                                    <li class="d-inline-block"><a class="text-white-50 link" href="#"> Home</a></li>
                                    <li class="d-inline-block mx-2 text-muted">|</li>
                                    <li class="d-inline-block"><a class="text-white-50 link" href="#"> About Us</a>
                                    </li>
                                    <li class="d-inline-block mx-2 text-muted">|</li>
                                    <li class="d-inline-block"><a class="text-white-50 link" href="#"> News</a></li>
                                    <li class="d-inline-block mx-2 text-muted">|</li>
                                    <li class="d-inline-block"><a class="text-white-50 link" href="#"> Contact
                                            Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="footer_bottom1_left text-end">
                                <p class="mb-0 text-white-50">© 2013 Your Website Name. All Rights Reserved | Design
                                    by
                                    <a class="col_green fw-bold" href="http://www.templateonweb.com">TemplateOnWeb</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="../../../../public/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../public/assets/js/theme.min.js"></script>

</body>

</html>