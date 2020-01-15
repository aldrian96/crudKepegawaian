<div class="row mt-3">
    <div class="col-md-12">
        <h4 class="text-right">
            <?= "Tanggal : " . date('d-m-y') ?>
        </h4>
        <h3 class="text-center">
            Daftar Pegawai | Versi PDF
        </h3>
        <table border="1" align="center" class="table table-striped table-outline-dark border-dark mt-4">
            <thead class="thead-dark">
                <tr align="center">
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>NIP</th>
                    <th>TTL</th>
                    <th>JK</th>
                    <th>ALAMAT</th>
                    <th>GAJI</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($PDF as $p) : ?>
                <tr align="center">
                    <td><?= $p['ID']; ?></td>
                    <td><?= $p['NAMA']; ?></td>
                    <td><?= $p['NIP']; ?></td>
                    <td><?= $p['TTL']; ?></td>
                    <td><?= $p['JK']; ?></td>
                    <td><?= $p['ALAMAT']; ?></td>
                    <td><?= $p['GAJI']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>