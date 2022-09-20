<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description d-flex align-items-center">
                        <div class="page-description-content flex-grow-1">
                            <h1>Scanner</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="datatable1" class="display" style="width:100%">
                                    <?php $no = 1; ?>
                                    <thead>
                                        <th scope="col">#</th>
                                        <th scope="col">EPC</th>
                                        <th scope="col">Count</th>
                                        <th scope="col">Timestamp</th>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($scan_list as $list) :
                                            if ($list->epc == '[]') {
                                        ?>
                                                <tr>
                                                    <td>Tidak Ada Data</td>
                                                </tr>
                                                <?php } else {
                                                $list_epc = preg_replace('/[^A-Za-z0-9]/', '', explode(',', $list->epc));
                                                $epc = array_chunk($list_epc, 2);
                                                $list_all = json_encode($epc);
                                                foreach ($epc as $key => $value) {
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?= $no++; ?></th>
                                                        <td><?php print_r(str_replace('EPC', '', $value[0])); ?></td>
                                                        <td><?php print_r(str_replace('ReadCount', '', $value[1])); ?></td>
                                                        <td><?= $list->timestamp; ?></td>
                                                    </tr>
                                            <?php }
                                            } ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>