<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Brand Motherboard
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?= base_url('master/tambah_processor') ?>"><i class="fa fa-circle-o"></i> Master Rakit</a></li>
            <li><a href="<?= base_url('master/processor') ?>"><i class="fa fa-circle-o"></i> Motherboard</a></li>
            <li><a href="<?= base_url('master/tambah_processor') ?>"><i class="fa fa-circle-o"></i> Master Motherboard</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Data Master Brand Motherboard</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url('master/aksi_ubah_brand_motherboard') ?>" method="post">
                <div class="box-body">
                    <div class="form-group col-md-8">
                        <label for="nama">Brand Motherboard</label>
                        <?php foreach ($brand_motherboard as $m) : ?>
                            <input type="hidden" name="id" value="<?= $m->id ?>">
                            <input type="text" id="nama" name="brand_motherboard" class="form-control" value="<?= $m->brand_motherboard ?>" autofocus>
                        <?php endforeach ?>
                    </div>
                    <div class="form-group col-md-8">
                        <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-pencil"></i> Ubah</button>
                    </div>
                </div>
                <!-- /.box-body -->
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->