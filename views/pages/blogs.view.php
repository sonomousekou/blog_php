<?php ob_start() ?>
<section class="py-7">
<div class="container">
<div class="row">
<div class="offset-xl-2 col-xl-8 offset-lg-1 col-lg-10 col-md-12 col-12">
<div class="text-center mb-5">
<h1 class="display-2 fw-bold">Geeks Newsroom</h1>
<p class="lead">Stories, tips, and tools to inspire you to find your most creative self. Subscribe to get curated content delivered directly to your inbox.</p>
</div>
<!-- Form -->
<form class="row px-md-8 mx-md-8 needs-validation" novalidate>
<div class="mb-3 col ps-0 ms-2 ms-md-0">
    <input type="email" class="form-control" placeholder="Email Address" required />
    <div class="invalid-feedback">Please valid a Email Address</div>
</div>
<div class="mb-3 col-auto ps-0">
    <button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>
</div>
</div>
</div>
</section>
<!-- Content -->
<section class="pb-8">
<div class="container mb-lg-8">
<div class="row">
<div class="col-lg-8 col-md-7 col-12">
<div class="row">

<?php 
    // echo '<pre>';
    // print_r($blogs);
    // echo '</pre>'; 
?>

<?php foreach ($blogs as $blog): ?>

<div class="col-lg-6 col-md-12 col-12">
    <!-- Card -->
    <div class="card mb-4 shadow-lg card-lift">
    <a href="<?= URL . 'blogs/' . $blog->getId() ?>"><img src="<?= 'public/images/blogs/' . $blog->getImage() ?>" class="card-img-top" alt="blogpost" /></a>
    <!-- Card body -->
    <div class="card-body">
        <a href="#" class="fs-5 fw-semibold d-block mb-3 text-primary"><?= htmlspecialchars($blog->getCategorie()) ?></a>
        <a href="<?= URL . 'blogs/' . $blog->getId() ?>">
        <h3><?= htmlspecialchars($blog->getTitre()) ?></h3>
        </a>
        <p><?= htmlspecialchars($blog->getContenu()) ?></p>
        <!-- Media content -->
        <!-- Row  -->
        <div class="row align-items-center g-0 mt-4">
        <div class="col-auto">
            <img src="<?= 'public/images/auteurs/' . $blog->getPhotoAuteur() ?>" alt="avatar" class="rounded-circle avatar-sm me-2" />
        </div>
        <div class="col lh-1">
            <h5 class="mb-1"><?= htmlspecialchars($blog->getAuteur()) ?></h5>
            <p class="fs-6 mb-0"><?= htmlspecialchars($blog->getCreated()) ?></p>
        </div>
        <div class="col-auto">
            <p class="fs-6 mb-0">12 Min Read</p>
        </div>
        </div>
    </div>
    </div>
</div>
<?php endforeach; ?>

            <!-- pagination start -->
            <ul class="pagination mt-4 mb-2">
                <li class="page-item disabled">
                    <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z">
                        </svg>
                    </a>
                </li>
                <li class="page-item active">
                    <a class="page-link mx-1 rounded" href="#">1</a>
                </li>
                <li class="page-item">
                    <a class="page-link mx-1 rounded" href="#">2</a>
                </li>
                <li class="page-item">
                    <a class="page-link mx-1 rounded" href="#">3</a>
                </li>
                <li class="page-item">
                    <a class="page-link mx-1 rounded" href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z">
                        </svg>
                    </a>
                </li>
            </ul>
            <!-- pagination end -->
</div>
</div>
<div class="col-lg-4 col-md-5 col-12 mt-6 mt-md-0">
<!-- search -->
<div class="mb-4">
<div class="mb-3 position-relative">
    <input type="search" class="form-control" placeholder="Search..." />
    <span class="position-absolute end-0 top-0 mt-2 me-3"><i class="bi bi-search fs-5"></i></span>
</div>
</div>
<!-- card -->
<div class="card mb-4 border">
<!-- card body -->
<div class="card-body p-4">
    <h3>Recent Posts</h3>
    <div class="mt-3">
    <!-- list -->
    <ul class="list-unstyled mb-0">
        <li class="mb-3">
        <h4 class="lh-lg"><a href="#" class="text-inherit">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
        </li>
        <li class="mb-3">
        <h4 class="lh-lg"><a href="#" class="text-inherit">Duis placerat mi quis purus feugiat, at bibendum arcu dignissim.</a></h4>
        </li>
        <li class="mb-3">
        <h4 class="lh-lg"><a href="#" class="text-inherit">Morbi sit amet metus nec elit hendrerit luctus.</a></h4>
        </li>
        <li>
        <h4 class="lh-lg"><a href="#" class="text-inherit">Vivamus ac sapien ultricies dolor ullamcorper porttitor.</a></h4>
        </li>
    </ul>
    </div>
</div>
</div>
<!-- card -->
<div class="card mb-4 border">
<!-- card body -->
<div class="card-body p-4">
    <h3>Categories</h3>
    <div class="mt-3">
    <!-- list -->
    <ul class="list-unstyled mb-0 nav nav-x-0 flex-column">
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">Business</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">Marketing</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">Courses</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">Dashboard</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">Landings</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">E-commerce</a>
        </li>
    </ul>
    </div>
</div>
</div>
<!-- card -->
<div class="card mb-4 border">
<!-- card body -->
<div class="card-body p-4">
    <h3>Archive</h3>
    <div class="mt-3">
    <!-- list -->
    <ul class="list-unstyled mb-0 nav nav-x-0 flex-column">
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">March 2021</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">February 2021</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">January 2021</a>
        </li>
        <li class="lh-lg mb-1">
        <i class="fe fe-arrow-right"></i>
        <a href="#" class="text-link d-inline">December 2020</a>
        </li>
    </ul>
    </div>
</div>
</div>
<!-- card -->
<div class="card mb-4 border">
<!-- card body -->
<div class="card-body p-4">
    <h3>Tags</h3>
    <div class="mt-3">
    <a href="#" class="btn btn-light btn-xs mb-2">business</a>
    <a href="#" class="btn btn-light btn-xs mb-2">e-commerce</a>
    <a href="#" class="btn btn-light btn-xs mb-2">course</a>
    <a href="#" class="btn btn-light btn-xs mb-2">dashboard</a>
    <a href="#" class="btn btn-light btn-xs mb-2">landings</a>
    <a href="#" class="btn btn-light btn-xs mb-2">marketing</a>
    </div>
</div>
</div>
</div>
</div>
</div>
</section>
<?php
$titre = "Blogs";
$content = ob_get_clean();
require_once "./views/templates.php";
?>