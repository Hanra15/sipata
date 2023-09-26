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
                        <!-- <a href="<?= base_url() ?>polantas/Kategori" class="btn btn-success mt-3 mb-3">
                            Kelola Kategori <?= $breadcrumb; ?>
                        </a> -->
                        <hr class="mt-0">

                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table table-stripped table-responsive">
                            <thead>
                                <th style="width: 25px;">No</th>
                                <th>Nama Polantas</th>
                                <th>Kategori Polantas</th>
                                <th style="width: 700px;">Alamat</th>
                                <th>Kontak</th>
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
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="namaPolantas" name="nama" placeholder="test" required>
                            <label for="namaPolantas" class="col-form-label">Nama Polantas</label>
                            <div class="invalid-feedback">
                                Nama polantas harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <select class="form-select" name="kategori" id="kategori">
                                <option value="">Pilih Kategori Polantas</option>
                                <?php
                                foreach ($data['getKategori'] as $kategori) :
                                ?>
                                    <option value="<?= $kategori['id'] ?>"><?= $kategori['name_category'] ?></option>
                                <?php endforeach ?>
                            </select>
                            <label for="kategori" class="col-form-label">Kategori Polantas</label>
                            <div class="invalid-feedback">
                                Kategori harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">

                        <label for="fileval" class="col-form-label">Foto Lokasi</label>

                        <input type="file" class="dropify" id="fileval" name="image" data-allowed-file-extensions="jpg jpeg png" required>
                        <p class="mb-0 text-secondary">Ukuran file maks: 2 mb</p>
                        <div class="invalid-feedback">
                            Foto Lokasi harus diupload
                        </div>

                    </div>

                    <div class="col-md-12">
                        <label for="mapTambah" class="col-form-label">Lokasi Polantas</label>
                        <div id="mapTambah" style="height:300px">
                            <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                        </div>
                    </div>

                    <div id="titikMarker">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="address" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;"></textarea>
                                <label for="address" class="col-sm-2 col-form-label">Alamat</label>
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
                                    <input type="text" class="form-control" id="latitude" name="latitude">
                                    <label for="latitude">Latitude</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="longitude" name="longitude">
                                    <label for="longitude">Longitude</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="time" class="form-control" id="open" name="open" placeholder="test" required>
                            <label for="open" class="col-form-label">Jam Buka</label>
                            <div class="invalid-feedback">
                                Jam buka harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="time" class="form-control" id="close" name="close" placeholder="test" required>
                            <label for="close" class="col-form-label">Jam Tutup</label>
                            <div class="invalid-feedback">
                                Jam tutup harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="kontak" name="kontak" placeholder="test" required>
                            <label for="kontak" class="col-form-label">Kontak</label>
                            <div class="invalid-feedback">
                                Kontak harus diisi
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
        var fetchData = fetch("<?= base_url() ?>polantas/serverSideTable").then(
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
                url: "<?= base_url(); ?>polantas/Polantas/tambah",
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
        document.getElementById("namaPolantas").removeAttribute('disabled');
        document.getElementById("address").removeAttribute('disabled');
        document.getElementById("latitude").removeAttribute('disabled');
        document.getElementById("longitude").removeAttribute('disabled');
        document.getElementById("open").removeAttribute('disabled');
        document.getElementById("close").removeAttribute('disabled');
        document.getElementById("kontak").removeAttribute('disabled');
    })

    $(document).ready(function() {
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
        });

        let countlist = 0;
        let list = "";
        $('[name=address]').on("change", function(e) {
            console.log(this.value);
            $.get(`https://nominatim.openstreetmap.org/search?format=json&q=${this.value}`, function(ress) {
                console.log(ress);
                countlist = 0;
                list = "";
                ress.forEach(el => {
                    countlist += 1;
                    list += `<a class="list-group-item"
                         id="list${countlist}"
                         data-alamat="${el.display_name}"
                         data-cords="${el.lat},${el.lon}" href="javascript:void(0)">${el.display_name}</a>`;
                    $('#listAddress').html(list);
                });
                if (list == "") {
                    countlist = 0;
                    list = "";
                    $('#listAddress').html(list);
                }

                for (let i = 0; i < ress.length; i++) {
                    $(`#list${i+1}`).click(function() {
                        var latlong = $(this).data('cords').split(',');
                        var latitude = parseFloat(latlong[0]);
                        var longitude = parseFloat(latlong[1]);

                        $("[name=latitude]").val(latitude);
                        $("[name=longitude]").val(longitude);

                        // console.log({a:latitude, b:longitude});
                        $('[name=address]').val($(this).data('alamat'));
                        $('[name=cordinate]').val($(this).data('cords'));
                        mapAdd.flyTo([latitude, longitude], 17);
                        $('#listAddress').hide();
                    });
                }

            });
        });

        $('[name=cordinate]').on("change", function(e) {
            var cordLatLong = this.value.split(',');
            var cordLat = parseFloat(cordLatLong[0]);
            var corLong = parseFloat(cordLatLong[1]);
            // console.log({a:cordLat, b:corLong});
            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                $('[name=address]').val(data['display_name']);
                mapAdd.flyTo([cordLat, corLong], 17);
            });
        });

        $('[name=cordinate]').on("change", function(e) {

            var cordLatLong = this.value.split(',');
            var cordLat = parseFloat(cordLatLong[0]);
            var corLong = parseFloat(cordLatLong[1]);

            // console.log({a:cordLat, b:corLong});

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                $('[name=address]').val(data['display_name']);
                mapAdd.flyTo([cordLat, corLong], 17);
            });
        });

        mapAdd.on("dragend", function(e) {

            var corLat = mapAdd.getCenter()['lat'];
            var corLng = mapAdd.getCenter()['lng'];
            var cord = `${corLat},${corLng}`;

            $("[name=latitude]").val(corLat);
            $("[name=longitude]").val(corLng);
            $('[name=cordinate]').val(cord);

            $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                $('[name=address]').val(data['display_name']);

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
                    url: "<?= base_url() ?>polantas/Polantas/hapus",
                    type: "POST",
                    data: {
                        id_polantas: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                window.location.href = "<?= base_url() ?>polantas/Polantas";
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