@include('header')
<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10 card"> 
            <span class="blog-title">Code Smell</span>
            <article class="blog-body">
                <p>I will make this brief.</p>
                <p>If you write software on a Windows machine but then usually deploy on a Linux server you probably
                    have run into the trouble of your software breaking because of the difference in the way both OS
                    handles file names and the issue with referencing the wrong case of the name in your code.</p>
                <p>Basically you can get away with calling on <code>index.js</code> as <code>Index.js</code> on Windows
                    but not on Linux. </p>
                <center>
                    <div class="text-center btn-group"> <a
                            href="https://twitter.com/search?q=https://eddymens.com/blog/getting-your-windows-files-and-folders-to-behave-as-on-linux"
                            class="btn btn-default btn-outline-secondary white-inner-text" target="_blank">Comment on
                            Twitter</a> <a
                            href="https://twitter.com/intent/tweet?text=Getting your Windows files and folders to behave as on Linux, https://eddymens.com/blog/getting-your-windows-files-and-folders-to-behave-as-on-linux"
                            class="btn btn-default btn-outline-secondary white-inner-text" target="_blank">Share on
                            Twitter</a>
                </center>
                <button class="btn btn-default btn-outline-secondary float-left"
                onClick="window.location.href='/blog/brainfuck-interpreter-using-method-chaining'"><b>
                    <</b>&nbsp; Previous Term</button> <button class="float-right btn btn-default btn-outline-secondary float-left"
                onClick="window.location.href='/blog/trimming-the-fat-off-bootstrap-4'">&nbsp;&nbsp;&nbsp;Next Term&nbsp;&nbsp;&nbsp;&nbsp;<b>></b></button>
                <br><br>
        </div>
    </div>
    <div class="col-1"></div>
    </article>
</div> 
</html>
</div>