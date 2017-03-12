<?php echo validation_errors(); ?>

<?php echo form_open('lm_overhaul/edit/'.$lm_overhaul['id']); ?>

	<div>Lid : <input type="text" name="lid" value="<?php echo ($this->input->post('lid') ? $this->input->post('lid') : $lm_overhaul['lid']); ?>" /></div>
	<div>F Create : <input type="text" name="f_create" value="<?php echo ($this->input->post('f_create') ? $this->input->post('f_create') : $lm_overhaul['f_create']); ?>" /></div>
	<div>F Description : <textarea name="f_description"><?php echo ($this->input->post('f_description') ? $this->input->post('f_description') : $lm_overhaul['f_description']); ?></textarea></div>
	<div>F Cause : <textarea name="f_cause"><?php echo ($this->input->post('f_cause') ? $this->input->post('f_cause') : $lm_overhaul['f_cause']); ?></textarea></div>
	<div>F Deal : <textarea name="f_deal"><?php echo ($this->input->post('f_deal') ? $this->input->post('f_deal') : $lm_overhaul['f_deal']); ?></textarea></div>
	<div>F Change : <textarea name="f_change"><?php echo ($this->input->post('f_change') ? $this->input->post('f_change') : $lm_overhaul['f_change']); ?></textarea></div>
	<div>F Done : <input type="text" name="f_done" value="<?php echo ($this->input->post('f_done') ? $this->input->post('f_done') : $lm_overhaul['f_done']); ?>" /></div>
	<div>Supportor : <input type="text" name="supportor" value="<?php echo ($this->input->post('supportor') ? $this->input->post('supportor') : $lm_overhaul['supportor']); ?>" /></div>
	<div>Preparer : <input type="text" name="preparer" value="<?php echo ($this->input->post('preparer') ? $this->input->post('preparer') : $lm_overhaul['preparer']); ?>" /></div>
	<div>Submitor : <input type="text" name="submitor" value="<?php echo ($this->input->post('submitor') ? $this->input->post('submitor') : $lm_overhaul['submitor']); ?>" /></div>
	<div>Submit Date : <input type="text" name="submit_date" value="<?php echo ($this->input->post('submit_date') ? $this->input->post('submit_date') : $lm_overhaul['submit_date']); ?>" /></div>
	<div>Update Date : <input type="text" name="update_date" value="<?php echo ($this->input->post('update_date') ? $this->input->post('update_date') : $lm_overhaul['update_date']); ?>" /></div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>