<div class="container fluid">
    <div class="row text-center">

        <?php foreach ($tshirt as $brg): ?>
            <div class="card ml-3" style="width: 16rem;">
                <img src="<?php echo base_url() . 'assets/img/uploads/' . $brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $brg->nama_brg ?>
                    </h5>
                    <small>
                        <?php echo $brg->keterangan ?>
                    </small><br>
                    <span class="badge badge-info mb-2">Ukuran :
                        <?php echo $brg->ukuran ?>
                    </span><br>
                    <span class="badge badge-warning mb-2">Stok :
                        <?php echo $brg->stok ?>
                    </span><br>
                    <span class="badge badge-success mb-2">Rp.
                        <?php echo number_format($brg->harga, 0, ',', '.') ?>
                    </span>
                    <?php echo anchor(
                        'dashboard/tambah_ke_keranjang/' . $brg->id_brg,
                        '<div class="btn btn-sm btn-primary">Tambah ke keranjang</div>'
                    ) ?>
                    <?php echo anchor(
                        'dashboard/detail/' . $brg->id_brg,
                        '<div class="btn btn-sm btn-success">Detail</div>'
                    ) ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>