@include('header')

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 w-xs-100 text-center" href="/">
      <h3>Coding Terms</h3>
    </a>

    <input class="form-control form-control-dark w-100" type="text"
      placeholder="Search for a term" aria-label="Search" id="search" onkeyup="search()">
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
            <div class="col-10 card">
              <article class="term-body">
                @include('definitionHeading')
                {!! $definition !!}
                @include('definitionHeading')
            </div>
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
<script>
  function search() {
      var input, filter, termLinks, a, i, txtValue;
      input = document.getElementById("search");
      filter = input.value.toLowerCase();
      termLinks = document.getElementsByClassName("term-link");
      for (i = 0; i < termLinks.length; i++) {
          var term = termLinks[i];
          txtValue = term.textContent || term.innerText;
          if (txtValue.toLowerCase().indexOf(filter) > -1) {
              term.style.display = "";
          } else {
              term.style.display = "none";
          }
      }
  }
</script>
</html>