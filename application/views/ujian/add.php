<div class="row">
	<div class="col-md-12">
		<div class="box box-widget">
			<div class="box-header with-border">
				<div class="user-block">
					<img class="img-circle" src="<?php echo base_url('resources/img/logo.png') ?>" alt="User Image" style="">
					<span class="username"><a href="#"><?php
					if (current_url() == site_url('ujian/add/1')) {
						echo "Bahasa Indonesia";
					}
					elseif (current_url() == site_url('ujian/add/2')) {
						echo "Bahasa Inggris";
					}
					elseif (current_url() == site_url('ujian/add/3')) {
						echo "IPA";
					}
					elseif (current_url() == site_url('ujian/add/4')) {
						echo "Matematika";
					} ?></a></span>
					<br>
					<span class="description">
						<button type="button" class="btn btn-default btn-xs"><i class="fa fa-calendar"></i> <?php echo date('d M Y') ?></button>
						<button type="button" class="btn btn-default btn-xs"><i class="fa fa-clock-o"></i> <div id="timer"></div></button>
					</span>
					<p style="font-size:12px" class="pull-right"><b>*Halaman jangan direfresh, jika direfresh maka semua jawaban akan hilang..!</b></p>
				</div>
				<div class="box-tools">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				</div>
			</div>
			<?php echo form_open('ujian/add/1', 'name="formUjian"'); ?>
			<div class="box-body" >
				<table class="table table-striped table-bordered" id="tableUjian">
					<thead>
						<tr>
							<th>No</th>
							<th>Soal</th>
							<th>Jawab</th>
						</tr>
					</thead>
					<tbody>
					<?php
					$no = 1;
					foreach ($soal as $s) { ?>
						<tr>
							<input type="hidden" name="nis[]" value="<?php echo $this->session->userdata('nis') ?>">
							<input type="hidden" name="jenis_soal[]" value="<?php echo $s['jenis_soal'] ?>">
							<input type="hidden" name="id_soal[]" value="<?php echo $s['id_soal'] ?>">
							<td width="5%"><?php echo $no++ ?></td>
							<td><?php echo $s['soal'] ?>
								A. <?php echo $text=str_ireplace('<p>','',$s['a']);?>
								B. <?php echo $text=str_ireplace('<p>','',$s['b']);?>
								C. <?php echo $text=str_ireplace('<p>','',$s['c']);?>
								D. <?php echo $text=str_ireplace('<p>','',$s['d']);?>
								E. <?php echo $text=str_ireplace('<p>','',$s['e']);?>
							</td>
							<td width="5%"><select name="jawab[]" class="form-control">
								<option value="0">...</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
							</select></td>
						</tr>
					<?php }
					?>
					</tbody>
				</table>
			</div>
			<div class="box-footer box-comments" style="text-align: right;">
				<div class="box-comment">
					<button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Selesai</button>
				</div>
			</div>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>