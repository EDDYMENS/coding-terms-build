@include('header')

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 w-xs-100 text-center" href="/">
      <h3>Coding Terms</h3>
    </a>
    @if($term == 'all-terms')
      <input class="form-control form-control-dark w-70 w-xs-100" type="text"
      placeholder="Search for a term" aria-label="Search" id="search" onkeyup="search()">
    @endif
    <div class="navbar-nav w-xs-100">
      <div class="nav-item text-nowrap">
        <a class="btn bg-danger btn-lg w-xs-100" target="blank" href="https://easybiz.typeform.com/to/TznHJjSn">Signup for tech jobs</a>
      </div>
    </div>
    </header>
  <div class="container-fluid">
    <div class="row">

      <main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
        <div class="flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <p class="term-title text-center text-capitalize">{{$formattedTitle}}</p>
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
              <a href="https://github.com/EDDYMENS/coding-terms-markdown" target="__blank" class="center-it"><b>Github</b></a>
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
function search(){var e,t,n;for(e=document.getElementById("search").value.toLowerCase(),t=document.getElementsByClassName("term-link"),n=0;n<t.length;n++){var a=t[n];(a.textContent||a.innerText).toLowerCase().indexOf(e)>-1?a.style.display="":a.style.display="none"}}
</script>
<!--hidden links-->
<template>
  <a href="/404" href="/sitemap.xml"></a>
</template>
</html>