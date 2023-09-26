<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="<?= base_url() ?>cctv"><?= $breadcrumb ?></a> </li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div id="map" style="height: 100px;"></div> -->
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <h3 class="m-0">Detail CCTV</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-row-reverse">
                                    <a href="<?= base_url() ?>cctv/Cctv/edit_cctv/<?= $data['getDetails']['id'] ?>" class="btn btn-primary mt-3 mb-3 d-flex">
                                        Edit <?= $breadcrumb; ?>
                                    </a>
                                    <button type="button" id="btnHapus" class="btn btn-danger mt-3 mb-3 d-flex me-4" onclick="hapus(<?= $data['getDetails']['id'] ?>)">
                                        Hapus <?= $breadcrumb; ?>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <hr class="mt-0">

                        <form action="" method="" id="form_detail" class="form row g-3 needs-validation" novalidate>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="namaCCTV" name="name" placeholder="masukan Nama CCTV" value="<?= $data['getDetails']['name_cctv'] ?>" disabled>
                                    <label for="namaCCTV" class="col-form-label">Nama CCTV</label>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="IPCCTV" name="ip" placeholder="masukan IP CCTV" value="<?= $data['getDetails']['ip_cctv'] ?>" disabled>
                                    <label for="IPCCTV" class="col-form-label">IP CCTV</label>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <label for="mapDetail" class="col-form-label">Lokasi CCTV</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="mapDetail" class="border border-primary-subtile border-5" style="height:555px">
                                            <!-- <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;"> -->
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <?php
                                        if (strpos($data['getDetails']['link_cctv'], 'https://restreamer.kotabogor.go.id/')  !== false) {
                                        ?>
                                            <video id="cctv-video" autoplay src="<?= $data['getDetails']['link_cctv'] ?>" class="w-100 h-100 border border-primary-subtile border-5" controls></video>
                                        <?php } else { ?>
                                            <img src="<?= $data['getDetails']['link_cctv'] ?>" alt="" class="views-<?= $data['getDetails']['id'] ?> w-100 h-100 border border-primary-subtile border-5">
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>

                            <div id="titikMarker">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="addressCCTV" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;" disabled><?= $data['getDetails']['address_cctv'] ?></textarea>
                                        <label for="addressCCTV" class="col-sm-2 col-form-label">Alamat</label>
                                    </div>
                                    <div class="list-group" id="listAddress"></div>
                                </div>
                                <div class="col-md-6" style="display: none;">
                                    <div class="material-textfield mb-3">
                                        <input style="width: 100%;" name="cordinate" placeholder="" type="text">
                                        <label class="labelmui">Coordinate</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $data['getDetails']['lat_cctv'] ?>" disabled>
                                            <label for="latitude">Latitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $data['getDetails']['lng_cctv'] ?>" disabled>
                                            <label for="longitude">Longitude</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="linkCCTV" name="link" placeholder="masukan link CCTV" value="<?= $data['getDetails']['link_cctv'] ?>" disabled>
                                    <label for="linkCCTV" class="col-form-label">Link CCTV</label>
                                </div>
                            </div>

                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url() ?>cctv/Cctv" class="btn btn-secondary">Kembali</a>
                    </div>
                    </form><!-- End Form Validation -->

                </div>
            </div>

        </div>
        </div>
    </section>

</main>

<script>
    $(document).ready(function() {
        window.setInterval(function() {
            var d = new Date()
            $(`.views-<?= $data['getDetails']['id'] ?>`).attr("src", '<?= $data['getDetails']['link_cctv'] ?>' + d.getTime());
        }, 250)

        // document.getElementById('mapDetail').innerHTML = "<div id='mapDetail' style='height:300px'>";
        var initialCenter = [-6.5901648, 106.7939541];
        var initialZoom = 12;
        // layers
        var OpenStreetMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            maxZoom: 20
        });
        // initialize the map on the "map" div with a given center and zoom
        var mapDetail = L.map('mapDetail', {
            maxZoom: 20,
            minZoom: 1,
            dragging: false,
            zoomControl: true,
            layers: [OpenStreetMap],
        }).setView(initialCenter, initialZoom);


        var coordLat = '<?= $data['getDetails']['lat_cctv'] ?>'
        var coordLng = '<?= $data['getDetails']['lng_cctv'] ?>'
        L.marker([parseFloat(coordLat), parseFloat(coordLng)]).addTo(mapDetail);
        mapDetail.setView(initialCenter, initialZoom);

        mapDetail.flyTo([parseFloat(coordLat), parseFloat(coordLng)], 17);



    })

    var videoUrl = "<?= $data['getDetails']['link_cctv'] ?>";
    var video = document.getElementById("cctv-video");

    if (Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource(videoUrl);
        hls.attachMedia(video);
    } else if (video.canPlayType("application/vnd.apple.mpegurl")) {
        video.src = videoUrl;
    } else {
        video.innerHTML = "Maaf, browser Anda tidak mendukung pemutaran video.";
    }

    function hapus(id) {
        Swal.fire({
            title: 'Apakah anda ingin menghapus data ini?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#C61318',
            cancelButtonColor: '#003A91',
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= base_url() ?>cctv/Cctv/hapus",
                    type: "POST",
                    data: {
                        id_cctv: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                window.location.href = "<?= base_url() ?>cctv/Cctv";
                            })
                        } else {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'error'
                            ).then(function() {});
                        }
                    }

                })
            }
        })
    }
</script>