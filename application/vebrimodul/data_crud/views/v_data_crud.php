<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">
    <div id="page-head">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow"><?= $title ?></h1>
        </div>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End page title-->


        <!--Breadcrumb-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <ol class="breadcrumb">
            <li><a href="<?php echo base_url('dashboard') ?>"><i class="demo-pli-home"></i></a></li>
            <!-- <li><a href="#">UI</a></li> -->
            <li class="active"><?= $title ?></li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->

    </div>

    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">

        <!-- Contact Toolbar -->
        <!---------------------------------->
        <div class="row pad-btm">
            <div class="col-sm-12 toolbar-right text-right">
                <button class="btn btn-success btn-labeled" data-target="#modal-tambah" data-toggle="modal"><i class="btn-label ti-import"></i> Tambah</button>
                <button class="btn btn-default"><i class="demo-pli-printer"></i></button>
            </div>
        </div>
        <!---------------------------------->

        <!-- Basic Data Tables -->
        <!--===================================================-->
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Data CRUD</h3>
            </div>
            <div class="panel-body">
                <table id="demo-dt-basic" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th class="text-center">No.</th>
                            <th>Nama</th>
                            <th class="min-tablet">Email</th>
                            <th class="min-tablet">Nomor Telephone</th>
                            <th class="min-desktop">Alamat</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($tampilData->result() as $data) { ?>
                            <tr>
                                <td class="min-width"><?php echo $i; ?></td>
                                <td><?php echo $data->nama_lengkap ?></td>
                                <td><?php echo $data->email ?></td>
                                <td><?php echo $data->nomor_telp ?></td>
                                <td><?php echo $data->alamat ?></td>
                                <td class="min-width">
                                    <?php if ($data->status == '1') { ?>
                                        <div class="label label-table label-success">Aktif</div>
                                    <?php } else { ?>
                                        <div class="label label-table label-danger">Tidak Aktif</div>
                                    <?php } ?>
                                </td>
                                <td class="min-width">
                                    <div class="btn-groups">
                                        <button class="btn btn-warning btn-labeled" data-target="#modal-edit-<?php echo $data->id ?>" data-toggle="modal"><i class="btn-label ti-pencil"></i> Edit</button>
                                        <button class="btn btn-danger btn-labeled" data-target="#modal-hapus-<?php echo $data->id ?>" data-toggle="modal"><i class="btn-label ti-trash"></i> Hapus</button>
                                    </div>
                                </td>
                            </tr>
                        <?php $i++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!--===================================================-->
        <!-- End Striped Table -->

    </div>
    <!--===================================================-->
    <!--End page content-->

</div>
<!--===================================================-->
<!--END CONTENT CONTAINER-->


<?php
$i = 1;
foreach ($tampilData->result() as $data) { ?>

    <!--Moddal Edit-->
    <!--===================================================-->
    <?php echo form_open_multipart('data_crud/Edit'); ?>
    <div class="modal fade" id="modal-edit-<?php echo $data->id ?>" role="dialog" tabindex="-1" aria-labelledby="modal-edit" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Edit Data - <?= $title; ?> (<?php echo $data->nama_lengkap ?>)</h4>
                </div>

                <!-- ID Untuk Query Where -->
                <input type="hidden" name="query_id" value="<?php echo $data->id ?>">

                <!--Modal body-->
                <div class="modal-body">
                    <div class="form-group">

                        <label class="control-label"><b>Nama Lengkap</b></label>
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="ti-user"></i></span>
                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data->nama_lengkap ?>" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>

                        <label class="control-label"><b>Email</b></label>
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="ti-email"></i></span>
                            <input type="email" class="form-control" name="email" value="<?php echo $data->email ?>" placeholder="Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>

                        <label class="control-label"><b>Nomor Telephone</b></label>
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="ti-mobile"></i></span>
                            <input type="number" class="form-control" name="nomor_telp" value="<?php echo $data->nomor_telp ?>" placeholder="Nomor Telephone" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                        </div>

                        <label class="control-label"><b>Alamat Lengkap</b></label>
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="ti-location-arrow"></i></span>
                            <textarea placeholder="Alamat Lengkap" name="alamat" rows="5" class="form-control" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"><?php echo $data->alamat ?></textarea>
                        </div>

                        <label class="control-label"><b>Status</b></label>
                        <div class="input-group mar-btm">
                            <span class="input-group-addon"><i class="ti-check"></i></span>
                            <select class="form-control selectpicker" name="status" value="<?php echo $data->status ?>">
                                <?php if ($data->status == '1') { ?>
                                    <option selected="selected" value=" 1">Aktif</option>
                                    <option value="0">Tidak Aktif</option>
                                <?php } else { ?>
                                    <option selected="selected" value="0">Tidak Aktif</option>
                                    <option value=" 1">Aktif</option>
                                <?php } ?>
                            </select>
                        </div>

                    </div>
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
    <!--===================================================-->
    <!--End Modal Edit-->

    <!--Moddal Hapus-->
    <!--===================================================-->
    <?php echo form_open_multipart('data_crud/Hapus/' . $data->id); ?>
    <div class="modal fade" id="modal-hapus-<?php echo $data->id ?>" role="dialog" tabindex="-1" aria-labelledby="modal-hapus" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!--Modal header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                    <h4 class="modal-title">Hapus Data - <?= $title; ?> (<?php echo $data->nama_lengkap ?>)</h4>
                </div>

                <!--Modal body-->
                <div class="modal-body">
                    <p>Apakah Kamu Yakin Akan Menghapus Data <b><?php echo $data->nama_lengkap ?></b> ? </p>
                </div>

                <!--Modal footer-->
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                    <button class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
    <!--===================================================-->
    <!--End Modal Hapus-->

<?php $i++;
} ?>

<!--Moddal Tambah-->
<!--===================================================-->
<?php echo form_open_multipart('data_crud/Tambah'); ?>
<div class="modal fade" id="modal-tambah" role="dialog" tabindex="-1" aria-labelledby="modal-tambah" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <!--Modal header-->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                <h4 class="modal-title">Tambah Data - <?= $title; ?></h4>
            </div>

            <!--Modal body-->
            <div class="modal-body">
                <div class="form-group">

                    <label class="control-label"><b>Nama Lengkap</b></label>
                    <div class="input-group mar-btm">
                        <span class="input-group-addon"><i class="ti-user"></i></span>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>

                    <label class="control-label"><b>Email</b></label>
                    <div class="input-group mar-btm">
                        <span class="input-group-addon"><i class="ti-email"></i></span>
                        <input type="email" class="form-control" name="email" placeholder="Email" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>

                    <label class="control-label"><b>Nomor Telephone</b></label>
                    <div class="input-group mar-btm">
                        <span class="input-group-addon"><i class="ti-mobile"></i></span>
                        <input type="number" class="form-control" name="nomor_telp" placeholder="Nomor Telephone" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                    </div>

                    <label class="control-label"><b>Alamat Lengkap</b></label>
                    <div class="input-group mar-btm">
                        <span class="input-group-addon"><i class="ti-location-arrow"></i></span>
                        <textarea placeholder="Alamat Lengkap" name="alamat" rows="5" class="form-control" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')"></textarea>
                    </div>

                    <label class="control-label"><b>Status</b></label>
                    <div class="input-group mar-btm">
                        <span class="input-group-addon"><i class="ti-check"></i></span>
                        <select class="form-control selectpicker" name="status">
                            <option value="">--- Pilih Status ---</option>
                            <option value="1">Aktif</option>
                            <option value="0">Tidak Aktif</option>
                        </select>
                    </div>

                </div>
            </div>

            <!--Modal footer-->
            <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
<?php echo form_close(); ?>
<!--===================================================-->
<!--End Modal Tambah-->