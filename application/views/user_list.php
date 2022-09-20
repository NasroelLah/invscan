<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Users</h1>
                        </div>
                        <div class="page-description-actions">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalAdd"><i class="material-icons">add</i>Add User</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- USERS TABLE -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover" style="width:100%">
                                    <thead>
                                        <th scope="col">#</th>
                                        <th scope="col">ID Number</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Role</th>
                                        <th scope="col">Option</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($user_list as $user) :
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $no++; ?></th>
                                                <td><?= $user->id_number ?></td>
                                                <td><?= $user->name; ?></td>
                                                <td><?= $user->email; ?></td>
                                                <td><?php
                                                    if ($user->role_id == 1) {
                                                        echo "Administrator";
                                                    } elseif ($user->role_id == 2) {
                                                        echo "Member";
                                                    } elseif ($user->role_id == 3) {
                                                        echo "Visitor";
                                                    }
                                                    ?></td>
                                                <td style="width:10%">
                                                    <div class="btn-group" role="group">
                                                        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalView">View</button> -->
                                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEdit<?= $user->id; ?>">Edit</button>
                                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">Delete</button>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END USERS TABLE -->

            <!-- MODAL ADD USER -->
            <div class="modal fade" id="modalAdd" tabindex="-1" aria-labelledby="modalAddLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalAddLabel">Delete user</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form class="row g-3 needs-validation" method="POST" action="<?= base_url('index/user_add_check') ?>" novalidate>
                            <div class="modal-body">
                                <div class="col-12">
                                    <label for="validationCustom01" class="form-label">ID Number</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="id_number" required>
                                    <div class="invalid-feedback">
                                        Please enter valid ID Number
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationCustom02" class="form-label">Full Name</label>
                                    <input type="text" class="form-control" id="validationCustom02" placeholder="Fulan bin Fulan" name="name" required>
                                    <div class="invalid-feedback">
                                        Please enter name
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationCustomUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <input type="text" class="form-control" id="validationCustomUsername" placeholder="example@email.com" name="email" required>
                                        <div class="invalid-feedback">
                                            Please enter email
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationCustom03" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="validationCustom03" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;" name="password" required>
                                    <div class="invalid-feedback">
                                        Please enter password
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="validationCustom04" class="form-label">Role</label>
                                    <select class="form-select" id="validationCustom04" name="role_id" required>
                                        <option selected disabled>Choose...</option>
                                        <option value="1">Administrator</option>
                                        <option value="2">Member</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select role for this user
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MODAL ADD USER -->

            <!-- MODAL EDIT USER -->
            <?php
            foreach ($user_list as $user) :
            ?>
                <div class="modal fade modal-dialog-scrollable" id="modalEdit<?= $user->id; ?>" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalEditLabel">Edit user</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form class="row g-3 needs-validation" method="POST" action="<?= base_url('index/user_update') ?>" novalidate>
                                <div class="modal-body">
                                    <div class="col-12">
                                        <label for="validationCustom01" class="form-label">ID Number</label>
                                        <input type="text" class="form-control" id="validationCustom01" value="<?= $user->id_number ?>" name="id_number" required>
                                        <div class="invalid-feedback">
                                            Please enter valid ID Number
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="validationCustom02" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="validationCustom02" value="<?= $user->name; ?>" name="name" required>
                                        <div class="invalid-feedback">
                                            Please enter name
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="validationCustomUsername" class="form-label">Email</label>
                                        <div class="input-group has-validation">
                                            <input type="text" class="form-control" id="validationCustomUsername" value="<?= $user->email; ?>" name="email" required>
                                            <div class="invalid-feedback">
                                                Please enter email
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="validationCustom04" class="form-label">Role</label>
                                        <select class="form-select" id="validationCustom04" name="role_id" required>
                                            <option selected disabled>Choose...</option>
                                            <option value="1">Administrator</option>
                                            <option value="2">Member</option>
                                        </select>
                                        <div class="invalid-feedback">
                                            Please select role for this user
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="<?= $user->id; ?>">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-success" type="submit">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <!-- END MODAL EDIT USER -->

            <!-- MODAL DELETE USER -->
            <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalDeleteLabel">Delete user</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="index/user_delete" method="POST">
                            <div class="modal-body">
                                Are you sure want to delete this user?
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="id" value="<?= $user->id; ?>">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END MODAL DELETE USER -->
        </div>
    </div>
</div>
</div>
</div>
</div>