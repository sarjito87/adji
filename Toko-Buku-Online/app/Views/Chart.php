<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<div class="container">
    <h1>Ringkasan Order</h1>
    <div class="row">
        <div class="col-9">
            <table class="table table-stripe">
                <thead>
                    <tr>
                        <th scope="col">#id</th>
                        <th scope="col">#Detail Buku</th>
                        <th scope="col">#Qty</th>
                        <th scope="col">#harga</th>
                        <th scope="col">#Total</th>
                        <th scope="col">#Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">#0001</th>
                        <td>
                            <img src="<?= base_url() . 'images/1.png' ?>" alt="" style="width: 150px; height:auto;">
                            <h5>Ancika: Dia Yang Bersamaku Tahun 1995 - Pidi Baiq</h5>
                        </td>
                        <td>1</td>
                        <td>Rp 184.000</td>
                        <td>Rp 184.000</td>
                        <td>
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </td>

                        </th>
                    </tr>
                    
                </tbody>
            </table>

        </div>
        <div class="col-3">
            <div class="">
                <h2 class="text-secondary">Total Bayar</h2>
                <h2>Rp184.000</h2>
                <div class="mt-5">
                    <a href="" class="btn btn-primary">Checkout</a>
                </div><?= base_url('checkout')?>
            </div>

        </div>
    </div>

</div>
<?= $this->endSection();?>