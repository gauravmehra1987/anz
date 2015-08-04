<div class="wrapper">


<div class="main-banner-img cocktail-bnr makeanappointment">
<div class="main-bnnr-layout">
<h1 class="cocktail-reception-heading"><span>Make an</span>Appointment</h1>
    </div>
</div>

	<div class="cocktail-reception">
    <div class="cocktail-reception-form">
    
    <div class="form-title-and-heading">
    <p class="makeanapointment">Please complete the following to make an appointment:</p>
    </div>
    <div class="form-wrapper makeanapointment">
    <?php echo $this->Form->create('Appointment',array('id'=>'appointment-form')); ?>
        <div class="step_1">
    <div class="form-row">
    <div class="left-col makeanapointment-3"><?php echo $this->Form->input('first_name',array('class'=>'makeanapointment','label'=>array('class'=>'makeanapointment'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('last_name',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col makeanapointment"><?php echo $this->Form->input('initials',array('label'=>array('class'=>'makeanapointment','text'=>'Title'),'type'=>'select','options'=>array('Mr.'=>'Mr.','Mrs.'=>'Mrs.'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('email',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col makeanapointment-3"><?php echo $this->Form->input('phone',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('city',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col makeanapointment"><?php echo $this->Form->input('country_id',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('bank_name',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="form-feild-box">
    <label class="makeanapointment">Guest 1</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_1',array('label'=>false)); ?>
    </div>
    <div class="form-feild-box guest2">
    <label class="makeanapointment">Guest 2</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_2',array('label'=>false)); ?>
    </div>
    <div class="form-feild-box last">
    <label class="makeanapointment">Guest 3</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_3',array('label'=>false)); ?>
    </div>
    </div>
            <div class="submit-button hidden"><input class="next" type="button" value="Next">  </div>
        </div>
        
    <div class='step_2'>
    <div class="form-row topspacing">
    
    <h3 class="makeanapointment">We would like to meet with</h3>
    
    <div class="form-feild-box"><?php echo $this->Form->input('team_id',array('label'=>false)); ?></div>
    <div class="form-feild-box guest2"><?php echo $this->Form->input('person_id',array('label'=>false)); ?></div>
    <div class="form-feild-box last"><?php echo $this->Form->input('topic_id',array('label'=>false)); ?></div>
    </div>
    
    
    <div class="form-row topspacing2 mbl-width">
    <div class="full-width-feild"><label class="makeanapointment">Other interested topics</label><?php echo $this->Form->input('other_topic',array('label'=>false,'class'=>'makeanapointment')); ?></div>
    </div>
    
    
    <div class="form-row makeanapointment topspacing mbl-width">
    <div class="left-col topspacing makeanapointment-2"><label class="makeanapointment">Preferred meeting date</label>
    <?php echo $this->Form->input('date_id',array('label'=>false)); ?>
    </div>
    <div class="right-col makeanapointment-2"><label class="makeanapointment">Preferred meeting time</label>
    <?php echo $this->Form->input('time_id',array('label'=>false)); ?>
    </div>
    </div>
    
    <div class="form-row makeanapointment topspacing mbl-width">
    <div class="left-col makeanapointment-2"><label class="makeanapointment">Alternative meeting date</label>
        <?php echo $this->Form->input('alternate_date',array('label'=>false)); ?>
    </div>
    <div class="right-col makeanapointment-2"><label class="makeanapointment">Alternative meeting time</label>
    <?php echo $this->Form->input('alternate_time',array('label'=>false)); ?>
    </div>
    </div>
    
    <div class="submit-button"><input type="submit" value="Submit">  </div>
    </div>
    <?php echo $this->Form->end();  ?>
    </div>
    
    </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
            
        $('.next').click(function(e){ e.preventDefault();
            if($("#appointment-form").valid()){
                $('.step_1').hide();
                $('.step_2').show();
            }else{
                $('.step_2').hide();
            }
        });  
            
        $.validator.addMethod("noSpace", function(value, element) {
            var str = value.trim();
            if(str=='') return false; else return true;
        }, "Space are not allowed");
        
        $.validator.addMethod("custom_email", function(value, element) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(value);
        }, "Please enter a valid email address");
        
        $("#appointment-form").validate({
            ignore: ":hidden",
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