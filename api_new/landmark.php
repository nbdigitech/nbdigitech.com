
			<?php if($landmark): ?>
				<?php foreach ($landmark as $key => $row): ?>
							<strong><?php echo $key+1; ?> . </strong> <?php echo ucfirst($row->info()['description']) ?>
				<?php endforeach ?>
			<?php endif ?>
