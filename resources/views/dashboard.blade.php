<!DOCTYPE html>
<html>

<head>
  @include('dashboard.layout.head')
</head>

<body class="bg-light">
  @include('dashboard.layout.navbar')
  <div class="container ps-5 pe-5">
    <div class="row">
      <div class="col-12 p-2 text-left text-dark mt-4">
        <h1 class="p-2">{{ $title }}</h1>

        <div class="p-2 mt-4 mb-4 border-bottom-black border-top-black">
            <button type="button" class="btn btn-sm btn-dark" onclick="">
                New Blog
            </button>
        </div>

      </div>
    </div>

  </div>
  <script src="{{ asset('js/dashboard.js') }}"></script>
  <script>
    $("#logoutButton").click(function(e) {
    $.get({
        url: "/api/logout",
        success: function() {
            window.location.href = "/";
        },
        error: function() {}
    });
});

$(".navbar-nav a.active").removeClass("active");
$(".navbar-nav a[href='" + location.href + "']").addClass("active");
  </script>
</body>

</html>