<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
			<div class="box-header with-border">
				<h3 class="box-title">User Edit</h3>
			</div>
			<?php echo form_open('user/edit/' . $user['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $user['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="username" class="control-label">Username</label>
						<div class="form-group">
							<input type="text" name="username" value="<?php echo ($this->input->post('username') ? $this->input->post('username') : $user['username']); ?>" class="form-control" id="username" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="password" class="control-label">Password</label>
						<div class="form-group">
							<input type="password" name="password" class="form-control" value="<?php echo $this->encryption->decrypt($user['password']) ?>">
						</div>
					</div>
					<div class="col-md-3">
						<label for="password" class="control-label">Level</label>
						<div class="form-group">
							<select name="level" class="form-control">
								<option value="<?php echo $user['level'] ?>"><?php echo $user['level'] ?></option>
								<option value="3">Kepala Sekolah</option>
								<option value="4">Guru</option>
							</select>
						</div>
					</div>
					<div class="col-md-3">
						<label for="jenis_guru" class="control-label">Jenis Guru</label>
						<div class="form-group">
							<select name="jenis_guru" class="form-control">
								<option value="<?php echo $user['jenis_guru'] ?>"><?php echo $user['jenis_guru'] ?></option>
								<option value="1">Bahasa Indonesia</option>
								<option value="2">Bahasa Inggris</option>
								<option value="3">IPA</option>
								<option value="4">Matematika</option>
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