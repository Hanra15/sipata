<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>polantas"><?= $breadcrumb ?></a> </li>
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
                                    <a href="<?= base_url() ?>polantas/Polantas/edit_polantas/<?= $data['getDetails']['id'] ?>" class="btn btn-primary mt-3 mb-3 d-flex">
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
                                    <input type="text" class="form-control" id="namaPolantas" name="nama" placeholder="test" value="<?= $data['getDetails']['name_polantas'] ?>" disabled>
                                    <label for="namaPolantas" class="col-form-label">Nama Polantas</label>
                                    <div class="invalid-feedback">
                                        Nama polantas harus diisi
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="kategoriPolantass" name="kategori" placeholder="test" value="<?= $data['getDetails']['category_polantas']['name_category'] ?>" disabled>
                                    <label for="kategoriPolantass" class="col-form-label">Kategori Polantas</label>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <label for="mapDetail" class="col-form-label">Lokasi</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div id="mapDetail" style="height:555px">
                                            <!-- <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;"> -->
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="border border-primary-subtile border-5 d-flex justify-content-center" style="width: 100%; height:555px">
                                            <img src="<?= url_api() . $data['getDetails']['image_polantas'] ?>" alt="no-image" class="img-fluid">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="titikMarker">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="address" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;" disabled><?= $data['getDetails']['address'] ?></textarea>
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
                                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $data['getDetails']['latitude'] ?>" disabled>
                                            <label for="latitude">Latitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $data['getDetails']['longitude'] ?>" disabled>
                                            <label for="longitude">Longitude</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="open" name="open" placeholder="test" value="<?= $data['getDetails']['open_time'] ?>" disabled>
                                    <label for="open" class="col-form-label">Jam Buka</label>
                                    <div class="invalid-feedback">
                                        Jam buka harus diisi
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="close" name="close" placeholder="test" value="<?= $data['getDetails']['close_time'] ?>" disabled>
                                    <label for="close" class="col-form-label">Jam Tutup</label>
                                    <div class="invalid-feedback">
                                        Jam tutup harus diisi
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="kontak" name="kontak" placeholder="test" value="<?= $data['getDetails']['contact_polantas'] ?>" disabled>
                                    <label for="kontak" class="col-form-label">Kontak</label>
                                    <div class="invalid-feedback">
                                        Kontak harus diisi
                                    </div>
                                </div>

                            </div>

                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url() ?>polantas" class="btn btn-secondary">Kembali</a>

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


        var coordLat = '<?= $data['getDetails']['latitude'] ?>'
        var coordLng = '<?= $data['getDetails']['longitude'] ?>'
        L.marker([parseFloat(coordLat), parseFloat(coordLng)]).addTo(mapDetail);
        mapDetail.setView(initialCenter, initialZoom);

        mapDetail.flyTo([parseFloat(coordLat), parseFloat(coordLng)], 17);

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