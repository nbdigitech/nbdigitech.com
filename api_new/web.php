
			<?php if($web->matchingImages()): ?>
				
				<?php foreach ($web->matchingImages() as $key => $row): ?>
					
							<a href="<?php echo ucfirst($row->info()['url']) ?>">
								
								<img src="<?php echo ucfirst($row->info()['url']) ?>" style="width:100%;" class="img-thumbnail">
							
							</a><br>
							
					
				<?php endforeach ?>
	
				<?php endif ?>
	

	