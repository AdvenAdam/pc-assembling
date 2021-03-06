<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Master Monitor
        </h1>
        <ol class="breadcrumb">
            <li><a><i class="fa fa-circle-o"></i> Master Rakit</a></li>
            <li><a> Monitor</a></li>
            <li><a> Master Monitor</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Ubah Data Master Monitor</h3>
            </div>
            <form role="form" action="<?= base_url('Monitor/aksi_ubah_monitor') ?>" method="post">
                <?php foreach ($monitor as $m) : ?>
                    <div class="box-body">
                        <input type="hidden" name="id" value="<?= $m->monitor_id ?>">
                        <div class="form-group col-md-8">
                            <label for="id">ID Monitor</label>
                            <input type="number" id="id" name="monitor_id" value="<?= $m->monitor_id ?>" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="nama">Monitor</label>
                            <input type="text" id="nama" name="nama_monitor" value="<?= $m->nama_monitor ?>" class="form-control" autofocus>
                            <?= form_error('nama_monitor', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group col-md-8">
                            <button type="submit" class="btn btn-primary btn-flat"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                    </div>
                <?php endforeach ?>
            </form>
        </div>

    </section>
</div>