<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>cctv"><?= $breadcrumb ?></a> </li>
                <li class="breadcrumb-item active">Edit</li>
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
                                <h3 class="m-0">Edit <?= $breadcrumb ?></h3>
                                </h3>
                            </div>
                            <div class="col-md-6">
                                <div class="d-flex flex-row-reverse">
                                    <button type="button" id="btnHapus" class="btn btn-danger mt-3 mb-3 d-flex" onclick="hapus(<?= $data['getDetails']['id'] ?>)">
                                        Hapus <?= $breadcrumb; ?>
                                    </button>
                                </div>

                            </div>
                        </div>
                        <hr class="mt-0">

                        <form action="" method="post" id="form_edit" class="form row g-3 needs-validation" enctype="multipart/form-data" novalidate>
                            <input type="hidden" name="id" value="<?= $data['getDetails']['id'] ?>" type="text">
                            <div class="col-md-12">
                                <label for="fotoLokasi" class="col-form-label">Gambar Kendaraan</label>
                                <input type="file" class="dropify" id="fotoLokasi" name="image" data-allowed-file-extensions="jpg jpeg png" data-default-file="<?= url_api() . $data['getDetails']['image_trayek'] ?>" data-show-remove="false">

                            </div>
                            <div class="col-md-6">

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="namaTrayek" name="nama" placeholder="test" value="<?= $data['getDetails']['name_trayek'] ?>" required>
                                    <label for="namaTrayek" class="col-form-label">Nama Trayek</label>
                                    <div class="invalid-feedback">
                                        Nama Trayek harus diisi
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">

                                <div class="form-floating">
                                    <select class="form-select" name="kategori" id="kategoriTrayek">
                                        <option value="<?= $data['getDetails']['category_trayek']['id'] ?>"><?= $data['getDetails']['category_trayek']['name_category'] ?> (current)</option>
                                        <?php

                                        foreach ($data['getKategori'] as $kategori) :
                                        ?>
                                            <option value="<?= $kategori['id'] ?>"><?= $kategori['name_category'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <label for="kategoriTrayek" class="col-form-label">Kategori Trayek</label>
                                    <div class="invalid-feedback">
                                        Kategori harus diisi
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12">
                                <label for="mapEdit" class="col-form-label">Lokasi Polantas</label>
                                <div id="mapEdit" style="height:530px">
                                </div>
                            </div>

                            <div id="routeMarker">
                                <textarea name="routeUtama" id="routeUtama" cols="30" rows="10" class="d-none"><?= $data['getDetails']['option'] ?></textarea>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="wilayah" name="wilayah" placeholder="test" value="<?= $data['getDetails']['region'] ?>" required>
                                    <label for="wilayah" class="col-form-label">Wilayah</label>
                                    <div class="invalid-feedback">
                                        Wilayah harus diisi
                                    </div>

                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="rute" name="rute" placeholder="test" value="<?= $data['getDetails']['route'] ?>" required>
                                    <label for="rute" class="col-form-label">Rute</label>
                                    <div class="invalid-feedback">
                                        Rute harus diisi
                                    </div>

                                </div>

                            </div>

                            <div class="modal-footer">
                                <a href="<?= base_url() ?>trayek/Trayek" class="btn btn-secondary">Kembali</a>
                                <button class="btn btn-primary" type="submit" id="btnEdit">Simpan</button>
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

        var initialCenter = [-6.5901648, 106.7939541];
        var initialZoom = 12;
        // layers
        var OpenStreetMap = L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png', {
            maxZoom: 20
        });
        // initialize the map on the "map" div with a given center and zoom
        const mapEdit = L.map('mapEdit', {
            maxZoom: 20,
            minZoom: 1,
            zoomControl: true,
            layers: [OpenStreetMap],
        }).setView(initialCenter, initialZoom);

        mapEdit.invalidateSize();
        route = L.Routing.control({
            collapsible: true,
            waypoints: JSON.parse($('#routeUtama').val()),
            router: new L.Routing.osrmv1({
                language: 'en',
                profile: 'car'
            }),
            geocoder: L.Control.Geocoder.nominatim({})
        }).addTo(mapEdit);

        function createButton(label, container) {
            var btn = L.DomUtil.create('button', '', container);
            btn.setAttribute('type', 'button');
            btn.innerHTML = label;
            return btn;
        }

        mapEdit.on('click', function(e) {
            var container = L.DomUtil.create('div'),
                startBtn = createButton('Start from this location', container),
                destBtn = createButton('Go to this location', container);

            L.DomEvent.on(startBtn, 'click', function() {

                route.spliceWaypoints(0, 1, e.latlng);
                mapEdit.closePopup();
            });
            L.DomEvent.on(destBtn, 'click', function() {

                route.spliceWaypoints(route.getWaypoints().length - 1, 1, e.latlng);
                mapEdit.closePopup();

                router = route.getWaypoints();
                $('#routeUtama').val(JSON.stringify(router));
            });
            L.popup()
                .setContent(container)
                .setLatLng(e.latlng)
                .openOn(mapEdit);
        });
    })

    $('#btnEdit').on('click', function(e) {
        e.preventDefault();
        var formData = new FormData($('#form_edit')[0]);
        // console.log(formData)
        $.ajax({
            url: '<?= base_url() ?>trayek/Trayek/edit',
            type: 'POST',
            data: formData,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            success: function(results) {
                if (results['status'] == true) {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'success',
                        console.log(results),
                    ).then(function() {
                        window.location.href = "<?= base_url() ?>trayek/Trayek";
                    })
                } else {
                    Swal.fire(
                        `${results['message']}`,
                        '',
                        'error',
                        console.log(results),
                    ).then(function() {})
                }
            }
        })
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