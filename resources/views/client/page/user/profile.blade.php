@extends('client.client')
@section('main-content')
    <section class="section-sm border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-bordered mb-5 d-flex align-items-center">
                        <h1 class="h4">John Doe</h1>
                        <ul class="list-inline social-icons ml-auto mr-3 d-none d-sm-block">
                            <li class="list-inline-item"><a href="#"><i class="ti-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="ti-twitter-alt"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="ti-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 mb-4 mb-md-0 text-center text-md-left">
                    <img loading="lazy" class="rounded-lg img-fluid" src="{{ url('client/images/author.jpg') }}">
                </div>
                <div class="col-lg-9 col-md-8 content text-center text-md-left">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet vulputate augue. Duis auctor
                        lacus id vehicula gravida. Nam suscipit vitae purus et laoreet. Donec nisi dolor, consequat vel
                        pretium id, auctor in dui. Nam iaculis, neque ac ullamcorper. Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Proin sit amet vulputate augue. Duis auctor lacus id vehicula gravida.
                        Nam suscipit vitae purus et laoreet.</p>
                    <p>Donec nisi dolor, consequat vel pretium id, auctor in dui. Nam iaculis, neque ac ullamcorper.Lorem
                        ipsum dolor sit amet, consectetur adipiscing elit. Proin sit amet vulputate augue.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title text-center">
                        <h2 class="mb-5">Posted by this author</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-6.jpg') }}" class="img-fluid" alt="post-thumb">
                            <img loading="lazy" src="{{ url('client/images/post/post-1.jpg') }}" class="img-fluid" alt="post-thumb">
                            <img loading="lazy" src="{{ url('client/images/post/post-3.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-elements.html">Elements That You Can Use To
                                Create A New Post
                                On This Template.</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 15, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photography </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a
                                    href="#!" class="ml-1">Image </a>
                            </li>
                        </ul>
                        <p>Heading example Here is example of hedings. You can use this heading by following markdownify
                            rules. …</p> <a href="post-elements.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-1.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-details-1.html">Cheerful Loving Couple Bakers
                                Drinking
                                Coffee</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 14, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photography </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">Photo </a> ,<a
                                    href="#!" class="ml-1">Image </a>
                            </li>
                        </ul>
                        <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, …
                        </p> <a href="post-details-1.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-2.jpg') }}" class="img-fluid" alt="post-thumb">
                            <img loading="lazy" src="{{ url('client/images/post/post-4.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-details-2.html">Cheerful Loving Couple Bakers
                                Drinking
                                Coffee</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 14, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Photobooth </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">Booth </a> ,<a
                                    href="#!" class="ml-1">Image </a>
                            </li>
                        </ul>
                        <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, …
                        </p> <a href="post-details-2.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-3.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-details-2.html">Cheerful Loving Couple Bakers
                                Drinking
                                Coffee</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 14, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Videography </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">Video </a> ,<a
                                    href="#!" class="ml-1">Image </a>
                            </li>
                        </ul>
                        <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, …
                        </p> <a href="post-details-2.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-4.jpg') }}" class="img-fluid" alt="post-thumb">
                            <img loading="lazy" src="{{ url('client/images/post/post-1.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-details-1.html">Cheerful Loving Couple Bakers
                                Drinking
                                Coffee</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 14, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Four seasone </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">Seasone </a> ,<a
                                    href="#!" class="ml-1">New </a>
                            </li>
                        </ul>
                        <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, …
                        </p> <a href="post-details-1.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-5.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-details-1.html">Cheerful Loving Couple Bakers
                                Drinking
                                Coffee</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 14, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Newyork city </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">City </a> ,<a
                                    href="#!" class="ml-1">Photo </a>
                            </li>
                        </ul>
                        <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, …
                        </p> <a href="post-details-1.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <article class="mb-5">
                        <div class="post-slider slider-sm">
                            <img loading="lazy" src="{{ url('client/images/post/post-5.jpg') }}" class="img-fluid" alt="post-thumb">
                        </div>
                        <h3 class="h5"><a class="post-title" href="post-details-2.html">Cheerful Loving Couple Bakers
                                Drinking
                                Coffee</a></h3>
                        <ul class="list-inline post-meta mb-2">
                            <li class="list-inline-item"><i class="ti-user mr-2"></i><a href="author.html">John
                                    Doe</a>
                            </li>
                            <li class="list-inline-item">Date : March 14, 2020</li>
                            <li class="list-inline-item">Categories : <a href="#!" class="ml-1">Newyork city </a>
                            </li>
                            <li class="list-inline-item">Tags : <a href="#!" class="ml-1">City </a> ,<a
                                    href="#!" class="ml-1">Photo </a>
                            </li>
                        </ul>
                        <p>It’s no secret that the digital industry is booming. From exciting startups to global brands, …
                        </p> <a href="post-details-2.html" class="btn btn-outline-primary">Continue Reading</a>
                    </article>
                </div>
            </div>
        </div>
    </section>
@endsection
