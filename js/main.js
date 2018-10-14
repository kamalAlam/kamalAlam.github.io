 $( function() {
    $( "#draggable" ).draggable();
  } );

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

$(document).ready( function(){
    $('#slideshowHolder').jqFancyTransitions({ width: 400, height: 300 });
});

 jQuery(document).ready(function ($) {

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });

jQuery(document).ready(function(){

            jQuery(document).pjax('a.pjax, .header-second-menu a', '#pjax-container', {
                timeout: 2000
            });


            jQuery(document).on('pjax:send', function() {
                jQuery('#pjax_loading').show();
            });
            jQuery(document).on('pjax:complete', function(xhr, textStatus, options) {
                console.log(options);
                jQuery('#pjax_loading').hide();
                jQuery(document).scrollTop(2);
            });

        });

   $(function () {

            var isIframe=function(){var a=!1;try{self.location.href!=top.location.href&&(a=!0)}catch(b){a=!0}return a};if(!isIframe()){var logo=$("<a href='http://pupunzi.com/#mb.components/components.html' style='position:absolute;top:50px;z-index:1000'><img id='logo' border='0' src='http://pupunzi.com/images/logo.png' alt='mb.ideas.repository'></a>");$("body").prepend(logo),$("#logo").fadeIn()}

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
                        var element = $("<div/>").append(msg).css({fontSize: "10px", marginTop:10});
                        $(this).append(element);
                    }
            )
        }

