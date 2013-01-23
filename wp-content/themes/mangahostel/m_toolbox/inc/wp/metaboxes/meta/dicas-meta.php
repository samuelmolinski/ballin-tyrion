<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
 
 	<label>Quando :</label> 
	<p>
		<?php $metabox->the_field('quando'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>" style="width: 100%; min-width: 400px;"/>
	</p>
	
 	<label>Aonde :</label> 
	<p>
		<?php $metabox->the_field('aonde'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>" style="width: 100%; min-width: 400px;"/>
	</p>
	
 	<label>Mapa :</label> 
	<p>
		<?php $metabox->the_field('mapa'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>" style="width: 100%; min-width: 400px;"/>
	</p>
	
 	<label>Horário :</label>
	<p>
		<?php $metabox->the_field('horario'); ?>
		<input type="text" name="<?php $metabox->the_name(); ?>" id="<?php $metabox->the_name(); ?>" value="<?php $metabox->the_value(); ?>" style="width: 100%; min-width: 400px;"/>
	</p>
 	
	<div class="clear"></div>
	
</div>