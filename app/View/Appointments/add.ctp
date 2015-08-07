<div class="wrapper">


<div class="main-banner-img cocktail-bnr makeanappointment">
<div class="main-bnnr-layout">
<h1 class="cocktail-reception-heading"><span>Make an</span>Appointment</h1>
    </div>
</div>

	<div class="cocktail-reception">
            <div class="cocktail-reception-form" id="cocktail-reception-form">
    
    <div class="form-title-and-heading">
    <p class="makeanapointment">Please complete the following to make an appointment:</p>
    </div>
   <div class="form-wrapper makeanapointment">
    <?php echo $this->Form->create('Appointment',array('id'=>'appointment-form')); ?>
        <div class="step_1">
    <div class="form-row">
    <div class="left-col makeanapointment-3"><?php echo $this->Form->input('first_name',array('class'=>'makeanapointment','label'=>array('class'=>'makeanapointment'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('last_name',array('class'=>'makeanapointment','label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col makeanapointment"><?php echo $this->Form->input('initials',array('class'=>'makeanapointment','label'=>array('class'=>'makeanapointment','text'=>'Title'),'type'=>'select','options'=>array(''=>'Select Title','Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss','Ms'=>'Ms','Dr'=>'Dr','Professor'=>'Professor'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('email',array('class'=>'makeanapointment','label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col makeanapointment-3"><?php echo $this->Form->input('phone',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('city',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col makeanapointment"><?php echo $this->Form->input('country_id',array('label'=>array('class'=>'makeanapointment'))); ?></div>
    <div class="right-col makeanapointment-3"><?php echo $this->Form->input('bank_name',array('label'=>array('class'=>'makeanapointment','text'=>'Company Name'))); ?></div>
    </div>
    
    <div class="form-row">
    <div class="form-feild-box">
    <label class="makeanapointment">Representative 1</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_1',array('label'=>false)); ?>
    
    </div>
    <div class="form-feild-box guest2">
    <label class="makeanapointment">Representative 2</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_2',array('label'=>false)); ?>
    </div>
    <div class="form-feild-box last">
    <label class="makeanapointment">Representative 3</label>
    <p>First name, last name, job title</p>
    <?php echo $this->Form->input('guest_3',array('label'=>false)); ?>
    </div>
    </div>
            <div class="submit-button hidden"><input class="next" type="button" value="Next">  </div>
        </div>
        
    <div class='step_2'>
    <div class="form-row topspacing">
    
    <h3 class="makeanapointment">We would like to meet with:</h3>
    
    <div class="form-feild-box over-width2"><?php echo $this->Form->input('team_id',array('label'=>false)); ?></div>
    <div class="form-feild-box guest2 over-width2"><?php echo $this->Form->input('person_id',array('label'=>false)); ?></div>
    
    </div>
    
    <div class="form-row topspacing2 mbl-width">
        <div class="full-width-feild"><label class="makeanapointment">Select another ANZ Delegate:</label><?php echo $this->Form->input('more_delegates',array('label'=>false,'class'=>'bigtext')); ?></div>
    </div>
        
    <div class="form-row topspacing2 mbl-width">
        <label class="makeanapointment">Interested Topics:</label>
        <div class="form-feild-box last over-width"><?php echo $this->Form->input('topic_id',array('label'=>false)); ?></div>
    </div>
        
    <div class="form-row topspacing2 mbl-width">
    <div class="full-width-feild"><label class="makeanapointment">Other interested topics:</label><?php echo $this->Form->input('other_topic',array('label'=>false,'class'=>'bigtext')); ?></div>
    </div>
    
    
    <div class="form-row makeanapointment topspacing mbl-width">
    <div class="left-col topspacing makeanapointment-2"><label class="makeanapointment">Preferred meeting date:</label>
    <?php echo $this->Form->input('date_id',array('label'=>false)); ?>
        <span class="error"></span>
    </div>
    <div class="right-col makeanapointment-2"><label class="makeanapointment">Preferred meeting time:</label>
    <?php echo $this->Form->input('time_id',array('label'=>false)); ?>
        <span class="error"></span>
    </div>
    </div>
    
    <div class="form-row makeanapointment topspacing mbl-width">
    <div class="left-col makeanapointment-2"><label class="makeanapointment">Alternative meeting date:</label>
        <?php echo $this->Form->input('alternate_date',array('label'=>false)); ?>
        <span class="error"></span>
    </div>
    <div class="right-col makeanapointment-2"><label class="makeanapointment">Alternative meeting time:</label>
    <?php echo $this->Form->input('alternate_time',array('label'=>false)); ?>
        
    </div>
    <span class="error"></span>
    </div>
    
        <div class="submit-button"><input type="submit" id="DoSubmit" value="Submit">  </div>
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
        
        $.validator.addMethod("before", function(value, element) {
            
           if(!value){return true;}else{return false;$('#alternatedate').remove();};
        }, "Please select a valid date!");
         
        $.validator.addMethod("noSpace", function(value, element) {
            var str = value.trim();
            if(str=='') return false; else return true;
        }, "Space are not allowed");
        
        $.validator.addMethod("custom_email", function(value, element) {
            var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            return re.test(value);
        }, "Please enter a valid email address");
        
//        $('#DoSubmit').click(function(){
//        $('.c-error').remove();
        $("#appointment-form").validate({
            ignore: ":hidden",
            errorClass: "error",
            validClass: "noerror",
            errorElement: "span",
            rules: {
                'data[Appointment][first_name]': {required: true,minlength: 3,noSpace:true},
                'data[Appointment][last_name]': {required: true,minlength: 3,noSpace:true},
                'data[Appointment][phone]': {'digits': false,'required': true,'minlength': 8,'maxlength': 15,noSpace:true},
                'data[Appointment][city]': {'required': true,noSpace:true},
                'data[Appointment][bank_name]': {'required': true,noSpace:true},
                'data[Appointment][email]':{required: true,email: true,custom_email:true},
                'data[Appointment][date_id]': {required:true},
                'data[Appointment][time_id]': {required:true},
                'data[Appointment][alternate_date]': {required:true},
                'data[Appointment][alternate_time]': {required:true},
                'data[Appointment][team_id]': {'required': true},
                'data[Appointment][topic_id]': {'required': true},
                'data[Appointment][person_id]': {'required': true},
                'data[Appointment][country_id]': {'required': true},
                'data[Appointment][initials]': {'required': true}
            },
            messages: {
                'data[Appointment][first_name]': {required: "Please Provide your first name",minlength: "Full name must be more than 2 characters."},
                'data[Appointment][last_name]':"Please enter your last name.",
                'data[Appointment][phone]': {required:"Please enter your phone number",minlength:"Minimum 8 characters are needed!",maxlength:"Maximim 15 characters allowed!"},
                'data[Appointment][email]': {required:"Please enter your email address",email:"Please enter a valid email address"},
                'data[Appointment][bank_name]': {'required':"Please enter your bank name"},
                'data[Appointment][city]':{required: "Please enter your city"},
                'data[Appointment][date_id]': {'required': "Please Select Date."},
                'data[Appointment][time_id]': {'required': "Please Select Time."},
                'data[Appointment][alternate_date]': {'required': "Please Select Date."},
                'data[Appointment][alternate_time]': {'required': "Please Select Time."},
                'data[Appointment][team_id]': {'required': "Please Select Time."},
                'data[Appointment][topic_id]': {'required': "Please Select Date."},
                'data[Appointment][person_id]': {'required': "Please Select Time."}
            },
            highlight:function(element, errorClass, validClass) {
                
                if ($(element).attr('name') == "data[Appointment][date_id]" ){
                  $('#dateid').remove(); $('#AppointmentDateId_msdd').append("<span id='dateid' class='error'>Please Select Date</span>")
                }if ($(element).attr('name') == "data[Appointment][time_id]" ){
                  $('#timeid').remove(); $('#AppointmentTimeId_msdd').append("<span id='timeid' class='c-error error'>Please Select Time</span>")
                }if ($(element).attr('name') == "data[Appointment][alternate_date]" ){
                  $('#ald').remove(); $('#AppointmentAlternateDate_msdd').append("<span id='ald' class='c-error error'>Please Select Date</span>")
                }if ($(element).attr('name') == "data[Appointment][alternate_time]" ){
                  $('#alt').remove(); $('#AppointmentAlternateTime_msdd').append("<span id='alt' class='c-error error'>Please Select Time</span>")
                }if ($(element).attr('name') == "data[Appointment][team_id]" ){
                  $('#teamid').remove(); $('#AppointmentTeamId_msdd').append("<span id='teamid' class='c-error error'>Please Select ANZ Team.</span>")
                }if ($(element).attr('name') == "data[Appointment][person_id]" ){
                  $('#personid').remove(); $('#AppointmentPersonId_msdd').append("<span id='personid' class='c-error error'>Please Select ANZ Delegate.</span>")
                }if ($(element).attr('name') == "data[Appointment][topic_id]" ){
                  $('#topicid').remove(); $('#AppointmentTopicId_msdd').append("<span id='topicid' class='c-error error'>Please Select Topic.</span>")
                }if ($(element).attr('name') == "data[Appointment][country_id]" ){
                  $('#countryid').remove(); $('#AppointmentCountryId_msdd').append("<span id='countryid' class='c-error error'>Please Select Country.</span>")
                }if ($(element).attr('name') == "data[Appointment][initials]" ){
                  $('#init').remove(); $('#AppointmentInitials_msdd').append("<span id='init' class='c-error error'>Please Select Title.</span>")
                }
            },
            unhighlight: function(element, errorClass, validClass) {
               if ($(element).attr('name') == "data[Appointment][date_id]" ){
                   $('#dateid').remove();
                }if ($(element).attr('name') == "data[Appointment][time_id]" ){
                   $('#timeid').remove();
                }if ($(element).attr('name') == "data[Appointment][alternate_date]" ){
                   $('#ald').remove();
                }if ($(element).attr('name') == "data[Appointment][alternate_time]" ){
                   $('#alt').remove();
                }if ($(element).attr('name') == "data[Appointment][team_id]" ){
                   $('#teamid').remove()
                }if ($(element).attr('name') == "data[Appointment][person_id]" ){
                   $('#personid').remove();
                }if ($(element).attr('name') == "data[Appointment][topic_id]" ){
                   $('#topicid').remove()
                }if ($(element).attr('name') == "data[Appointment][initials]" ){
                   $('#init').remove()
                }if ($(element).attr('name') == "data[Appointment][country_id]" ){
                   $('#countryid').remove()
                }
            },
            errorPlacement: function(error, element) {
                    error.insertAfter(element);       
            },
            submitHandler: function(form) {
                return true;
            }
        });
    });
//    });
var $selectBox = $("select").not('#AppointmentPersonId').msDropDown().data("dd");
var personSel = $('#AppointmentPersonId').msDropDown().data("dd");
$('#AppointmentTeamId').change(function(){
    $.post('<?php echo $this->webroot; ?>people',{team:$(this).val()},function(r){ r=$.parseJSON(r);
        $('#AppointmentPersonId').html('<option value="">Select ANZ Delegate</option>');
        for(i in r){ var item=r[i];
            $('#AppointmentPersonId').append('<option value="'+i+'">'+item+'</option>');
        }
        personSel.destroy();
        $("select").msDropDown().data("dd");
    });
});
    </script>
    <?php echo $this->Html->script(array('jquery.validate.min')); ?>