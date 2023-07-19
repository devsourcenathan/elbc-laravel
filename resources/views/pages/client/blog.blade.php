@extends('partials.main')

@section('content')
<!-- Blog -->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center mt-3">
            <h1 class="fw-bolder">Bienvenue sur notre blog!</h1>
            <p class="lead">Vous verrez ici nos actualités continues</p>
        </div>
    </div>
</header>
<!-- Blog -->
<section id="blog">
    <div class="container">
        <div class="row" style="margin-top: -70px;">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Featured blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" src="../img/blog/WhatsApp Image 2023-01-02 at 17.58.26.jpeg" height="500" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">January 1, 2022</div>
                        <h2 class="card-title">Featured Post Title</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!</p>
                        <a class="btn btn-md" href="blog-comment.html" style="color: #fff; background-color: #ff4d29;">Voir plus →</a>
                    </div>
                </div>
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="../img/blog/WhatsApp Image 2023-01-02 at 17.58.265.jpeg" height="300" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-md" href="blog-comment.html" style="color: #fff; background-color: #ff4d29;">Voir plus →</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="../img/blog/WhatsApp Image 2023-01-02 at 17.58.27.jpeg" height="300" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-md" href="blog-comment.html" style="color: #fff; background-color: #ff4d29;">Voir plus →</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="../img/blog/WhatsApp Image 2023-01-02 at 17.58.265.jpeg" height="300" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla.</p>
                                <a class="btn btn-md" href="blog-comment.html" style="color: #fff; background-color: #ff4d29;">Voir plus →</a>
                            </div>
                        </div>
                        <!-- Blog post-->
                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="../img/blog/WhatsApp Image 2023-01-02 at 17.58.27.jpeg" height="300" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">January 1, 2022</div>
                                <h2 class="card-title h4">Post Title</h2>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam.</p>
                                <a class="btn btn-md" href="blog-comment.html" style="color: #fff; background-color: #ff4d29;">Voir plus →</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">
                        <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">prev</a></li>
                        <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                        <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                        <li class="page-item"><a class="page-link" href="#!">15</a></li>
                        <li class="page-item"><a class="page-link" href="#!">next</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-md" id="button" style="color: #fff; background-color: #ff4d29;" type="button">Go!</button>
                        </div>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Categories</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Side Widget</div>
                    <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <div class="footer-top text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h4 class="navbar-brand">Empower Lives for Better Care<span class="dot">.</span></h4>
                    <p>Avoir une population saine et travailleuse est un gage d'assurance et de sécurité pour une famille et pour une nation !!!</p>
                    <div class="col-auto social-icons">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-pinterest'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom text-center">
        <p class="mb-0">TechflectionDesign</p>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



<!-- Modal -->
<div class="modal fade" id="contact-form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
        <div class="modal-content">
            <div class="modal-body p-0">
                <div class="container-fluid">
                    <div class="row gy-4">
                        <div class="col-lg-4 col-sm-12 bg-cover" style="background-image: url(../img/c2.jpg); min-height:300px;">
                            <div>

                            </div>
                        </div>
                        <div class="col-lg-8">
                            <form class="p-lg-5 col-12 row g-3">
                                <div>
                                    <h1>Get in touch</h1>
                                    <p>Fell free to contact us and we will get back to you as soon as possible</p>
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">First name</label>
                                    <input type="text" class="form-control" placeholder="Jon" id="userName" aria-describedby="emailHelp">
                                </div>
                                <div class="col-lg-6">
                                    <label for="userName" class="form-label">Last name</label>
                                    <input type="text" class="form-control" placeholder="Doe" id="userName" aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="userName" class="form-label">Email address</label>
                                    <input type="email" class="form-control" placeholder="Johndoe@example.com" id="userName" aria-describedby="emailHelp">
                                </div>
                                <div class="col-12">
                                    <label for="exampleInputEmail1" class="form-label">Enter Message</label>
                                    <textarea name="" placeholder="This is looking great and nice." class="form-control" id="" rows="4"></textarea>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-brand">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection