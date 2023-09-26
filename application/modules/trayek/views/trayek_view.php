<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $breadcrumb ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div id="map" style="height: 100px;"></div> -->
                <div class="card">
                    <div class="card-body">
                        <button type="button" id="btnTambah" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                            Tambah <?= $breadcrumb; ?>
                        </button>
                        <!-- <a href="<?= base_url() ?>trayek/Kategori" class="btn btn-success mt-3 mb-3">
                            Kelola Kategori <?= $breadcrumb; ?>
                        </a> -->
                        <hr class="mt-0">

                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table table-stripped table-responsive">
                            <thead>
                                <th style="width: 25px;">No</th>
                                <th>Nama Trayek</th>
                                <th>Kategori Trayek</th>
                                <th>Wilayah</th>
                                <th>Rute</th>
                                <th style="width: 50px;">Aksi</th>
                            </thead>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Tambah Modal -->

<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $breadcrumb; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Validation -->
                <form action="" method="post" id="form_tambah" class="form row g-3 needs-validation" enctype="multipart/form-data" novalidate>
                    <div class="col-md-12">

                        <label for="fileval" class="col-form-label">Gambar Kendaraan</label>

                        <input type="file" class="dropify" id="fileval" name="image" data-allowed-file-extensions="jpg jpeg png" required>
                        <p class="mb-0 text-secondary">Ukuran file maks: 2 mb</p>
                        <div class="invalid-feedback">
                            Gambar kendaraan harus diupload
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="namaTrayek" name="nama" placeholder="test" required>
                            <label for="namaTrayek" class="col-form-label">Nama Trayek</label>
                            <div class="invalid-feedback">
                                Nama Trayek harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" name="kategori">
                                <option value="">Pilih Kategori Trayek</option>
                                <?php
                                foreach ($data['getKategori'] as $kategori) :
                                ?>
                                    <option value="<?= $kategori['id'] ?>"><?= $kategori['name_category'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="tanggalBerita" class="col-form-label">Kategori Trayek</label>
                            <div class="invalid-feedback">
                                Kategori harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <label for="mapTambah" class="col-form-label">Rute Trayek</label>
                        <div id="mapTambah" style="height:530px">
                        </div>
                    </div>

                    <div id="routeMarker">
                        <textarea name="routeUtama" id="routeUtama" cols="30" rows="10" class="d-none"></textarea>
                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="wilayah" name="wilayah" placeholder="test" required>
                            <label for="wilayah" class="col-form-label">Wilayah</label>
                            <div class="invalid-feedback">
                                Wilayah harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="rute" name="rute" rows="15" placeholder="masukan rute" style="max-height: 120px; height: 120px;"></textarea>
                            <label for="rute" class="col-form-label">Rute</label>
                            <div class="invalid-feedback">
                                Rute harus diisi
                            </div>
                        </div>

                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
            </form><!-- End Form Validation -->
        </div>
    </div>
</div><!-- End Tambah Modal-->


<script src="<?= base_url() ?>assets/js/kabbogor_polygon.js"></script>

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

        // init fetch data
        var fetchData = fetch("<?= base_url() ?>trayek/serverSideTable").then(
            response => response.json()
        ).then(
            data => {
                if (!data.length) {
                    return
                }
                // console.log(data);
                var table = new DataTable("#datatable", {
                    aLengthMenu: [
                        [5, 10, 25, -1],
                        [5, 10, 25, "All"]
                    ],
                    'iDisplayLength': 10,

                    // perPage: 10,
                    // perPageSelect: [5, 10, 20, ['All', -1]],
                    // fixedColumns: true,
                    data: data.map(item => Object.values(item)),




                })
            }
        )


        // function tambah data
        $(".form").submit(function(e) {
            e.preventDefault();
            var formData = new FormData($('.form')[0]);
            // console.log(formData);
            $.ajax({
                url: "<?= base_url(); ?>trayek/Trayek/tambah",
                method: "POST",
                data: formData,
                dataType: 'JSON',
                contentType: false,
                processData: false,
                success: function(data) {
                    if (data['status'] == true) {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'success',
                            console.log(data),
                        ).then(function() {
                            location.reload();
                        });
                    } else {
                        Swal.fire(
                            `${data['message']}`,
                            '',
                            'error',
                            console.log(data),
                        ).then(function() {});
                    }
                }
            });
        });
    })

    // clear data
    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
    })

    $(document).ready(function() {
        let arrayWaypoint = [];
        var initialCenter = [-6.5901648, 106.7939541];
        var initialZoom = 12;
        // layers
        var OpenStreetMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            maxZoom: 20
        });
        // initialize the map on the "map" div with a given center and zoom
        const mapAdd = L.map('mapTambah', {
            Zoom: 12.5,
            minZoom: 13,
            zoomControl: true,
            layers: [OpenStreetMap],
        }).setView(initialCenter, initialZoom);



        var kabColor = {
            "color": "#001E36",
        }

        var kotaBogor = L.geoJSON(kabbogorpol, {
            style: kabColor
        }).addTo(mapAdd)

        $('#modalTambah').on('shown.bs.modal', function() {
            mapAdd.invalidateSize();
            route = L.Routing.control({
                collapsible: true,
                waypoints: arrayWaypoint,
                router: new L.Routing.osrmv1({
                    language: 'en',
                    profile: 'car'
                }),
                geocoder: L.Control.Geocoder.nominatim({})
            }).addTo(mapAdd);

            function createButton(label, container) {
                var btn = L.DomUtil.create('button', '', container);
                btn.setAttribute('type', 'button');
                btn.innerHTML = label;
                return btn;
            }

            mapAdd.on('click', function(e) {
                var container = L.DomUtil.create('div'),
                    startBtn = createButton('Start from this location', container),
                    destBtn = createButton('Go to this location', container);

                L.DomEvent.on(startBtn, 'click', function() {

                    route.spliceWaypoints(0, 1, e.latlng);
                    mapAdd.closePopup();
                });
                L.DomEvent.on(destBtn, 'click', function() {

                    route.spliceWaypoints(route.getWaypoints().length - 1, 1, e.latlng);
                    mapAdd.closePopup();

                    router = route.getWaypoints();
                    $('#routeUtama').val(JSON.stringify(router));
                });
                L.popup()
                    .setContent(container)
                    .setLatLng(e.latlng)
                    .openOn(mapAdd);
            });
        });

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