
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">

    <meta name="apple-mobile-web-app-title" content="CodePen">

    <!-- td -->
    <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111" />
     <title>Featured Products</title>
    <!-- form -->
     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>

<style>
/* Global */
/* body {
    background: #3399cc;
    padding: 40px;
}   */
* {
    padding: 0;
    margin: 0;
    border: none;
}
img { max-width:100%; }

a {
	-webkit-transition: all 150ms ease;
	-moz-transition: all 150ms ease;
	-ms-transition: all 150ms ease;
	-o-transition: all 150ms ease;
	transition: all 150ms ease;
	}
    a:hover {
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)"; /* IE 8 */
        filter: alpha(opacity=50); /* IE7 */
        opacity: 0.6;
        text-decoration: none;
    }


/* Container */
.container-fluid {
    background: #FFFFFF;
    margin: 40px auto 10px;
    padding: 20px 40px 0;
    max-width: 960px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}


/* Page Header */
/* .page-header {
    background: #f9f9f9;
    margin: -30px -40px 40px;
    padding: 20px 40px;
    border-top: 4px solid #ccc;
    color: #999;
    text-transform: uppercase;
    }
    .page-header h3 {
        line-height: 0.88rem;
        color: #000;
        } */



/* Thumbnail Box */
.caption h4 {
    font-size: 1rem;
    color: #444;
    }
    .caption p {
        font-size: 0.75rem;
        color: #999;
        }
        .btn.btn-mini {
            font-size: 0.63rem;
            }


/* Carousel Control */
.control-box {
    text-align: right;
    width: 100%;
    }
    .carousel-control{
        background: #666;
        border: 0px;
        border-radius: 0px;
        display: inline-block;
        font-size: 34px;
        font-weight: 200;
        line-height: 18px;
        opacity: 0.5;
        padding: 4px 10px 0px;
        position: static;
        height: 30px;
        width: 15px;
        }





/* Mobile Only */
@media (max-width: 767px) {
    .page-header, .control-box {
    text-align: center;
    }
}
@media (max-width: 479px) {
    .caption {
    word-break: break-all;
    }
}



</style>

  <script>
  window.console = window.console || function(t) {};
</script>



</head>

<body translate="no">
  <div class="container-fluid">
<div class="row-fluid">
<div class="span12">

    <div class="page-header">
        <h3>Featured Products</h3>
        {{-- <p>Demo</p> --}}
    </div>

    <div class="carousel slide" id="myCarousel">
        <div class="carousel-inner">
            <div class="item active">
                    <ul class="thumbnails">
                    @foreach($products as $product)
                        <li class="span3">
                            <div class="thumbnail">
                                <a href="#"><img src="{{ asset('image/product/'.$product->image) }}" alt="" style="width:100%;height:100%"></a>
                            </div>
                            <div class="caption">
                                <h4>{{ $product->name }}</h4>
                				<p>{{ $product->singer }}</p>
                                <audio controls="" id="song" style="width: 180px;">
                                    <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg">
                                    </audio>
                                <a class="btn btn-mini" href="#">&raquo; See More</a>
                            </div>
                        </li>

                        @endforeach
                    </ul>
              </div><!-- /Slide1 -->

        </div>

        <div class="control-box">
            <a data-slide="prev" href="#myCarousel" class="carousel-control left">‹</a>
            <a data-slide="next" href="#myCarousel" class="carousel-control right">›</a>
        </div><!-- /.control-box -->

    </div><!-- /#myCarousel -->

</div><!-- /.span12 -->
</div><!-- /.row -->
</div><!-- /.container -->


</div>


<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/js/bootstrap.min.js'></script>
<script id="rendered-js" >
// Carousel Auto-Cycle
$(document).ready(function () {
  $('.carousel').carousel({
    interval: 3000 });

});
//# sourceURL=pen.js
    </script>
</body>

</html>
