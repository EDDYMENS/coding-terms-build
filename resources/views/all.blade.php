@include('header')

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 w-xs-100 text-center" href="#">
      <h3>Coding Terms</h3>
    </a>

    <input class="form-control form-control-dark w-100" type="text"
      placeholder="Search for as term" aria-label="Search">
    <div class="navbar-nav w-xs-100">
      <div class="nav-item text-nowrap">
        <button class=" btn btn-secondary btn-lg w-xs-100">Search</button>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">

      <main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
        <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <p class="term-title text-center">{{$formattedTitle}}</p>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-1"></div>
            @if(mt_rand(0,1) >= 0)
            <div class="col-10 card">
              <article class="blog-body">
                {!! $definition !!}
                <br><br>
                <center>
                  <span class="badge bg-secondary">Secondary</span>
                </center>
                <br><br>
            </div>
            @else
            <div class="col-10 card">
              <article class="blog-body">
                kjkldfjkldjfklj
                <br><br>
                <center>
                  <div class="text-center btn-group"> <a
                      href="https://twitter.com/search?q=https://eddymens.com/blog/getting-your-windows-files-and-folders-to-behave-as-on-linux"
                      class="btn btn-default btn-outline-secondary white-inner-text" target="_blank">Comment on
                      Twitter</a> <a
                      href="https://twitter.com/intent/tweet?text=Getting your Windows files and folders to behave as on Linux, https://eddymens.com/blog/getting-your-windows-files-and-folders-to-behave-as-on-linux"
                      class="btn btn-default btn-outline-secondary white-inner-text" target="_blank">Share on
                      Twitter</a>
                </center>
                <br><br>
            </div>
            @endif
          </div>
          <div class="col-1"></div>
          </article>
        </div>

        </html>
    </div>
    </main>
  </div>
  </div>
</body>

</html>