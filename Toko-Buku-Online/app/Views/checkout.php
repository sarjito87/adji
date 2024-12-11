<?= $this->extend('layout'); ?>

<?= $this->section('main'); ?>
<div class="container">
    <h3>Review dan Submit Order</h3>
    <hr />
    <table>
        <tr>
            <td>Ancika: Dia Yang Bersamaku Tahun 1995</td>
            <td>@1</td>
            <td>Rp350.000</td>
        </tr>
    </table>
    <h3 class="mt-3">Total </h3>
    <hr />
    <span>Rp 184.000</span>
    <h3 class="mt-3">Alamat Pengiriman</h3>
    <hr />
    <p>Jl.Majapahit rt 32 lrg aman, Mr jambi</p>
    <h3 class="mt-3">Metode bayar</h3>
    <hr />
    <p>Transfer Bank</p>
    <p>No. Rekening: James Smith, 11003344</p>
    <div class="mt-5">
        <form action="<?= base_url('submit')?>" method="POST">
            <button type="submit" class="btn btn-success">Submit Order</button> 
        </form>
       
    </div>
</div>

<?= $this->endSection();?>