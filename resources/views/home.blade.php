<!DOCTYPE html>

<html>

<head>

    @include("layout.head")

</head>


<body class=".bg-light">
    @include("layout.navbar")

    <div class="col-12 text-center g-0" style="background: white; border-bottom: 1px solid black; border-top: 1px solid black">
        <img style="max-height: 420px; max-width: 100%;" src="/laravel-blog-background-image.png" title="backgroundImage">
    </div>
    </div>
    </div>

    <div class="col-12 p-2 text-center mt-4 mb-4" style="border-bottom: 1px solid black;">
                <h1 class="fw-bolder fs-1">Laravel Project Blog</h1>
                <p>This is the blog project for the Laravel module from ITI blah blah blah some filler words here lorem ipsum</p>

            </div>

    <div class="container ps-5 pe-5">
        <div class="row">
       @include("home.blog")
    </div>


    <div class="col-lg-1 col-0">

    </div>

        

    <div class="col-lg-3 col-12 mt-5 ps-lg-4">

        <div class="row">
          @include("home.trending")
        </div>

        <div class="row">
            @include("home.recent")
        </div>

        <div class="col-12 mt-4">
            @include("home.tags")
        </div>

    </div>
    </div>
    <div class="row">
        <div class="col-12 g-0 mt-2">
            <nav>
            <ul class="pagination justify-content-center">
            <li class="page-item @if($page_number === 1) disabled @endif">
              <a class="page-link" href="/?page={{ $page_number - 1 }}">
                Previous
              </a>
            </li>
            @for ($i = 0; $i < ceil($total_blogs / $page_length); $i++)
              <li class="page-item @if($page_number === $i + 1) active @endif">
                <a class="page-link" href="/?page={{ $i + 1 }}">{{ $i + 1 }}</a>
              </li>
            @endfor
            <li class="page-item @if($page_number >= ceil($total_blogs / $page_length)) disabled @endif">
              <a class="page-link" href="/?page={{ $page_number + 1 }}">
                Next
              </a>
            </li>
          </ul>
            </nav>
        </div>
    </div>

    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    <script>
        function redirectTo(url) {
    window.location.href = url;
}
    </script>
   
</body>

</html>