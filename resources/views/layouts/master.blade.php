<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href={{asset('public/images/favicon.png')}}/>
    <title>Wunderlist</title>

    <link href="{{asset('public/css/scrolling-nav.css')}}" rel="stylesheet" media="all">
    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/css/magnific-popup.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->

    <link href="{{asset('public/css/style.css')}}" rel="stylesheet">

    <link href="{{asset('public/css/responsive.css')}}" rel="stylesheet">
    <script src="{{asset('public/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/scrolling-nav.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/counterup.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/waypoints.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/mousescroll.js')}}" type="text/javascript"></script>
    <script src="{{asset('public/js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.imagesloaded.js')}}"></script>
    <script src="{{asset('public/js/custom.js')}}" type="text/javascript"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

@include('shared.navbar')
@include('shared.bannerOne')
<div class="clearfix"></div>
@include('shared.about')
@include('shared.rooms')
@include('shared.adv')
@include('shared.service')
@include('shared.review')
@include('shared.reservation')
@include('shared.gallery')
@include('shared.subscribe')
@include('shared.contact')
@include('shared.footer')


<a id="back-to-top" style="display: none"><i class="fa fa-caret-up fa-lg"></i></a>
<script>
    $(document).ready(function () {
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip();

        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {

                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;


                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function () {


                    window.location.hash = hash;
                });
            } // End if
        });
    })
</script>
<script>
    var grid = document.querySelector('.grid');

    var msnry = new Masonry(grid, {
        itemSelector: '.grid-item .grid-item-2',
        columnWidth: '.grid-sizer',
        percentPosition: true
    });

    imagesLoaded(grid).on('progress', function () {
        // layout Masonry after each image loads
        msnry.layout();
    });
</script>
<script src="{{asset('public/js/jquery.magnific-popup.min.js')}}"></script>
<script>
    jQuery(document).ready(function ($) {
        $('.image-popup').magnificPopup({
            type: 'image',
            removalDelay: 300,
            mainClass: 'mfp-with-zoom',
            titleSrc: 'title',
            gallery: {
                enabled: true
            },
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function


                opener: function (openerElement) {

                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    });

</script>

</body>
</html>