<div class="row">
	<div class="col-md-12">
		<div class="box">
			<!-- BAR CHART -->
			<div class="box box-success">
				<div class="box-header with-border">
					<h3 class="box-title">Berita</h3>
					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i
								class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i
								class="fa fa-times"></i></button>
					</div>
				</div>
				<div class="box-body">
					<?php
					function limit_words($string, $word_limit){
						$words = explode(" ",$string);
						return implode(" ",array_splice($words,0,$word_limit));
					}
					foreach($berita as $b): ?>
					<ul class="timeline">
						<!-- timeline time label -->
						<li class="time-label">
							<span class="bg-red">
								<?php echo date('d M Y', strtotime($b['tanggal'])) ?>
							</span>
						</li>
						<!-- /.timeline-label -->
						<!-- timeline item -->
						<li>
							<i class="fa fa-envelope bg-blue"></i>

							<div class="timeline-item">
								<span class="time"><i class="fa fa-clock-o"></i> <?php echo date('H:i', strtotime($b['tanggal'])) ?></span>

								<h3 class="timeline-header"><a href="#"><?php echo $b['judul'] ?></a></h3>

								<div class="timeline-body">
								<?php
								$long_string = $b['isi'];
								$limited_string = limit_words($long_string, 200);
								echo $limited_string;
								?>
								</div>
								<div class="timeline-footer">
									<a class="btn btn-primary btn-xs" href="<?php echo site_url('berita/view/'.$b['id_berita']) ?>">Selengkapnya</a>
								</div>
							</div>
						</li>
						<!-- END timeline item -->
					</ul>
					<?php endforeach; ?>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
	</div>
</div>