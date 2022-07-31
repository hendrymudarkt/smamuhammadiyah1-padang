<div class="row">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Jadwal Add</h3>
            </div>
            <?php echo form_open('jadwal/add'); ?>
            <div class="box-body">
                <div class="row clearfix">
                    <div class="col-md-6">
                        <label for="jadwal" class="control-label">Jadwal</label>
                        <div class="form-group">
                            <input type="date" name="jadwal" value="<?php echo $this->input->post('jadwal'); ?>" class="form-control" id="jadwal" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="jenis_soal" class="control-label">Jenis Soal</label>
                        <div class="form-group">
                            <select name="jenis_soal" class="form-control">
                                <option value="0">...</option>
                                <option value="1">Bahasa Indonesia</option>
                                <option value="2">Bahasa Inggris</option>
                                <option value="3">IPA</option>
                                <option value="4">Matematika</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="status" class="control-label">Status</label>
                        <div class="form-group">
                            <select name="status" class="form-control">
                                <option value="0">...</option>
                                <option value="1">Aktif</option>
                                <option value="2">Nonaktif</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i> Save
                </button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>