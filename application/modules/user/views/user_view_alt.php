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
                        <a href="" class="btn btn-primary mb-3 mt-3">Tambah <?= $breadcrumb ?></a>


                        <!-- Table with stripped rows -->
                        <table id="datatable" class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>

                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<script>
    fetch("<?= base_url() ?>User/serverSideTable").then(
        response => response.json()
    ).then(
        data => {
            if (!data.length) {
                return
            }
            new window.simpleDatatables.DataTable("#datatable", {
                data: {
                    headings: Object.keys(data[0]),
                    data: data.map(item => Object.values(item))
                }
            })
        }
    )
</script>