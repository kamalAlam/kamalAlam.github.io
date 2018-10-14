<?php
    
    ob_start();
    include"use_to/header.php";
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Bangla Movie";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;

    include"use_to/navbar.php";
?>
<?php
    include ("use_to/slider.php");
?>
<br>
<div class="container">
  <div class="row">
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
		
		
    </div>
  </div>
  <hr>
  <br><br>
  <div class="row">
  <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
     <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
    <div class="col-lg-2 col-sm-3 col-xs-4">
        <a href="#">
             <img src="http://placehold.it/200x200" class="thumbnail img-responsive">
        </a>
    </div>
  </div>
  
  <!-- row -->

            <div class="text-center">
                <div class="post-nav">
					<ul class="pagination">
						<li class="previous">
						<a href="">First</a>
						</li>
						<li>
						<a rel="prev" href="" title="previous">
						<i class="ion-ios-arrow-back"></i>
						</a></li>
						<li>
						<a href="">01</a></li>
						<li class="active">
						<span class="active">02</span>
						</li><li class="next">
						<a href="">Last</a></li>
					</ul>
				</div>
			</div>

        </div><!-- container-fluid -->
    </div>

</div>


<?php
     include"use_to/footer.php";
?>