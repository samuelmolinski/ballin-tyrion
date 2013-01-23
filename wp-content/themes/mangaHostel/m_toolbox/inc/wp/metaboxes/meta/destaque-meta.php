<div id="meta_control">
		
	<p>
		<?php $metabox->the_field('enableFeatured'); ?>
		<label for="<?php $mb->the_name(); ?>">Destaque: &nbsp;
		<input id="enableFeatured" type="checkbox" name="<?php $metabox->the_name(); ?>" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/></label>
	</p>
		<p>
		<?php $metabox->the_field('enableFeatured2'); ?>
		<label for="<?php $metabox->the_name(); ?>">Destaque 2º: </label>
		<input id="enableFeatured2" type="checkbox" name="<?php $metabox->the_name(); ?>" value="1"<?php if ($metabox->get_the_value()) echo ' checked="checked"'; ?>/></label>
	</p>
 
 	<div class="clear"></div>
</div>