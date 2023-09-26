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
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <button type="button" id="btnTambah" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                                    Tambah <?= $breadcrumb; ?>
                                </button>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="d-flex flex-row-reverse">
                                    <ul class="nav nav-pills">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="<?= base_url() ?>cctv/Cctv" data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i class="bx bx-list-ul"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?= base_url() ?>cctv/Cctv/thumbnail" data-bs-toggle="tooltip" data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="<?= base_url() ?>cctv/Cctv/fullscreen" data-bs-toggle="tooltip" data-bs-placement="top" title="FullScreen"><i class="bx bx bx-fullscreen"></i></a>
                                        </li>
                                    </ul>
                                </div> -->

                            </div>
                        </div>
                        <hr class="mt-0">


                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table table-stripped table-responsive">
                            <thead>
                                <th>No</th>
                                <th>CCTV</th>
                                <th>Alamat CCTV</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Aksi</th>
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
                            <input type="text" class="form-control" id="namaCCTV" name="name" placeholder="masukan Nama CCTV" required>
                            <label for="namaCCTV" class="col-form-label">Nama CCTV</label>
                            <div class="invalid-feedback">
                                Nama CCTV harus diisi
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="IPCCTV" name="ip" placeholder="masukan IP CCTV" required>
                            <label for="IPCCTV" class="col-form-label">IP CCTV</label>
                            <div class="invalid-feedback">
                                IP harus diisi
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <label for="mapTambah" class="col-form-label">Lokasi CCTV</label>
                        <div id="mapTambah" style="height:300px">
                            <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                        </div>
                    </div>

                    <div id="titikMarker">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="addressCCTV" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;"></textarea>
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

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="linkCCTV" name="link" placeholder="masukan link CCTV">
                            <label for="linkCCTV" class="col-form-label">Link CCTV</label>
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

<!-- Detail Modal -->

<div class="modal fade Detailmodal" id="DetailModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail <?= $breadcrumb; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Validation -->
                <form action="" method="" id="form_detail" class="form row g-3 needs-validation" novalidate>
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="namaCCTV" name="name" placeholder="masukan Nama CCTV" required>
                            <label for="namaCCTV" class="col-form-label">Nama CCTV</label>
                            <div class="invalid-feedback">
                                Nama CCTV harus diisi
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="IPCCTV" name="ip" placeholder="masukan IP CCTV" required>
                            <label for="IPCCTV" class="col-form-label">IP CCTV</label>
                            <div class="invalid-feedback">
                                IP harus diisi
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <label for="mapDetail" class="col-form-label">Lokasi CCTV</label>
                        <div class="row">
                            <div class="col-md-6">
                                <div id="mapDetail" style="height:300px">
                                    <!-- <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;"> -->
                                </div>

                            </div>
                            <div class="col-md-6">
                                <img src="<?= base_url() ?>assets/img/img-cctv.png" alt="" class="w-100 h-100">
                            </div>
                        </div>
                    </div>

                    <div id="titikMarker">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="addressCCTV" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;"></textarea>
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

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="linkCCTV" name="link" placeholder="masukan link CCTV">
                            <label for="linkCCTV" class="col-form-label">Link CCTV</label>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
            </div>
            </form><!-- End Form Validation -->
        </div>
    </div>
</div><!-- End Edit Modal-->

<!-- Edit Modal -->

<div class="modal fade Editmodal" id="EditModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit <?= $breadcrumb; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Validation -->
                <form action="" method="post" id="form_edit" class="form row g-3 needs-validation" enctype="multipart/form-data" novalidate>
                    <input type="hidden" name="id" value="" id="id_cctv" type="text">
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="namaCCTV" name="name" placeholder="masukan Nama CCTV" required>
                            <label for="namaCCTV" class="col-form-label">Nama CCTV</label>
                            <div class="invalid-feedback">
                                Nama CCTV harus diisi
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="IPCCTV" name="ip" placeholder="masukan IP CCTV" required>
                            <label for="IPCCTV" class="col-form-label">IP CCTV</label>
                            <div class="invalid-feedback">
                                IP harus diisi
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <label for="mapEdit" class="col-form-label">Lokasi CCTV</label>
                        <div id="mapEdit" style="height:300px">
                            <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 43%;top: 37%;">
                        </div>
                    </div>

                    <div id="titikMarker">
                        <div class="col-md-12">
                            <div class="form-floating">
                                <textarea class="form-control" id="addressCCTV" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;"></textarea>
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

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="linkCCTV" name="link" placeholder="masukan link CCTV">
                            <label for="linkCCTV" class="col-form-label">Link CCTV</label>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button class="btn btn-primary" type="submit" id="btnEdit">Simpan</button>
            </div>
            </form><!-- End Form Validation -->
        </div>
    </div>
</div><!-- End Edit Modal-->

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
        var fetchData = fetch("<?= base_url() ?>cctv/serverSideTable").then(
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
                url: "<?= base_url(); ?>cctv/Cctv/tambah",
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

    // function detail
    function detail(id) {
        $.ajax({
            url: '<?= base_url() ?>cctv/detail',
            type: 'POST',
            data: {
                id_cctv: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.Detailmodal,#namaCCTV').attr('disabled', true)
                $('.Detailmodal,#IPCCTV').attr('disabled', true)
                $('.Detailmodal,#addressCCTV').attr('disabled', true)
                $('.Detailmodal,#latitude').attr('disabled', true)
                $('.Detailmodal,#longitude').attr('disabled', true)
                $('.Detailmodal,#linkCCTV').attr('disabled', true)

                $('.Detailmodal,#namaCCTV').val(results.name_cctv)
                $('.Detailmodal,#IPCCTV').val(results.ip_cctv)
                $('.Detailmodal,#addressCCTV').val(results.address_cctv)
                $('.Detailmodal,#latitude').val(results.lat_cctv)
                $('.Detailmodal,#longitude').val(results.lng_cctv)
                $('.Detailmodal,#linkCCTV').val(results.link_cctv)

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


                    $('#DetailModal').on('shown.bs.modal', function() {
                        mapDetail.remove();
                        mapDetail.off()
                    });
                    $('#DetailModal').on('hidden.bs.modal', function() {
                        mapDetail.remove();
                        mapDetail.off()
                    });


                    var coordLat = results.lat_cctv
                    var coordLng = results.lng_cctv
                    L.marker([parseFloat(coordLat), parseFloat(coordLng)]).addTo(mapDetail);
                    mapDetail.setView(initialCenter, initialZoom);

                    mapDetail.flyTo([parseFloat(coordLat), parseFloat(coordLng)], 17);

                })

            }
        })
    }

    // function edit
    function edit(id) {
        $.ajax({
            url: '<?= base_url() ?>cctv/detail',
            type: 'POST',
            data: {
                id_cctv: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.Editmodal,#namaCCTV').attr('disabled', false)
                $('.Editmodal,#IPCCTV').attr('disabled', false)
                $('.Editmodal,#addressCCTV').attr('disabled', false)
                $('.Editmodal,#latitude').attr('disabled', false)
                $('.Editmodal,#longitude').attr('disabled', false)
                $('.Editmodal,#linkCCTV').attr('disabled', false)

                $('#id_cctv').val(results.id)

                $('.Editmodal,#namaCCTV').val(results.name_cctv)
                $('.Editmodal,#IPCCTV').val(results.ip_cctv)
                $('.Editmodal,#addressCCTV').val(results.address_cctv)
                $('.Editmodal,#latitude').val(results.lat_cctv)
                $('.Editmodal,#longitude').val(results.lng_cctv)
                $('.Editmodal,#linkCCTV').val(results.link_cctv)

                $(document).ready(function() {

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

                    $('#EditModal').on('shown.bs.modal', function() {
                        mapEdit.off()
                        mapEdit.remove()
                        mapEdit.invalidateSize();

                    });
                    var coordLat = results.lat_cctv
                    var coordLng = results.lng_cctv
                    L.marker([parseFloat(coordLat), parseFloat(coordLng)]).addTo(mapEdit);
                    mapEdit.setView(initialCenter, initialZoom);

                    mapEdit.flyTo([parseFloat(coordLat), parseFloat(coordLng)], 17);

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
                                    mapEdit.flyTo([latitude, longitude], 17);
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
                            mapEdit.flyTo([cordLat, corLong], 17);
                        });
                    });

                    $('[name=cordinate]').on("change", function(e) {

                        var cordLatLong = this.value.split(',');
                        var cordLat = parseFloat(cordLatLong[0]);
                        var corLong = parseFloat(cordLatLong[1]);

                        // console.log({a:cordLat, b:corLong});

                        $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${cordLat}&lon=${corLong}`, function(data) {
                            $('[name=address]').val(data['display_name']);
                            mapEdit.flyTo([cordLat, corLong], 17);
                        });
                    });

                    mapEdit.on("dragend", function(e) {

                        var corLat = mapEdit.getCenter()['lat'];
                        var corLng = mapEdit.getCenter()['lng'];
                        var cord = `${corLat},${corLng}`;

                        $("[name=latitude]").val(corLat);
                        $("[name=longitude]").val(corLng);
                        $('[name=cordinate]').val(cord);

                        $.get(`https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${corLat}&lon=${corLng}`, function(data) {

                            $('[name=address]').val(data['display_name']);

                        });

                    });
                })

            }
        })
    }

    $('#btnEdit').on('click', function(e) {
        e.preventDefault();
        var formData = new FormData($('#form_edit')[0]);
        // console.log(formData)
        $.ajax({
            url: '<?= base_url() ?>cctv/Cctv/edit',
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
                        location.reload()
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

    // function hapus
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

    // clear data
    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
        document.getElementById("namaCCTV").removeAttribute('disabled');
        document.getElementById("IPCCTV").removeAttribute('disabled');
        document.getElementById("addressCCTV").removeAttribute('disabled');
        document.getElementById("latitude").removeAttribute('disabled');
        document.getElementById("longitude").removeAttribute('disabled');
        document.getElementById("linkCCTV").removeAttribute('disabled');
    })
    $('#btnDetail').on('click', function(e) {
        $('#form_detail')[0].reset()

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
</script>