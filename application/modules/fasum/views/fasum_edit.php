<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>fasum"><?= $breadcrumb ?></a> </li>
                <li class="breadcrumb-item active">Edit</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <style>
        .dropify-wrapper {
            height: 300px !important;
        }
    </style>

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
                            <div class="col-md-6">

                                <div class="form-floating">
                                    <input type="text" class="form-control" id="namaFasilitas" name="nama" placeholder="masukan Nama Fasilitas" value="<?= $data['getDetails']['name_fasum'] ?>" required>
                                    <label for="namaFasilitas" class="col-form-label">Nama Fasilitas</label>
                                    <div class="invalid-feedback">
                                        Nama Fasilitas harus diisi
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="form-floating">
                                    <select class="form-select" name="kategori" id="kategoriFasilitas">
                                        <option value="<?= $data['getDetails']['category_fasum']['id'] ?>"><?= $data['getDetails']['category_fasum']['name_category'] ?> (current)</option>
                                        <?php

                                        foreach ($data['getKategori'] as $kategori) :
                                        ?>
                                            <option value="<?= $kategori['id'] ?>"><?= $kategori['name_category'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                    <label for="kategoriFasilitas" class="col-form-label">Kategori Fasilitas</label>
                                    <div class="invalid-feedback">
                                        Kategori harus diisi
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <label for="mapEdit" class="col-form-label">Lokasi Fasilitas</label>
                                <div id="mapEdit" style="height:300px">
                                    <img id="titikMarkerMap" src="<?= base_url(); ?>assets/dashboard/img/pinMarker.png" width="80" height="80" style="position: relative;z-index: 1000;left: 44.8%;top: 36%;">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="fotoLokasi" class="col-form-label">Foto Lokasi</label>
                                <input type="file" class="dropify" id="fotoLokasi" name="image" data-allowed-file-extensions="jpg jpeg png" data-default-file="<?= url_api() . $data['getDetails']['image_fasum'] ?>" data-show-remove="false">

                            </div>

                            <div id="titikMarker">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" id="address" name="address" rows="15" placeholder="masukan alamat" style="max-height: 120px; height: 120px;"><?= $data['getDetails']['address'] ?></textarea>
                                        <label for="address" class="col-sm-2 col-form-label">Alamat</label>
                                    </div>
                                    <div class="list-group" id="listAddress"></div>
                                </div>
                                <div class="col-md-6" style="display: none;">
                                    <div class="material-textfield mb-3">
                                        <input style="width: 100%;" name="cordinate" placeholder="" type="hidden" value="<?= $data['getDetails']['latitude'] ?>,<?= $data['getDetails']['longitude'] ?>">
                                        <label class="labelmui">Coordinate</label>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="latitude" name="latitude" value="<?= $data['getDetails']['latitude'] ?>">
                                            <label for="latitude">Latitude</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="longitude" name="longitude" value="<?= $data['getDetails']['longitude'] ?>">
                                            <label for="longitude">Longitude</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="open" name="open" placeholder="test" value="<?= $data['getDetails']['open_time'] ?>" required>
                                    <label for="open" class="col-form-label">Jam Buka</label>
                                    <div class="invalid-feedback">
                                        Jam buka harus diisi
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="time" class="form-control" id="close" name="close" placeholder="test" value="<?= $data['getDetails']['close_time'] ?>" required>
                                    <label for="close" class="col-form-label">Jam Tutup</label>
                                    <div class="invalid-feedback">
                                        Jam tutup harus diisi
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="kontak" name="kontak" placeholder="test" value="<?= $data['getDetails']['contact_fasum'] ?>" required>
                                    <label for="kontak" class="col-form-label">Kontak</label>
                                    <div class="invalid-feedback">
                                        Kontak harus diisi
                                    </div>
                                </div>

                            </div>

                            <div class="modal-footer">
                                <a href="<?= base_url() ?>fasum/Fasum" class="btn btn-secondary">Kembali</a>
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

        var coordLat = '<?= $data['getDetails']['latitude'] ?>'
        var coordLng = '<?= $data['getDetails']['longitude'] ?>'
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

    $('#btnEdit').on('click', function(e) {
        e.preventDefault();
        var formData = new FormData($('#form_edit')[0]);
        // console.log(formData)
        $.ajax({
            url: '<?= base_url() ?>fasum/Fasum/edit',
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
                        window.location.href = "<?= base_url() ?>fasum/Fasum";
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
                    url: "<?= base_url() ?>fasum/Fasum/hapus",
                    type: "POST",
                    data: {
                        id_fasum: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                window.location.href = "<?= base_url() ?>fasum/Fasum";
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