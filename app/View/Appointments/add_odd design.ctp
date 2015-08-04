<div class="wrapper">
	<div class="cocktail-reception">
    <div class="cocktail-reception-form">
    
    <div class="form-title-and-heading">
    <h1><span>Make an</span>
    Appointment</h1>
    <p><span>Please complete the following to</span> make an appointment:</p>
    </div>
    <div class="form-wrapper">
        <?php echo $this->Form->create('Appointment',array('id'=>'appointment-form')); ?>
        <div class="form-row">
            <div class="left-col"><?php echo $this->Form->input('first_name'); ?></div>
            <div class="right-col"><?php echo $this->Form->input('last_name'); ?></div>
        </div>

        <div class="form-row">
            <div class="left-col"><?php echo $this->Form->input('initials',array('label'=>"Title",'type'=>'select','options'=>array('Mr.'=>'Mr.','Mrs.'=>'Mrs.'))); ?></div>
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
            <div class="form-feild-box"><?php echo $this->Form->input('team_id',array('label'=>false)); ?></div>
            <div class="form-feild-box"><?php echo $this->Form->input('person_id',array('label'=>false)); ?></div>
            <div class="form-feild-box last"><?php echo $this->Form->input('topic_id',array('label'=>false)); ?></div>
        </div>


        <div class="form-row">
            <div class="full-width-feild"><label>Other interested topics</label><?php echo $this->Form->input('other_topic',array('label'=>false)); ?></div>
        </div>


        <div class="form-row">
        <div class="left-col topspacing"><?php echo $this->Form->input('date_id',array('label'=>'Preferred meeting date')); ?></div>
        <div class="right-col"><?php echo $this->Form->input('time_id',array('label'=>'Preferred meeting time')); ?></div>
        </div>

        <div class="form-row">
        <div class="left-col"><?php echo $this->Form->input('alternate_date',array('label'=>'Alternative meeting date')); ?></div>
        <div class="right-col"><?php echo $this->Form->input('alternate_time',array('label'=>'Alternative meeting time')); ?></div>
        </div>

        <div class="submit-button"><input type="submit" value="Submit"> </div>
    <?php echo $this->Form->end();  ?>
    </div>
    
    </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function () {
        $.validator.addMethod("noSpace", function(value, element) {
            var str = value.trim();
            if(str=='') return false; else return true;
        }, "Space are not allowed");
        
        $.validator.addMethod("custom_email", function(value, element) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(value);
        }, "Please enter a valid email address");
        
        $("#appointment-form").validate({
            rules: {
                'data[Appointment][first_name]': {required: true,minlength: 3,noSpace:true},
                'data[Appointment][last_name]': {required: true,minlength: 3,noSpace:true},
                'data[Appointment][phone]': {'required': true,'minlength': 10,'maxlength': 12,noSpace:true},
                'data[Appointment][city]': {'required': true,noSpace:true},
                'data[Appointment][bank_name]': {'required': true,noSpace:true},
                'data[Appointment][email]':{required: true,email: true,custom_email:true},
                
            },
            messages: {
                'data[Appointment][first_name]': {required: "Please Provide your first name",minlength: "Full name must be more than 2 characters."},
                'data[Appointment][last_name]':"Please enter your last name.",
                'data[Appointment][phone]': {required:"Please enter your phone number",minlength:"Minimum 10 characters are needed!",maxlength:"Maximim 12 characters allowed!"},
                'data[Appointment][email]': {required:"Please enter your email address",email:"PLease enter a valid email address"},
                'data[Appointment][bank_name]': {'required':"Please enter your bank name"},
                'data[Appointment][city]':{required: "Please enter your city"}
            },
            submitHandler: function(form) {
                return true;
            }
        });
    });
    </script>
    <?php echo $this->Html->script(array('jquery.validate.min')); ?>
</div>