<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title ?></title>

    <meta content="SIJAB - Sistem Informasi Jalan Kota Bogor" name="description">
    <meta content="SIJAB - Sistem Informasi Jalan Kota Bogor" name="keywords">
    <meta content="Sistem Informasi" name="subject">
    <meta content="Indonesia" name="languange">
    <meta content="Global" name="coverage">
    <meta content="general" name="rating">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-403TSSELS0"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-403TSSELS0');
    </script>

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/logo/logo-brand.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/main.css" rel="stylesheet">

    <script src="https://code.iconify.design/3/3.1.0/iconify.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>

    <script src="<?= base_url() ?>assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/dropify/js/dropify.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>

    <!-- leaflet -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet/leaflet.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/MarkerCluster.Default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/L.Control.Locate.min.css">

    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css" />
    <link rel='stylesheet' href='https://api.tiles.mapbox.com/mapbox-gl-js/v1.5.0/mapbox-gl.css' />
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/leaflet.fullscreen.css' />

    <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.css">

    <script src="<?= base_url() ?>assets/vendor/leaflet/leaflet.js"></script>
    <script src="<?= base_url() ?>assets/vendor/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
    <script src="<?= base_url(); ?>assets/js/leaflet.markercluster.js"></script>
    <script src="<?= base_url(); ?>assets/js/L.Control.Locate.min.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEY9jbE_zL8SV7c6meCf7-lV3JLcbKnlY" async defer></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
    <script src='https://api.mapbox.com/mapbox.js/plugins/leaflet-fullscreen/v1.0.1/Leaflet.fullscreen.min.js'></script>
    <script src="https://unpkg.com/leaflet.gridlayer.googlemutant@latest/dist/Leaflet.GoogleMutant.js"></script>

    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-map.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>
    <script src="https://www.mapquestapi.com/sdk/leaflet/v2.2/mq-traffic.js?key=ck2OXUAJsF0iz999XGQ62jyXo8AXOVp7"></script>

</head>

<body>





    <div class="button-navs">
        <!-- <button class="sidenav btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="bi bi-info-circle-fill"></i></button> -->
        <!-- <button class="sidenav-right btn btn-success" type="button" data-bs-toggle="offcanvas" data-bs-target="#trayekScrolling" aria-controls="trayekScrolling">
            <i class="bi bi-bus-front" style="background: white; color:green; padding: 1px 5px; border-radius:20px; font-size:25px"></i>
        </button> -->
    </div>
    <div class="offcanvas offcanvas-start show" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
        <div class="offcanvas-header" style="background-image: url('<?= base_url() ?>assets/img/background-hero.png');">
            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/img/logo/logo.png" alt="" class="img-fluid"></a>
            <h5 class="offcanvas-title fs-6" id="offcanvasScrollingLabel">Sistem Informasi Pariwisata Tanggerang</h5>
            <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
        </div>
        <div class="offcanvas-body">
            <form action="" class="" id="">
                <div class="mb-3">
                    <label for="min" class="form-label">Perkiraan Biaya</label>
                    <!-- <input type="text" data-type="currency" pattern="^\$\d{1,3}(,\d{3})*(\.\d+)?$" class="form-control" id="currency-field"> -->
                    <input type="number" min="500000" class="form-control" id="currency-field">

                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Dengan Penginapan</label>
                </div>
                <button type="submit" class="btn btn-primary w-100">Cari wisata</button>
            </form>
            <hr>

            <ul>
                <li>test</li>
            </ul>
        </div>
    </div>

    <div id="map"></div>

    <div id="modalDetail"></div>





    <script src="<?= base_url() ?>assets/js/kabTanggerangs.js"></script>

    <script>
        // Jquery Dependency

        $("input[data-type='currency']").on({
            keyup: function() {
                formatCurrency($(this));
            },
            blur: function() {
                formatCurrency($(this), "blur");
            }
        });


        function formatNumber(n) {
            // format number 1000000 to 1,234,567
            return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
        }


        function formatCurrency(input, blur) {
            // appends $ to value, validates decimal side
            // and puts cursor back in right position.

            // get input value
            var input_val = input.val();

            // don't validate empty input
            if (input_val === "") {
                return;
            }

            // original length
            var original_len = input_val.length;

            // initial caret position 
            var caret_pos = input.prop("selectionStart");

            // check for decimal
            if (input_val.indexOf(".") >= 0) {

                // get position of first decimal
                // this prevents multiple decimals from
                // being entered
                var decimal_pos = input_val.indexOf(".");

                // split number by decimal point
                var left_side = input_val.substring(0, decimal_pos);
                var right_side = input_val.substring(decimal_pos);

                // add commas to left side of number
                left_side = formatNumber(left_side);

                // validate right side
                right_side = formatNumber(right_side);

                // On blur make sure 2 numbers after decimal
                if (blur === "blur") {
                    right_side += "00";
                }

                // Limit decimal to only 2 digits
                right_side = right_side.substring(0, 2);

                // join number by .
                input_val = "Rp" + left_side + "." + right_side;

            } else {
                // no decimal entered
                // add commas to number
                // remove all non-digits
                input_val = formatNumber(input_val);
                input_val = "Rp" + input_val;

                // final formatting
                if (blur === "blur") {
                    input_val += "";
                }
            }

            // send updated string to input
            input.val(input_val);

            // put caret back in the right position
            var updated_len = input_val.length;
            caret_pos = updated_len - original_len + caret_pos;
            input[0].setSelectionRange(caret_pos, caret_pos);
        }
    </script>


    <script>
        // initialize the map on the "map" div with a given center and zoom
        const map = L.map('map', {
            gestureHandling: true,
            zoomControl: false,
            fullscreenControl: true,
            center: [-6.179652, 106.509361],
            zoom: 11.5,
            minZoom: 11.5
        });

        // Get the query parameters from the current URL
        const urlSearchParams = new URLSearchParams(window.location.search);

        // Access a specific parameter by name
        const lat = urlSearchParams.get('lat');
        const long = urlSearchParams.get('long');

        // Check if a parameter exists
        if (urlSearchParams.has('lat')) {
            // Do something with the parameter value
            map.flyTo([parseFloat(lat), parseFloat(long)], 17);
        } else {
            console.log('Parameter does not exist');
        }
        // L.marker([parameterValue]).addTo(map);
        // map.setView([-6.179652, 106.509361], 11.5);

        // check latlong
        var popup = L.popup();

        function onMapClick(e) {
            popup
                .setLatLng(e.latlng)
                .setContent("You clicked the map at " + e.latlng.toString())
                .openOn(map);
        }

        // map.on('click', onMapClick);

        // style component
        var kabColor = {
            "color": "#001E36",
            // "border-color": "#001E36",
            // "border": 1,
            "weight": 5,
            "opacity": 0.65
        }

        var icon_cctv = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/cctv.png',
            iconSize: [25, 25],
            iconAnchor: [5, 10]
        })

        var icon_polsek = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/polsek.png',
            iconSize: [45, 45],
            iconAnchor: [23, 25]
        })

        var icon_polres = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/polres.png',
            iconSize: [45, 45],
            iconAnchor: [23, 25]
        })

        var icon_pos = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/pos.png',
            iconSize: [35, 35],
            iconAnchor: [23, 25]
        })

        var icon_stasiun = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/stasiun.png',
            iconSize: [35, 35],
            iconAnchor: [23, 25]
        })

        var icon_terminal = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/terminal.png',
            iconSize: [35, 35],
            iconAnchor: [23, 25]
        })

        var icon_rest = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/rest.png',
            iconSize: [35, 35],
            iconAnchor: [23, 25]
        })

        var icon_halte = L.icon({
            iconUrl: '<?= base_url() ?>assets/img/halte.png',
            iconSize: [35, 35],
            iconAnchor: [23, 25]
        })

        // batas wilayah

        var tanggerangKab = L.geoJSON(tanggerangKab, {
            style: kabColor
        }).addTo(map)



        var traffic = MQ.trafficLayer({
            layers: ['flow']
        });
        traffic.addTo(map);

        var info = MQ.trafficLayer({
            layers: ['incident']
        })
        info.addTo(map)

        // layers
        var BaseMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {

            maxZoom: 20
        });
        BaseMap.addTo(map)

        var DarkBaseMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 20,

        });

        // google map layer
        // googleStreets = new L.Google('ROADMAP');
        googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });
        // googleStreets.addTo(map)

        googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });
        // googleHybrid.addTo(map)

        var trafficMutantRoad = L.gridLayer.googleMutant({
            maxZoom: 24,
            type: "roadmap",
        }).addGoogleLayer("TrafficLayer");

        var transitMutantRoad = L.gridLayer.googleMutant({
            maxZoom: 24,
            type: "roadmap",
        }).addGoogleLayer("TransitLayer");

        // control layer
        L.control.zoom({
            position: 'topright'
        }).addTo(map);

        var locate = L.control.locate({
            position: "topright",
            strings: {
                title: "Your Location"
            }
        }).addTo(map);

        var route = L.Routing.control({
            position: 'topleft',
            showAlternatives: true,
            collapsible: true,
            collapsed: true,
            reverseWaypoints: true,
            lineOptions: {
                styles: [{
                    color: 'blue',
                    opacity: 0.4,
                    weight: 4,

                }],

            },
            altLineOptions: {
                styles: [{
                    color: 'grey',
                    opacity: 0.6,
                    weight: 4,
                }],
            },
            style: {
                'z-index': 0
            },
            waypoints: [
                // L.latLng(60.323935, 22.344035)

            ],

            geocoder: L.Control.Geocoder.nominatim()
            // geocoder: L.Control.Geocoder.google('AIzaSyAk5aBw69zZTlOgfVL5PMkKyhRlx1F30UI')

        }).addTo(map)

        var stasiun_bogor = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#007bb5;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="bi bi-bus-front"></i> ${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });
        var terminal_bogor = L.markerClusterGroup({
            iconCreateFunction: function(cluster) {
                return new L.DivIcon({
                    html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#5bd779;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#000;"><i class="bi bi-bus-front-fill"></i> ${cluster.getChildCount()}</b>
                </div>`
                });
            }
        });

        var stasiun = [];
        var terminal = [];

        // Wisata
        $(document).ready(function() {
            $.ajax({
                type: "POST",
                url: "<?= base_url() ?>Peta/getFasum",
                dataType: "JSON",
                success: function(result) {
                    let ressData = result;
                    // console.log(ressData);
                    for (let i = 0; i < ressData.length; i++) {
                        // stasiun
                        if (ressData[i].category_fasum.id == 2) {
                            var id = ressData[i].id
                            var name = ressData[i].name_fasum
                            var latitude = ressData[i].latitude
                            var longitude = ressData[i].longitude
                            var address = ressData[i].address
                            var contact = ressData[i].contact_fasum
                            var open = ressData[i].open_time
                            var close = ressData[i].close_time
                            var image = ressData[i].image_fasum

                            stasiun[i] = L.marker([latitude, longitude], {
                                icon: icon_stasiun,
                            }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="row">
                                <div class="col-md-12 justify-content-center">
                                    <a class="btn btn-info w-100 text-white" href="<?= base_url('pelayanan/detail/') ?>${id}" style="font-size:12px;">Lihat detail</a>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <button class="btn btn-primary w-100" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                </div>
                                <div class="col-md-6 mt-2">
                                    <button class="btn btn-success w-100" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                                </div>
                            </div>
                        </div>
                        `);

                            stasiun_bogor.addLayer(stasiun[i]);
                            // console.log(ressData[i]);
                            // terminal 
                        } else if (ressData[i].category_fasum.id == 1) {
                            var name = ressData[i].name_fasum
                            var latitude = ressData[i].latitude
                            var longitude = ressData[i].longitude
                            var address = ressData[i].address
                            var contact = ressData[i].contact_fasum
                            var open = ressData[i].open_time
                            var close = ressData[i].close_time
                            var image = ressData[i].image_fasum

                            terminal[i] = L.marker([latitude, longitude], {
                                icon: icon_terminal,
                            }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <a class="glightbox" href="<?= url_api() ?>${image}">
                                    <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
                                </a>
                            </div>
                            <p class="text-center">${address}</p>
                        <hr class="my-1">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Buka</b> : ${open}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="my-1"><b>Jam Tutup</b> : ${close}</p>
                                </div>
                            </div>
                            <p class="text-center my-1"><b>Kontak</b> : <a href="tel:${contact}"><i class="bi bi-telephone-fill"></i> ${contact}</a></p>
                            <div class="text-center d-flex justify-content-evenly mt-2">
                                <button class="btn btn-primary" style="font-size:12px;" onclick="start(${latitude},${longitude})">Mulai dari lokasi ini</button>
                                <button class="btn btn-success" style="font-size:12px;" onclick="dest(${latitude},${longitude})">Menuju lokasi ini</button>
                            </div>
                        </div>
                        `);
                            terminal_bogor.addLayer(terminal[i]);
                        }

                    }
                }
            })
        })

        // layer control
        var baseLayers = {
            "Base Map": BaseMap,
            "Dark Base Map": DarkBaseMap,
            "Google Street": googleStreets,
            "Google Satelit": googleHybrid,
            // "Google Transit": transitMutantRoad,
        };

        var overlays = {

            "Traffic Flow": traffic,
            "Wisata": terminal_bogor,
            "Penginapan": stasiun_bogor,

        };

        L.control.layers(baseLayers, overlays, {

            position: 'topright',
            collapsed: true

        }).addTo(map);




        // custom heading layer
        $(".leaflet-control-layers-base").prepend("<hr class='my-1'>");
        $(".leaflet-control-layers-base").prepend("<label>Layer</label>");
        $(".leaflet-control-layers-overlays").prepend("<hr class='my-1'>");
        $(".leaflet-control-layers-overlays").prepend("<label>Overlay</label>");

        // document.getElementsByClass("leaflet-bottom leaflet-right").style.display = "flex"
        // document.getElementsByClassName("")

        //     $(".leaflet-bottom").attr("style='display:flex'");
        // $(".leaflet-right").attr("style='display:flex'");


        /*Legend specific*/
        var legend = L.control({
            position: "bottomleft"
        });

        legend.onAdd = function(map) {
            var div = L.DomUtil.create("div", "legend");
            div.innerHTML += "<h4>Live Traffic</h4>";
            div.innerHTML += "<i class='param-start'>fast</i>";
            div.innerHTML += '<i style="background: #bbe4c1"></i>';
            div.innerHTML += '<i style="background: #fbe07e"></i>';
            div.innerHTML += '<i style="background: #f9bfac"></i>';
            div.innerHTML += "<i class='param-end'>slow</i>";

            return div;
        };

        legend.addTo(map);

        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        map.on('click', function(e) {
            var container = L.DomUtil.create('div');
            container.innerHTML += "<span>" + e.latlng.toString() + "<span><br>",
                startBtn = createButton('Mulai dari lokasi ini', container),
                destBtn = createButton('Menuju lokasi ini', container);


            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(map);

            L.DomEvent.on(startBtn, 'click', function() {
                console.log(e.latlng);
                route.spliceWaypoints(0, 1, e.latlng);
                map.closePopup();
            });

            L.DomEvent.on(destBtn, 'click', function() {
                route.spliceWaypoints(route.getWaypoints().length - 1, 1, e.latlng);
                map.closePopup();
            });
        });


        function start(lat, lng) {
            route.spliceWaypoints(0, 1, {
                lat: lat,
                lng: lng
            });
            map.closePopup();
        }

        function dest(lat, lng) {
            route.spliceWaypoints(route.getWaypoints().length - 1, 1, {
                lat: lat,
                lng: lng
            });
            map.closePopup();
        }
    </script>


    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/vendor/DataTables/datatables.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>