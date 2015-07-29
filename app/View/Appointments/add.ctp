<!--

<?php echo $this->Form->create('Appointment'); ?>
	<fieldset>
		<legend><?php echo __('Add Appointment'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('initials');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('city');
		echo $this->Form->input('country_id');
		echo $this->Form->input('bank_name');
		echo $this->Form->input('guest_1');
		echo $this->Form->input('guest_2');
		echo $this->Form->input('guest_3');
		echo $this->Form->input('team_id');
		echo $this->Form->input('person_id');
		echo $this->Form->input('topic_id');
		echo $this->Form->input('other_topic');
		echo $this->Form->input('date_id');
		echo $this->Form->input('time_id');
		echo $this->Form->input('alternate_date');
		echo $this->Form->input('alternate_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));  ?>
-->


<div class="wrapper">
	<div class="cocktail-reception">
    <div class="cocktail-reception-form">
    
    <div class="form-title-and-heading">
    <h1><span>Make an</span>
    Appointment</h1>
    <p><span>Please complete the following to</span> make an appointment:</p>
    </div>
    <div class="form-wrapper">
    
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('first_name'); ?></div>
    <div class="right-col"><?php echo $this->Form->input('last_name'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('initials',array('type'=>'select','options'=>array('Mr.'=>'Mr.','Mrs.'=>'Mrs.'))); ?></div>
    <div class="right-col"><?php echo $this->Form->input('email'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('phone'); ?></div>
    <div class="right-col"><?php echo $this->Form->input('city'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('country'); ?></div>
    <div class="right-col"><?php echo $this->Form->input('bank_name'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="form-feild-box">
    <label>Guest 1</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_1',array('label'=>false)); ?>
    </div>
    <div class="form-feild-box">
    <label>Guest 2</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_2',array('label'=>false)); ?>
    </div>
    <div class="form-feild-box last">
    <label>Guest 3</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_3',array('label'=>false)); ?>
    </div>
    </div>
    
    <div class="form-row">
    <hr>
    </div>
    
    <div class="form-row">
        <h3>We would like to meet with</h3>
        <div class="form-feild-box"><?php echo $this->Form->input('team_id'); ?></div>
        <div class="form-feild-box"><?php echo $this->Form->input('person_id'); ?></div>
        <div class="form-feild-box last"><?php echo $this->Form->input('topic_id'); ?></div>
    </div>
    
    
    <div class="form-row">
        <div class="full-width-feild"><label>Other interested topics</label><?php echo $this->Form->input('other_topic',array('label'=>false)); ?></div>
    </div>
    
    
    <div class="form-row">
    <div class="left-col topspacing"><?php echo $this->Form->input('date_id',array('label'=>'Preferred meeting date')); ?></div>
    <div class="right-col"><label>Preferred meeting time</label>
    <select class="login-selector" style="outline:none !important;">
	<option value="#">Select time</option>
    <option value="smb.php">SMB - SOHOÂ </option>
    <option value="smb.php">SMB - Mid Market</option>
    <option value="smb.php"> SMB - Partners</option>
    <option value="enterprise.php">Enterprise â€“ Private</option>
    <option value="enterprise.php">Enterprise â€“ Public</option>
    <option value="enterprise.php">Enterprise â€“ TGS</option>
</select>
    </div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><label>Alternative meeting date</label>
    <select class="login-selector" style="outline:none !important;">
	<option value="#">Select date</option>
    <option value="smb.php">SMB - SOHOÂ </option>
    <option value="smb.php">SMB - Mid Market</option>
    <option value="smb.php"> SMB - Partners</option>
    <option value="enterprise.php">Enterprise â€“ Private</option>
    <option value="enterprise.php">Enterprise â€“ Public</option>
    <option value="enterprise.php">Enterprise â€“ TGS</option>
</select>
    </div>
    <div class="right-col"><label>Alternative meeting time</label>
    <select class="login-selector" style="outline:none !important;">
	<option value="#">Select time</option>
    <option value="smb.php">SMB - SOHOÂ </option>
    <option value="smb.php">SMB - Mid Market</option>
    <option value="smb.php"> SMB - Partners</option>
    <option value="enterprise.php">Enterprise â€“ Private</option>
    <option value="enterprise.php">Enterprise â€“ Public</option>
    <option value="enterprise.php">Enterprise â€“ TGS</option>
</select>
    </div>
    </div>
    
    <div class="submit-button"><input type="submit" value="submit"> </div>
    
    </div>
    
    </div>
    </div>
</div>