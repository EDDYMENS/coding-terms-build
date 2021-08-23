@include('header')
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 w-xs-100 text-center" href="#"><h3>Coding Terms</h3></a>

  <input class="form-control form-control-dark w-100 basicAutoComplete" type="text" placeholder="Type a term to search" aria-label="Search" >
  <div class="navbar-nav w-xs-100">
    <div class="nav-item text-nowrap">
      <button class=" btn btn-secondary btn-lg w-xs-100">Search</button>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">
              <span data-feather="home"></span>
              <h4>Related terms</h4>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Orders
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h5 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Other terms</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h5>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <p class="term-title text-center">Code Smell</p>
        <div class="btn-toolbar mb-2 mb-md-0">
          <button type="button" class="btn btn-outline-secondary ">
            &nbsp;&nbsp;&nbsp;
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect><path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path></svg> Copy&nbsp;&nbsp;&nbsp;
          </button>
        </div>
      </div>
      <div class="container">
    <div class="row">
        <div class="col-1"></div>
        @if(mt_rand(0,1) >= 0)
        <div class="col-10 card"> 
             <article class="blog-body">
                  {!! $definition !!}}
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
