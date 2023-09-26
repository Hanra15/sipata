<main id="main" class="main">

    <div class="pagetitle">
        <h1>Welcome to SIJAB Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><?= $breadcrumb ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">
            <!-- cctv Card -->
            <div class="col-md-3">
                <div class="card info-card sales-card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                        </ul>
                    </div> -->
                    <div class="card-body py-0">
                        <h5 class="card-title">CCTV <span>| Total</span></h5>

                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-webcam-fill"></i>
                                <!-- <img src="<?= base_url() ?>assets/dashboard/img/icon/icon-pelanggaran.svg" alt="" class="img-fluid"> -->
                            </div>
                            <div class="ps-5">
                                <h6 class="fs-1"><?= $data['getCount']['cctv'] ?></h6>


                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End cctv Card -->

            <!-- trayek Card -->
            <div class="col-md-3">
                <div class="card info-card revenue-card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                        </ul>
                    </div> -->
                    <div class="card-body py-0">
                        <h5 class="card-title">Trayek <span>| Total</span></h5>

                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-route"></i>
                                <!-- <img src="<?= base_url() ?>assets/dashboard/img/icon/icon-kecelakaan.svg" alt="" class="img-fluid"> -->
                            </div>
                            <div class="ps-5">
                                <h6 class="fs-1"><?= $data['getCount']['trayek'] ?></h6>


                            </div>
                        </div>
                    </div>

                </div>
            </div><!-- End trayek Card -->

            <!-- terminal Card -->
            <div class="col-md-3">
                <div class="card info-card customers-card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                        </ul>
                    </div> -->
                    <div class="card-body py-0">
                        <h5 class="card-title">Halte <span>| Total</span></h5>

                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fa-solid fa-bus"></i>
                                <!-- <img src="<?= base_url() ?>assets/dashboard/img/icon/icon-ranmor.svg" alt="" class="img-fluid w-75"> -->
                            </div>
                            <div class="ps-5">
                                <h6 class="fs-1"><?= $data['getCount']['terminal'] ?></h6>


                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End terminal Card -->

            <!-- pos polisi Card -->
            <div class="col-md-3">
                <div class="card info-card customers-card">
                    <!-- <div class="filter">
                        <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                            <li><a class="dropdown-item" href="#">Lihat Detail</a></li>
                        </ul>
                    </div> -->
                    <div class="card-body py-0">
                        <h5 class="card-title">Pos Polisi <span>| Total</span></h5>

                        <div class="d-flex align-items-center justify-content-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="fas fa-shield-alt"></i>
                                <!-- <img src="<?= base_url() ?>assets/dashboard/img/icon/icon-ranmor.svg" alt="" class="img-fluid w-75"> -->
                            </div>
                            <div class="ps-5">
                                <h6 class="fs-1"><?= $data['getCount']['pos'] ?></h6>


                            </div>
                        </div>

                    </div>
                </div>

            </div><!-- End pos polisi Card -->


            <!-- Reports -->
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body px-2 pb-2">
                        <h5 class="card-title pb-1"><a href="<?= base_url() ?>pelayanan/peta" target="_blank">Peta Digital</a> <span>| Kota Bogor</span></h5>

                        <!-- Line Chart -->
                        <div id="map" style="height:607px; width:100%;"></div>
                        <!-- End Line Chart -->

                    </div>

                </div>
            </div><!-- End Reports -->

            <div class="col-md-4">

                <!-- News & Updates Traffic -->
                <div class="card">

                    <div class="card-body pb-3">
                        <h5 class="card-title">Berita Terbaru <span>| Hari ini</span></h5>

                        <div class="news">

                            <?php
                            // var_dump($get_berita);
                            // die;
                            $i = 0;
                            foreach ($data['get_berita'] as $berita) :
                                // var_dump($berita);
                                // die;
                                if (++$i == 6) break;
                            ?>

                                <div class="post-item clearfix">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="<?= url_api() . $berita['news_image'] ?>" alt="" class="img-fluid">

                                        </div>
                                        <div class="col-md-8">
                                            <h4 style="text-align: justify;"><a href="<?= base_url('berita/detail/' . $berita['id']) ?>" target="_blank"><?= $berita['title']; ?></a></h4>
                                            <p><?= substr($berita['content'], 0, 100) . ". . ." ?></p>
                                            <!-- <a href="#" class="btn btn-primary" style="font-size: 10px;">Baca Selengkapnya</a> -->

                                        </div>
                                    </div>
                                </div>


                            <?php endforeach; ?>

                        </div><!-- End sidebar recent posts-->

                    </div>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->




        </div>
    </section>

</main><!-- End #main -->

<script src="<?= base_url() ?>assets/js/kabbogor_polygon.js"></script>
<script src="<?= base_url() ?>assets/js/kotabogor_polygon.js"></script>
<script src="<?= base_url() ?>assets/js/jalur32.js"></script>

<script>
    // initialize the map on the "map" div with a given center and zoom
    const map = L.map('map', {
        gestureHandling: true,
        zoomControl: false,
        fullscreenControl: true,
        center: [-6.5901648, 106.7939541],
        zoom: 12.5,
        minZoom: 13
    });

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
    var kotaColor = {
        "color": "#001E36",
        "fill": 0,
        "fill-opacity": 0,
    }
    var kabColor = {
        "color": "#001E36",
    }
    var colorjalur32 = {
        "color": "#7E1717"
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

    // var kotaBogor = L.geoJSON(kotabogorpol, {
    //     style: kotaColor
    // }).addTo(map)

    var kotaBogor = L.geoJSON(kabbogorpol, {
        style: kabColor
    }).addTo(map)

    var jalur32 = L.geoJSON(jalur32, {
        style: colorjalur32
    })

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
    })

    // var routingJalur = L.Routing.control({
    //     show: false,
    //     draggableWaypoints: false,
    //     addWaypoints: false,
    //     waypoints: [
    //         L.latLng(-6.554891, 106.777668),
    //         L.latLng(-6.562519, 106.811013)
    //     ]
    // }).addTo(map)

    var randomColor = Math.floor(Math.random() * 16777215).toString(16);

    var routeTrayek = L.layerGroup();
    var routeTrayekBis = L.layerGroup();
    var routeTrayekAngkot = L.layerGroup();
    var router = []
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getTrayek",
            dataType: "JSON",
            success: function(result) {
                ressData = result
                for (let i = 0; i < ressData.length; i++) {
                    options = JSON.parse(ressData[i].option);
                    name = ressData[i].name_trayek
                    region = ressData[i].region
                    rute = ressData[i].route
                    // console.log(options[0].latLng);
                    var router = L.Routing.osrmv1(),
                        waypoints = [],
                        line;
                    for (let j = 0; j < options.length; j++) {
                        waypoints.push({
                            latLng: L.latLng(options[j].latLng)
                        });
                    }
                    router.route(waypoints, function(err, routes) {
                        // console.log(routes);
                        if (ressData[i].category_trayek.id == 2) {
                            var line = L.Routing.line(routes[0], {
                                styles: [{
                                    color: 'black',
                                    opacity: 0.15,
                                    weight: 10,
                                    className: 'animateRoute'

                                }, {
                                    color: 'white',
                                    opacity: 0.5,
                                    weight: 7,
                                    className: 'animateRoute'
                                }, {
                                    // color: `#` + randomColor,
                                    color: 'purple',
                                    opacity: 0.35,
                                    weight: 5,
                                    className: 'animateRoute'
                                }]
                            })
                            var bis = line
                        } else {
                            var line = L.Routing.line(routes[0], {
                                styles: [{
                                    color: 'black',
                                    opacity: 0.15,
                                    weight: 7,
                                    className: 'animateRoute'
                                }, {
                                    color: 'white',
                                    opacity: 0.5,
                                    weight: 5,
                                    className: 'animateRoute'
                                }, {
                                    // color: `#` + randomColor,
                                    color: 'blue',
                                    opacity: 0.35,
                                    weight: 4,
                                    className: 'animateRoute'
                                }]
                            })
                            var angkot = line
                        }
                        line.on("linetouched", function(e) {
                            if (ressData[i].category_trayek.id == 2) {
                                // console.log(ressData[i]);
                                nameBis = ressData[i].name_trayek
                                regionBis = ressData[i].region
                                ruteBis = ressData[i].route
                                imageBis = ressData[i].image_trayek
                                var popup = L.popup()
                                    .setLatLng(e.latlng)
                                    .setContent(`
                                        <div class="" style="width: 300px">
                                        <h5 class="text-center mt-3">${nameBis}</h5>
                                        <hr class="my-1">
                                        <img class="img-fluid" src="<?= url_api() ?>${imageBis}">
                                        <p class="text-center my-2">${regionBis}</p>
                                        <p class="text-center my-2">${ruteBis}</p>
                                        </div>
                                        `)
                                    .openOn(map);
                            } else {
                                nameangkot = ressData[i].name_trayek
                                regionangkot = ressData[i].region
                                ruteangkot = ressData[i].route
                                imageAngkot = ressData[i].image_trayek
                                var popup = L.popup()
                                    .setLatLng(e.latlng)
                                    .setContent(`
                                        <div class="" style="width: 300px">
                                        <h5 class="text-center mt-3">${nameangkot}</h5>
                                        <hr class="my-1">
                                        <img class="img-fluid" src="<?= url_api() ?>${imageAngkot}">
                                        <p class="text-center my-2">${regionangkot}</p>
                                        <p class="text-center my-2">${ruteangkot}</p>
                                        </div>
                                        `)
                                    .openOn(map);
                            }
                        })
                        routeTrayek.addLayer(line)
                        if (ressData[i].category_trayek.id == 2) {
                            routeTrayekBis.addLayer(bis)
                        } else {
                            routeTrayekAngkot.addLayer(angkot)
                        }

                    });
                    // console.log(waypoints);

                }

            }
        })
    })


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

    })



    // cctv

    var cctv_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#3b5059;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="bi bi-webcam"></i>${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var cctv = [];
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getCCTV",
            dataType: "JSON",
            success: function(result) {
                let ressData = result;
                // console.log(ressData.length);
                for (let i = 0; i < ressData.length; i++) {
                    if (ressData[i].link_cctv.includes('https://restreamer.kotabogor.go.id/')) {
                        id = i;
                        // console.log(id);
                        var name = ressData[i].name_cctv;
                        var address = ressData[i].address_cctv;
                        var latitude = parseFloat(ressData[i].lat_cctv);
                        var longitude = parseFloat(ressData[i].lng_cctv);
                        var refresh
                        var resource = `<video id="cctv-video-${ressData[i].id}" autoplay src="${ressData[i].link_cctv}" style="width:100%;height:250px" controls></video>`;

                        cctv[i] = L.marker([latitude, longitude], {
                            icon: icon_cctv,
                        }).on("popupopen", function(e) {
                            var videoUrl = `${ressData[i].link_cctv}`;
                            var video = document.getElementById(`cctv-video-${ressData[i].id}`);

                            if (Hls.isSupported()) {
                                var hls = new Hls();
                                hls.loadSource(videoUrl);
                                hls.attachMedia(video);
                            } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
                                video.src = videoUrl;
                            } else {
                                video.innerHTML = "Maaf, browser Anda tidak mendukung pemutaran video.";
                            }
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                        ${resource}
                        <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                        <p class="text-center">${address}</p>
                        </div>
                        `);

                    } else {
                        id = i;
                        // console.log(id);
                        var name = ressData[i].name_cctv;
                        var address = ressData[i].address_cctv;
                        var latitude = parseFloat(ressData[i].lat_cctv);
                        var longitude = parseFloat(ressData[i].lng_cctv);
                        var refresh
                        var resource = `<img class="cctv-${id}" src="${ressData[i].link_cctv}" style="width:100%;height:250px" />`;

                        cctv[i] = L.marker([latitude, longitude], {
                            icon: icon_cctv,
                        }).on("popupopen", function(e) {
                            // console.log(e)
                            refresh = window.setInterval(function() {
                                var d = new Date();
                                // console.log("is refresh")
                                $(e.popup._contentNode).find('img').attr("src", ressData[i].link_cctv + '&time=' + d.getTime());
                            }, 250);
                        }).on("popupclose", function() {
                            clearInterval(refresh)
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                        <a href="${ressData[i].link_cctv}" target="_blank">${resource}</a>
                        <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                        <p class="text-center">${address}</p>
                        </div>
                        `);
                    }


                    cctv_bogor.addLayer(cctv[i]);
                };
            }
        })
    })
    map.addLayer(cctv_bogor);


    var polsek_bogor = L.layerGroup();
    var polres_bogor = L.layerGroup();
    var pos_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#83e69e;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#000;"><i class="bi bi-building-exclamation"></i> ${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var polsek = [];
    var polres = [];
    var pos = [];
    // Polantas Office
    $(document).ready(function() {
        $.ajax({
            type: "POST",
            url: "<?= base_url() ?>Peta/getPolantas",
            dataType: "JSON",
            success: function(result) {
                let ressData = result;
                // console.log(ressData);
                for (let i = 0; i < ressData.length; i++) {
                    // polsek
                    if (ressData[i].category_polantas.id == 1) {
                        var name = ressData[i].name_polantas
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_polantas
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_polantas

                        polsek[i] = L.marker([latitude, longitude], {
                            icon: icon_polsek,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                        polsek_bogor.addLayer(polsek[i]);
                        // console.log(ressData[i]);
                        // polres 
                    } else if (ressData[i].category_polantas.id == 2) {
                        var name = ressData[i].name_polantas
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_polantas
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_polantas

                        polres[i] = L.marker([latitude, longitude], {
                            icon: icon_polres,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                        polres_bogor.addLayer(polres[i]);
                    } else if (ressData[i].category_polantas.id == 3) {
                        var name = ressData[i].name_polantas
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_polantas
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_polantas

                        pos[i] = L.marker([latitude, longitude], {
                            icon: icon_pos,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                        pos_bogor.addLayer(pos[i]);
                    }


                }
            }
        })
    })

    var stasiun_bogor = L.layerGroup();
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
    var rest_bogor = L.layerGroup();
    var halte_bogor = L.markerClusterGroup({
        iconCreateFunction: function(cluster) {
            return new L.DivIcon({
                html: `
                <div style="width: 35px; height: 35px; border-radius: 50%; background-color:#007bb5;text-align: center;margin-top: -1px;margin-left: -1px;">
                <b style="top: 8px;position: relative; font-size: 12px; color:#ffffff;"><i class="bi bi-bus-front"></i> ${cluster.getChildCount()}</b>
                </div>`
            });
        }
    });
    var stasiun = [];
    var terminal = [];
    var rest = [];
    var halte = [];
    // Polantas Office
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
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                    } else if (ressData[i].category_fasum.id == 7) {
                        var name = ressData[i].name_fasum
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_fasum
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_fasum

                        rest[i] = L.marker([latitude, longitude], {
                            icon: icon_rest,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                        rest_bogor.addLayer(rest[i]);
                    } else if (ressData[i].category_fasum.id == 8) {
                        var name = ressData[i].name_fasum
                        var latitude = ressData[i].latitude
                        var longitude = ressData[i].longitude
                        var address = ressData[i].address
                        var contact = ressData[i].contact_fasum
                        var open = ressData[i].open_time
                        var close = ressData[i].close_time
                        var image = ressData[i].image_fasum

                        halte[i] = L.marker([latitude, longitude], {
                            icon: icon_halte,
                        }).bindPopup(`
                        <div class="" style="width: 300px">
                            <h5 class="text-center mt-3">${name}</h5>
                        <hr>
                            <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:100%">
                                <img class="img-fluid" src="<?= url_api() ?>${image}" alt="logo"/>
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
                        halte_bogor.addLayer(halte[i]);
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
        "Google Traffic": trafficMutantRoad,
        // "Google Transit": transitMutantRoad,
    };

    var overlays = {

        "Traffic Flow": traffic,
        "All Trayek": routeTrayek,
        "Trayek BisKita": routeTrayekBis,
        "Trayek Angkot": routeTrayekAngkot,
        "Stasiun": stasiun_bogor,
        "Terminal": terminal_bogor,
        "Rest Area": rest_bogor,
        "Halte": halte_bogor,
        "Polres": polres_bogor,
        "Polsek": polsek_bogor,
        "Pos": pos_bogor,
        "CCTV": cctv_bogor,

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