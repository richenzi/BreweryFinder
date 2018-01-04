<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BreweryFinder</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>

<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">BreweryFinder</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            {{--<ul class="navbar-nav mr-auto">--}}
            {{--<li class="nav-item active">--}}
            {{--<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Link</a>--}}
            {{--</li>--}}
            {{--</ul>--}}
            {{--<form class="form-inline mt-2 mt-md-0">--}}
            {{--<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">--}}
            {{--<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
            {{--</form>--}}
        </div>
    </nav>
</header>

<main role="main">

    <div>
        <input id="pac-input" class="controls" type="text" placeholder="Search Box">
        <div id="map">
        </div>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="{{ asset('images/brewerydb.png') }}"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>BreweryDB</h2>
                <p>BreweryDB is open library of breweries and beers from all around the world. The
                    library is updated by users. For breweries, they keep track of information such as location,
                    website, phone numbers, descriptions, logos, etc. For beers, they keep track of style, coloring,
                    bitterness, availability, labels and more.</p>
                <p><a class="btn btn-secondary" target="_blank" rel="noopener"
                      href="http://www.brewerydb.com/" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class=""
                     src="{{ asset('images/google-maps.png') }}"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Google Maps</h2>
                <p>The Google Maps API allow for the embedding of Google Maps onto web pages of outside developers,
                    using a simple JavaScript interface. API is used to display breweries near given location in radius of 100 miles.</p>
                <p><a class="btn btn-secondary" target="_blank" rel="noopener"
                      href="https://developers.google.com/maps/" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Custom API</h2>
                <p>API allows users to search for breweries established in given year.</p>
                <p><a class="btn btn-secondary" href="#" target="_blank" rel="noopener" role="button">View details
                        &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        {{--<!-- START THE FEATURETTES -->--}}

        {{--<hr class="featurette-divider">--}}

        {{--<div class="row featurette">--}}
        {{--<div class="col-md-7">--}}
        {{--<h2 class="featurette-heading">First featurette heading. <span--}}
        {{--class="text-muted">It'll blow your mind.</span></h2>--}}
        {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis--}}
        {{--euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,--}}
        {{--tellus ac cursus commodo.</p>--}}
        {{--</div>--}}
        {{--<div class="col-md-5">--}}
        {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"--}}
        {{--alt="Generic placeholder image">--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="featurette-divider">--}}

        {{--<div class="row featurette">--}}
        {{--<div class="col-md-7 order-md-2">--}}
        {{--<h2 class="featurette-heading">Oh yeah, it's that good. <span--}}
        {{--class="text-muted">See for yourself.</span></h2>--}}
        {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis--}}
        {{--euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,--}}
        {{--tellus ac cursus commodo.</p>--}}
        {{--</div>--}}
        {{--<div class="col-md-5 order-md-1">--}}
        {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"--}}
        {{--alt="Generic placeholder image">--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<hr class="featurette-divider">--}}

        {{--<div class="row featurette">--}}
        {{--<div class="col-md-7">--}}
        {{--<h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>--}}
        {{--<p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis--}}
        {{--euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus,--}}
        {{--tellus ac cursus commodo.</p>--}}
        {{--</div>--}}
        {{--<div class="col-md-5">--}}
        {{--<img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"--}}
        {{--alt="Generic placeholder image">--}}
        {{--</div>--}}
        {{--</div>--}}

        <hr class="featurette-divider">

        {{--<!-- /END THE FEATURETTES -->--}}

    </div><!-- /.container -->


    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right"><a href="#">Back to top</a></p>
        <p>Richard Vachula &middot; <a href="https://github.com/richenzi/BreweryFinder" target="_blank" rel="noopener">Github</a>
        </p>
    </footer>

    <div id="loader" style="display: none" class="hidden">
        <div id="loader-inner" class="text-center">
            <img src="" alt="ZOMATO Developers logo"/>
            <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw"></i>
            <p>loading restaurants...</p>
        </div>
    </div>

</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ asset('js/holder.min.js') }}"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB9A2hbpRHn15C6PbN0BKuCT8_kg-rWa60&callback=initMap&libraries=places">
</script>

<script>

    function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 14,
            center: {
                lat: 50.0796833,
                lng: 14.3896311
            }
        });

        var $map = $(map);
        var $loader = $('#loader');
        var markers = [];
        var infowindows = [];

        var input = $('#pac-input')[0];
        var searchBox = new google.maps.places.SearchBox(input);

        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function () {
            searchBox.setBounds(map.getBounds());
        });

        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function () {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function (marker) {
                marker.setMap(null);
            });

            markers = [];

            // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function (place) {
                if (!place.geometry) {
                    console.log("Returned place contains no geometry");
                    return;
                }
                var icon = {
                    url: place.icon,
                    size: new google.maps.Size(71, 71),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(17, 34),
                    scaledSize: new google.maps.Size(25, 25)
                };

                // Create a marker for each place.
                markers.push(new google.maps.Marker({
                    map: map,
                    icon: icon,
                    title: place.name,
                    position: place.geometry.location
                }));

                if (place.geometry.viewport) {
                    // Only geocodes have viewport.
                    bounds.union(place.geometry.viewport);
                } else {
                    bounds.extend(place.geometry.location);
                }
            });

            map.fitBounds(bounds);
            handlePositionChange();
        });


        map.addListener('dragend', handlePositionChange);

        function handlePositionChange() {
            console.log('bla');

            $loader.css({
                // 'left': $map.offset().left,
                // 'top': $map.offset().top,
                // 'width': $map.outerWidth(),
                // 'height': $map.outerHeight()
            });

            var url = '{{ action('Api\v1\BreweryController@searchBreweries') }}';
            url += '/?lat=' + map.getCenter().lat();
            url += '&lng=' + map.getCenter().lng();

            $.get(url)
                .done(function (data) {
                    showData(data);
                    $loader.addClass('hidden');
                })
                .fail(function (data) {
                    console.log('fail');
                    console.log(data);
                })
        }

        function deleteMarkers() {
            for (var i = 0; i < markers.length; ++i) {
                markers[i].setMap(null);
            }
            markers = [];
        }

        function showData(data) {

            deleteMarkers();

            for (var i in data) {

                var established = data[i]['established'] == '' ? '' : '(' + data[i]['established'] + ')';
                var websiteLink = '<a>No website</a>';

                if (data[i]['website'] != '') {
                    websiteLink = '<a href="' + data[i]['website'] + '" target="_blank">Website</a>';
                }

                var contentString =
                    '<div id="content">' +
                    '<div style="width:20%;float:left">' +
                    '<img style="width:100%" src="' + data[i]['image'] + '" alt="' + data[i]['name'] + '"/>' +
                    '</div>' +
                    '<div style="width:80%;float:left">' +
                    '<h5>' + data[i]['name'] + ' ' + established + '</h5>' +
                    websiteLink +
                    '</div>' +
                    '</div>';

                markers[i] = new google.maps.Marker({
                    position: {lat: parseFloat(data[i]['latitude']), lng: parseFloat(data[i]['longitude'])},
                    map: map,
                    title: data[i]['name']
                });

                infowindows[i] = new google.maps.InfoWindow({
                    content: contentString
                });

                google.maps.event.addListener(markers[i], 'click', function (j) {
                    return function () {
                        for (var i = 0; i < infowindows.length; i++) {
                            infowindows[i].close(map);
                        }
                        infowindows[j].open(map, markers[j]);
                    }
                }(i));
            }
        }

        handlePositionChange();

    }

</script>


</body>
</html>
