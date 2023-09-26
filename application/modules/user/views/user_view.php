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

                <div class="card">
                    <div class="card-body">
                        <button type="button" class="btn btn-primary mt-3 mb-3" data-bs-toggle="modal" data-bs-target="#TambahModal">
                            Tambah <?= $breadcrumb; ?>
                        </button>

                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table table-stripped table-responsive"></table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<!-- Tambah Modal -->

<div class="modal fade" id="TambahModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah <?= $breadcrumb; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Validation -->
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <label for="nameval" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nameval" value="John" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="emailval" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailval" value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="usernameval" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usernameval" value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="passwordval" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordval" value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
            </form><!-- End Form Validation -->
        </div>
    </div>
</div><!-- End Tambah Modal-->

<!-- Edit Modal -->

<div class="modal fade" id="EditModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit <?= $breadcrumb; ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form Validation -->
                <form class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <label for="nameval" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nameval" value="John" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="emailval" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailval" value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="usernameval" class="form-label">Username</label>
                        <input type="text" class="form-control" id="usernameval" value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="passwordval" class="form-label">Password</label>
                        <input type="password" class="form-control" id="passwordval" value="Doe" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
            </form><!-- End Form Validation -->
        </div>
    </div>
</div><!-- End Edit Modal-->

<!-- Hapus Modal -->

<div class="modal fade" id="HapusModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Apakah Anda yakin ingin menghapus data ini?</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                nama :
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                <button type="button" class="btn btn-danger">Hapus</button>
            </div>
        </div>
    </div>
</div><!-- End Hapus Modal-->

<script>
    fetch("<?= base_url() ?>user/serverSideTable").then(
        response => response.json()
    ).then(
        data => {
            if (!data.length) {
                return
            }
            new window.simpleDatatables.DataTable("#datatable", {
                perPage: 5,
                "processing": true,
                data: {
                    headings: Object.keys(data[0]),
                    data: data.map(item => Object.values(item))
                }
            })
        }
    )
</script>