<?php $helper = plugin_load('helper', 'confmanager'); ?>
<div class="table">
	<h3><?php echo $helper->getLang('user_defined_values') ?></h3>
	<table class="inline confmanager_twoLineLeftImage">
		<tr>
            <th><?php echo $helper->getLang('key') ?></th>
            <th><?php echo $helper->getLang('value') ?></th>
            <th><?php echo $helper->getLang('actions') ?></th>
        </tr>
        <?php foreach($local as $key => $value):?>
        <?php $image = $this->getImage($key); ?>
        <tr>
                <td>
                	<?php if ($image !== ''): ?>
                		<img src="<?php echo hsc($image) ?>" alt="" />
                	<?php endif ?>
                	<input name="keys[]" value="<?php echo hsc($key) ?>" />
                </td>
                <td>
                    <input
                        type="text"
                        name="values[]"
                        value="<?php echo hsc($value) ?>"
                        class="edit"
                        />
                </td>
                <td>
	                    <?php include DOKU_PLUGIN . 'confmanager/tpl/deleteButton.php' ?>
                    	<img class="upload_image_button clickable"
                    		 src="<?php echo 'lib/plugins/confmanager/icons/picture_edit.png' ?>"
                        	 alt="<?php echo hsc($helper->getLang('edit_icon_action')) ?>"
                        	 title="<?php echo hsc($helper->getLang('edit_icon_action_tooltip')) ?>" />
                </td>
            </tr>
        <?php endforeach ?>
        <tr>
            <td>
                <input class="newItem" type="text" name="newKey[]">
            </td>
            <td>
                <input class="newItem submitOnTab" type="text" name="newValue[]" />
            </td>
            <td/>
        </tr>
	</table>
	<?php $this->helper->tplSaveButton() ?>
</div>
	<h3 class="clickable hoverFeedback" title="<?php echo $helper->getLang('toggle_defaults') ?>">
		<a id="toggleDefaults">
			<?php echo $helper->getLang('default_values') ?>
			<img id="defaults_toggle_button"/>
		</a>
	</h3>
	<div class="defaults">
		<p>
			<?php echo hsc($helper->getLang('defaults_description')) ?>
		</p>
	    <table class="inline confmanager_twoLineLeftImage">
	        <tr>
	            <th><?php echo $helper->getLang('key') ?></th>
	            <th><?php echo $helper->getLang('value') ?></th>
	            <th><?php echo $helper->getLang('actions') ?></th>
	        </tr>
	        <?php foreach ($default as $key => $value): ?>
	            <?php $image = $this->getImage($key); ?>
	            <tr>
	                <td>
	                	<div class="defaultValue" title="<?php echo hsc($helper->getLang('default_value_tooltip')) ?>">
	                		<?php if ($image !== ''): ?>
	                            <img src="<?php echo hsc($image) ?>" alt="" />
	                        <?php endif ?>
	                        <?php echo hsc($key) ?>
	                	</div>
	                </td>
	                <td>
	                	<div class="defaultValue" title="<?php echo hsc($helper->getLang('default_value_tooltip')) ?>">
	                        <?php echo hsc($value) ?>
	                    </div>
	                </td>
	                <td class="default_value">
	                       <img src="lib/plugins/confmanager/icons/delete_disabled.png"
	                        	alt="<?php echo hsc($helper->getLang('delete_action')) ?>"
	                        	title="<?php echo hsc($helper->getLang('delete_action_tooltip_disabled')) ?>" />
	                        <img src="<?php echo 'lib/plugins/confmanager/icons/picture_edit_disabled.png' ?>"
	                        	alt="<?php echo hsc($helper->getLang('edit_icon_action')) ?>"
	                        	title="<?php echo hsc($helper->getLang('edit_icon_action_tooltip_disabled')) ?>" />
	                </td>
	            </tr>
	        <?php endforeach ?>
	    </table>
    </div>
</div>