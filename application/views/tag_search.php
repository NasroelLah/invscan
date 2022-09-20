<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Tag Search</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <form class="row g-3 needs-validation" method="POST" action="<?= base_url('index/tag_search_check') ?>" novalidate>
                                <div class="col-12">
                                    <label for="validationCustom01" class="form-label">Serial Number</label>
                                    <input type="text" class="form-control" id="validationCustom01" name="serial_number" required>
                                    <div class="invalid-feedback">
                                        Please enter valid Serial
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button id="blockui-2" class="btn btn-primary" type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3"></div>
            </div>
            <div class="row">
                <div class="col-xl-3"></div>
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            Result
                        </div>
                        <div class="card-body">
                            404 Not Found
                        </div>
                    </div>
                </div>
                <div class="col-xl-3"></div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>