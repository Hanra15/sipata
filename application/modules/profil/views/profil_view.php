<main id="main" class="main">

    <div class="pagetitle">
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url() ?>dashboard">Dashboard</a></li>
                <li class="breadcrumb-item active"><?= $breadcrumb ?></li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="col-xl-12">

            <div class="card">
                <div class="card-body pt-3">
                    <!-- Bordered Tabs -->
                    <ul class="nav nav-tabs nav-tabs-bordered">

                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Profil</button>
                        </li>

                        <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profil</button>
                        </li>

                    </ul>
                    <div class="tab-content pt-2">

                        <div class="tab-pane fade show active profile-overview" id="profile-overview">

                            <h5 class="card-title">Detail</h5>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label ">Username</div>
                                <div class="col-lg-9 col-md-8"><?= $data['get_user'][0]['name'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Email</div>
                                <div class="col-lg-9 col-md-8"><?= $data['get_user'][0]['email'] ?></div>
                            </div>

                            <div class="row">
                                <div class="col-lg-3 col-md-4 label">Username</div>
                                <div class="col-lg-9 col-md-8"><?= $data['get_user'][0]['username'] ?></div>
                            </div>

                            <!-- <div class="row">
                                <div class="col-lg-3 col-md-4 label">Username</div>
                                <div class="col-lg-9 col-md-8"><?= $data['get_user'][0]['token'] ?></div>
                            </div> -->

                        </div>

                        <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="" method="post" id="form_edit" class="form row g-3 needs-validation" enctype="multipart/form-data" novalidate>

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="name" type="text" class="form-control" id="name" value="<?= $data['get_user'][0]['name'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="email" type="email" class="form-control" id="email" value="<?= $data['get_user'][0]['email'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="user" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="user" type="text" class="form-control" id="user" value="<?= $data['get_user'][0]['username'] ?>">
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="pwold" class="col-md-4 col-lg-3 col-form-label">Password (Current)</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="old" type="password" class="form-control" id="pwold" value="" placeholder="Masukkan Password Lama">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="pwnew" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="new" type="password" class="form-control" id="pwnew" value="" placeholder="Masukkan Password Baru (min 6 character)">
                                    </div>
                                </div>

                                <!-- <div class="row mb-3">
                                    <label for="Country" class="col-md-4 col-lg-3 col-form-label">Password</label>
                                    <div class="col-md-8 col-lg-9">
                                        <input name="password" type="password" class="form-control" id="Country" value="<?= $data['get_user'][0]['password'] ?>">
                                    </div>
                                </div> -->

                                <div class="text-center">
                                    <button type="submit" id="btnEdit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form><!-- End Profile Edit Form -->

                        </div>

                    </div><!-- End Bordered Tabs -->

                </div>
            </div>

        </div>

    </section>

</main><!-- End #main -->

<script>
    $('#btnEdit').on('click', function(e) {
        e.preventDefault();
        var formData = new FormData($('#form_edit')[0]);
        // console.log(formData)
        $.ajax({
            url: '<?= base_url() ?>profil/Profil/edit',
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
</script>