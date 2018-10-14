<?php
    
    ob_start();
    include"use_to/header.php";
    $buffer=ob_get_contents();
    ob_end_clean();

    $title = "Tamil Movie";
    $buffer = preg_replace('/(<title>)(.*?)(<\/title>)/i', '$1' . $title . '$3', $buffer);

    echo $buffer;

    include"use_to/navbar.php";
?>
<?php
    include ("use_to/slider.php");
?>


    <script>

        $(function () {

            jQuery.balloon.init();

            setTimeout(function(){
                $("#balloon2").showBalloon();
            },10);

            $(".opener").each(function(){
                var el = $(this);
                el.showCode(el);
            });

        });

        function printOutHTML(el){
            var html = el[0].outerHTML;
            html=html.replace(/</g,"&lt;");
            html=html.replace(/>/g,"&gt;");
            return html;
        }

        function canClose(balloon) {

            var input = balloon.find("input");
            if (input.val().length > 0)
                return confirm("Sure you want to close this balloon?");
            else
                return true;
        }

        $.fn.showCode = function(el){
            return this.each(
                    function(){
                        var msg = "";
                        var data = el.data();
                        var c = 1;
                        for(var x in data){
                            msg += "<b>data-" + x + "</b> = " + data[x];
                            msg += ", ";
                            c++;
                        }
//                        var msg = el.data().toString(); // printOutHTML(el)
                        var element = $("<div/>").append(msg).css({fontSize: "00px", marginTop:10});
                        $(this).append(element);
                    }
            )
        }

    </script>
<br>
<div class="container">

      <div class="row text-center text-lg-left">
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="<?='img/avengers_5k-t2.jpg' ?>" alt="">
          </a>
        </div>
          
        <div class="col-lg-3 col-md-4 col-xs-6">
             <div  class="opener box" data-bgcolor="#f0f0f0"  data-addclose="false" data-event="hover" data-bordercolor="#999" data-textcolor="#333" data-balloon= "{ajax} balloon-ajax-content.php"  style="">
                 <a href="English_movie.php">
        <img class="img-fluid img-thumbnail" src="<?='img/avengers_5k-t2.jpg' ?>" alt="">
        </a>
    </div>
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-xs-6">
          <a href="#" class="d-block mb-4 h-100">
            <img class="img-fluid img-thumbnail" src="http://placehold.it/400x300" alt="">
          </a>
        </div>
      </div>

    </div>

<?php
     include"use_to/footer.php";
?>