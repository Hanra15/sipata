<main id="main" class="main">
    <div class="pagetitle">
        <h1><?= $breadcrumb ?></h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url() ?>fasum">Fasilitas</a></li>
                <li class="breadcrumb-item active"><?= $breadcrumb ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <!-- <div id="map" style="height: 100px;"></div> -->
                <div class="card" style="width: 50%;">
                    <div class="card-body">
                        <button type="button" id="btnTambah" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#modalTambah">
                            Tambah <?= $breadcrumb; ?>
                        </button>
                        <a href="<?= base_url() ?>fasum" class="btn btn-secondary mt-3 mb-3">Kembali</a>
                        <hr class="mt-0">

                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table table-stripped table-responsive">
                            <thead>
                                <th style="width: 25px;">No</th>
                                <th>Nama Kategori</th>
                                <th style="width: 120px;">Aksi</th>
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

                        <div class="form-floating">
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="test" required>
                            <label for="kategori" class="col-form-label">Nama Kategori</label>
                            <div class="invalid-feedback">
                                Nama Kategori harus diisi
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

                        <div class="form-floating">
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="test" required>
                            <label for="kategori" class="col-form-label">Nama Kategori</label>
                            <div class="invalid-feedback">
                                Nama Kategori harus diisi
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
                    <input type="hidden" name="id" id="id_kategori" type="text">
                    <div class="col-md-12">

                        <div class="form-floating">
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="test" required>
                            <label for="kategori" class="col-form-label">Nama Kategori</label>
                            <div class="invalid-feedback">
                                Nama Kategori harus diisi
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
        var fetchData = fetch("<?= base_url() ?>fasum/Kategori/serverSideTable").then(
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
                    'iDisplayLength': 5,

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
            console.log(formData);
            $.ajax({
                url: "<?= base_url(); ?>fasum/Kategori/tambah",
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
            url: '<?= base_url() ?>fasum/Kategori/detail',
            type: 'POST',
            data: {
                id_fasum: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.Detailmodal,#kategori').attr('disabled', true)

                $('.Detailmodal,#kategori').val(results.name_category)

            }
        })
    }

    // function edit
    function edit(id) {
        $.ajax({
            url: '<?= base_url() ?>fasum/Kategori/detail',
            type: 'POST',
            data: {
                id_fasum: id
            },
            dataType: 'JSON',
            success: function(results) {
                $('.Editmodal,#kategori').attr('disabled', false)

                $('#id_kategori').val(results.id)

                $('.Editmodal,#kategori').val(results.name_category)

            }
        })
    }

    $('#btnEdit').on('click', function(e) {
        e.preventDefault();
        var formData = new FormData($('#form_edit')[0]);
        // console.log(formData)
        $.ajax({
            url: '<?= base_url() ?>fasum/Kategori/edit',
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
                    url: "<?= base_url() ?>fasum/Kategori/hapus",
                    type: "POST",
                    data: {
                        id_kategori: id
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
        document.getElementById("kategori").removeAttribute('disabled');

    })
    $('#btnDetail').on('click', function(e) {
        $('#form_detail')[0].reset()

    })
</script>