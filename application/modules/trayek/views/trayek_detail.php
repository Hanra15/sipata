<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>trayek"><?= $breadcrumb ?></a> </li>
                <li class="breadcrumb-item active">Detail</li>
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
                                <h3 class="m-0">Detail <?= $breadcrumb ?></h3>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-row-reverse">
                                    <a href="<?= base_url() ?>trayek/Trayek/edit_trayek/<?= $data['getDetails']['id'] ?>" class="btn btn-primary mt-3 mb-3 d-flex">
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
                            <div class="col-md-12">
                                <label for="fotoLokasi" class="col-form-label">Gambar Kendaraan</label>
                                <input type="file" class="dropify" id="fotoLokasi" name="image" data-allowed-file-extensions="jpg jpeg png" data-default-file="<?= url_api() . $data['getDetails']['image_trayek'] ?>" data-show-remove="false">

                            </div>
                            <div class="col-md-6">

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="namaTrayek" name="nama" placeholder="test" value="<?= $data['getDetails']['name_trayek'] ?>" disabled>
                                    <label for="namaTrayek" class="col-form-label">Nama Trayek</label>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="kategoriTrayek" name="kategori" placeholder="test" value="<?= $data['getDetails']['category_trayek']['name_category'] ?>" disabled>
                                    <label for="kategoriTrayek" class="col-form-label">Kategori Trayek</label>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <label for="mapDetail" class="col-form-label">Lokasi</label>
                                <div id="mapDetail" style="height:555px">
                                    <!-- <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;"> -->
                                </div>
                            </div>
                            <div id="routeMarker">
                                <textarea name="routeUtama" id="routeUtama" cols="30" rows="10" class="d-none"><?= $data['getDetails']['option'] ?></textarea>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="wilayah" name="wilayah" placeholder="test" value="<?= $data['getDetails']['region'] ?>" disabled>
                                    <label for="wilayah" class="col-form-label">Wilayah</label>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="rute" name="rute" placeholder="test" value="<?= $data['getDetails']['route'] ?>" disabled>
                                    <label for="rute" class="col-form-label">Rute</label>

                                </div>

                            </div>

                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url() ?>trayek" class="btn btn-secondary">Kembali</a>

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
        // dropify
        $('.dropify').dropify({
            messages: {
                'default': 'Drag and drop atau klik disini untuk menambahkan foto berita',
                'replace': 'klik disini untuk mengganti file<br>Ukuran file maks: 2 mb',
                'remove': 'Hapus',
                'error': 'Ooops, something wrong happended.'
            }
        });
        let arrayWaypoint = [];

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

        mapDetail.invalidateSize();
        route = L.Routing.control({
            collapsible: true,
            waypoints: JSON.parse($('#routeUtama').val()),
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapDetail);


    })

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
                    url: "<?= base_url() ?>trayek/Trayek/hapus",
                    type: "POST",
                    data: {
                        id_trayek: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                window.location.href = "<?= base_url() ?>trayek/Trayek";
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