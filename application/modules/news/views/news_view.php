<main id="main" class="main">
    <div class="pagetitle">
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

                <div class="card">
                    <div class="card-body">
                        <button type="button" id="btnTambah" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#TambahModal">
                            Tambah <?= $breadcrumb; ?>
                        </button>
                        <hr class="mt-0">

                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table table-stripped table-responsive">
                            <thead>
                                <th style="width: 25px;">No</th>
                                <th>Judul Berita</th>
                                <th>Sumber Berita</th>
                                <th>Author</th>
                                <th>Tanggal Berita</th>
                                <th style="width: 100px;">Aksi</th>
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

<div class="modal fade" id="TambahModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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

                        <label for="fileval" class="col-form-label">Foto Berita</label>

                        <input type="file" class="dropify" id="fileval" name="news_image" data-allowed-file-extensions="jpg jpeg png" required>
                        <p class="mb-0 text-secondary">Ukuran file maks: 2 mb</p>
                        <div class="invalid-feedback">
                            Foto berita harus diupload
                        </div>


                    </div>
                    <div class="col-md-12">


                        <div class="form-floating">
                            <input type="text" class="form-control" id="judulBerita" name="title" placeholder="masukan judul berita" required>
                            <label for="judulBerita" class="col-form-label">Judul Berita</label>
                            <div class="invalid-feedback">
                                Judul berita harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="date" class="form-control" id="tanggalBerita" name="date_news" value="<?php echo date('Y-m-d') ?>" required>
                            <label for="tanggalBerita" class="col-form-label">Tanggal Berita</label>
                            <div class="invalid-feedback">
                                Tanggal berita harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="sumbervaBerital" name="source" placeholder="masukan sumber berita" required>
                            <label for="sumberBerita" class="col-form-label">Sumber Berita</label>
                            <div class="invalid-feedback">
                                Sumber berita harus diisi
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-floating">
                            <textarea class="form-control" id="contentBerita" name="content" rows="15" placeholder="masukan isi berita" style="max-height: 216px; height: 216px;" required></textarea>
                            <label for="contentBerita" class="col-sm-2 col-form-label">Isi Berita</label>
                            <div class="invalid-feedback">
                                Isi berita harus diisi
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
                    <div class="col-md-12">
                        <div class="row">
                            <label for="fotoBerita" class="col-sm-2 col-form-label">Foto Berita</label>
                            <div class="col-md-10">
                                <img id="fotoBeritaa" class="img-fluid" src="" alt="no-image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="judulBerita" class="col-sm-2 col-form-label">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judulBerita" name="title" value="" required>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="tanggalBerita" class="col-sm-2 col-form-label">Tanggal Berita</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggalBerita" name="date_news" value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="sumberBerita" class="col-sm-2 col-form-label">Sumber Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sumberBerita" name="source" value="" required>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="contentBerita" class="col-sm-2 col-form-label">Isi Berita</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" id="contentBerita" name="content" rows="15" required></textarea>
                            </div>
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
                    <input type="hidden" name="id" value="" id="id_berita" type="text">
                    <div class="col-md-12">
                        <div class="row">
                            <label for="fotoBerita" class="col-sm-2 col-form-label">Foto Berita</label>
                            <div class="col-md-10 ps-4">
                                <div class="row">
                                    <div class="col-md-6 rounded border px-1 py-1">
                                        <a id="fotoBeritaa" href="" target="_blank">
                                            <img id="fotoBeritaaa" src="" alt="no-image" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="file" class="dropify" id="fotoBerita" name="news_image" data-allowed-file-extensions="jpg jpeg png" data-default-file="<?= base_url() ?>assets/dashboard/img/default.png" data-show-remove="false">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="judulBerita" class="col-sm-2 col-form-label">Judul Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judulBerita" name="title" value="" required>
                                <div class="invalid-feedback">
                                    Judul berita harus diisi
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="tanggalBerita" class="col-sm-2 col-form-label">Tanggal Berita</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="tanggalBerita" name="date_news" value="" required>
                                <div class="invalid-feedback">
                                    Tanggal berita harus diisi
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="sumberBerita" class="col-sm-2 col-form-label">Sumber Berita</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="sumberBerita" name="source" value="" required>
                                <div class="invalid-feedback">
                                    Sumber berita harus diisi
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="row">
                            <label for="contentBerita" class="col-sm-2 col-form-label">Isi Berita</label>
                            <div class="col-sm-10">

                                <textarea type="text" class="form-control" id="contentBerita" name="content" rows="15" required></textarea>
                                <div class="invalid-feedback">
                                    Isi berita harus diisi
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button class="btn btn-primary" id="btnEdit" type="submit">Simpan</button>
            </div>
            </form><!-- End Form Validation -->
        </div>
    </div>
</div><!-- End Edit Modal-->

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
        var fetchData = fetch("<?= base_url() ?>news/serverSideTable").then(
            response => response.json()
        ).then(
            data => {
                if (!data.length) {
                    return
                }
                var table = new DataTable("#datatable", {
                    aLengthMenu: [
                        [5, 10, 25, -1],
                        [5, 10, 25, "All"]
                    ],
                    'iDisplayLength': 5,

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
                url: "<?= base_url(); ?>news/News/tambah",
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
            url: '<?= base_url() ?>news/detail',
            type: 'POST',
            data: {
                id_berita: id
            },
            dataType: 'JSON',
            success: function(results) {

                $('.Detailmodal,#fotoBeritaa').attr('src', `<?= url_api() ?>${results.news_image}`)

                $('.Detailmodal,#judulBerita').attr('disabled', true)
                $('.Detailmodal,#tanggalBerita').attr('disabled', true)
                $('.Detailmodal,#sumberBerita').attr('disabled', true)
                $('.Detailmodal,#contentBerita').attr('disabled', true)

                $('.Detailmodal,#judulBerita').val(results.title)
                $('.Detailmodal,#tanggalBerita').val(results.date_news)
                $('.Detailmodal,#sumberBerita').val(results.source)
                $('.Detailmodal,#contentBerita').val(results.content)

            }
        })
    }

    // function edit
    function edit(id) {
        $.ajax({
            url: '<?= base_url() ?>news/detail',
            type: 'POST',
            data: {
                id_berita: id
            },
            dataType: 'JSON',
            success: function(results) {

                // $('.Editmodal,#fotoBerita').attr('data-default-file', `<?= url_api() ?>${results.news_image}`)
                // $('.Editmodal,#fotoBerita').attr('value', `<?= url_api() ?>${results.news_image}`)
                $('.Editmodal,#fotoBeritaa').attr('href', `<?= url_api() ?>${results.news_image}`)
                $('.Editmodal,#fotoBeritaaa').attr('src', `<?= url_api() ?>${results.news_image}`)

                $('.Editmodal,#judulBerita').attr('disabled', false)
                $('.Editmodal,#tanggalBerita').attr('disabled', false)
                $('.Editmodal,#sumberBerita').attr('disabled', false)
                $('.Editmodal,#contentBerita').attr('disabled', false)

                $('#id_berita').val(results.id)

                $('.Editmodal,#judulBerita').val(results.title)
                $('.Editmodal,#tanggalBerita').val(results.date_news)
                $('.Editmodal,#sumberBerita').val(results.source)
                $('.Editmodal,#contentBerita').val(results.content)

            }
        })
    }

    $('#btnEdit').on('click', function(e) {
        e.preventDefault();
        var formData = new FormData($('#form_edit')[0]);
        // console.log(formData)
        $.ajax({
            url: '<?= base_url() ?>news/News/edit',
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
                    url: "<?= base_url() ?>news/News/hapus",
                    type: "POST",
                    data: {
                        id_berita: id
                    },
                    dataType: "JSON",
                    success: function(data) {
                        if (data['status'] == true) {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'success'
                            ).then(function() {
                                location.reload()
                            })
                        } else {
                            Swal.fire(
                                `${data['message']}`,
                                '',
                                'error'
                            )
                        }
                    }

                })
            }
        })
    }

    // clear data
    $('#btnTambah').on('click', function(e) {
        $('#form_tambah')[0].reset()
        document.getElementById("judulBerita").removeAttribute('disabled');
        document.getElementById("tanggalBerita").removeAttribute('disabled');
        document.getElementById("sumberBerita").removeAttribute('disabled');
        document.getElementById("contentBerita").removeAttribute('disabled');
    })
    $('#btnDetail').on('click', function(e) {
        $('#form_detail')[0].reset()
    })
</script>