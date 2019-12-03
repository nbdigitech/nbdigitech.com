<div class="row">
	<div class="col-12">
		<ol>
			<?php if ($faces): ?>
				<?php foreach ($faces as $key => $row): ?>
					<li><strong>Face <?php echo $key+1; ?></strong></li>
					<hr>
					<div class="row">
						<div class="col-6">
							<strong>Joy</strong>
						</div>
						<div class="col-6">
							<strong><?php echo $row->info()['joyLikelihood'] ?></strong>
						</div>
					</div>


					<div class="row">
						<div class="col-6">
							<strong>Sorrow</strong>
						</div>
						<div class="col-6">
							<strong><?php echo $row->info()['sorrowLikelihood'] ?></strong>
						</div>
					</div>



					<div class="row">
						<div class="col-6">
							<strong>Angry</strong>
						</div>
						<div class="col-6">
							<strong><?php echo $row->info()['angerLikelihood'] ?></strong>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<strong>Surprise</strong>
						</div>
						<div class="col-6">
							<strong><?php echo $row->info()['surpriseLikelihood'] ?></strong>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<strong>Blurred</strong>
						</div>
						<div class="col-6">
							<strong><?php echo $row->info()['blurredLikelihood'] ?></strong>
						</div>
					</div>

					<div class="row">
						<div class="col-6">
							<strong>Head Wear</strong>
						</div>
						<div class="col-6">
							<strong><?php echo $row->info()['headwearLikelihood'] ?></strong>
						</div>
					</div>
				<?php endforeach ?>
			<?php endif ?>
		</ol>
	</div>
</div>