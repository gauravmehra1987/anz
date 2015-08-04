<div class="wrapper cocktail-reception">

<div class="main-banner-img cocktail-bnr">
<div class="main-bnnr-layout">
<h1 class="cocktail-reception-heading"><span>Cocktail</span>
    Reception</h1>
    </div>
</div>


	<div class="cocktail-reception">
    <div class="cocktail-reception-form">
    
    <div class="form-title-and-heading">
    
    <p><span>Champers and Ambers</span>
You're invited to join our cocktail reception at the ANZ Stand C44 on Level B2. It's our shout!<br>
<span class="topspacing"><strong>13 October 2015, Tuesday</strong></span>
<strong>4.00pm - 6.00pm</strong>
</p>

    </div>
    <div class="form-wrapper">
    
    <?php echo $this->Form->create('Cocktail',array('id'=>'cocktail-form')); ?>
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('first_name'); ?></div>
    <div class="right-col"><?php echo $this->Form->input('last_name'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('initials',array('label'=>"Title",'type'=>'select','options'=>array('Mr.'=>'Mr.','Mrs.'=>'Mrs.'))); ?></div>
    <div class="right-col"><div class="right-col"><?php echo $this->Form->input('email'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('phone'); ?></div>
    <div class="right-col"><?php echo $this->Form->input('city'); ?></div>
    </div>
    
    <div class="form-row">
    <div class="left-col"><?php echo $this->Form->input('country'); ?></div>
    <div class="right-col"><?php echo $this->Form->input('bank_name'); ?></div>
    </div>
    
    
    
   
    
    
    <div class="form-row topspacing">
    <div class="left-col"><?php echo $this->Form->input('attending_cocktail',array('type'=>'select','options'=>array(1=>'Yes',0=>'No'))); ?></div>
    
    </div>
    
    <div class="form-row topspacing2">
    <div class="full-width-feild">
      <?php echo $this->Form->input('dietary_restrictions'); ?>
    </div>
    </div>
    
    
    
    
    <div class="submit-button"><input type="submit" value="Submit"> </div>
    <?php echo $this->Form->end(); ?>
    </div>
    
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
        
        $("#cocktail-form").validate({
            rules: {
                'data[Cocktail][first_name]': {required: true,minlength: 3,noSpace:true},
                'data[Cocktail][last_name]': {required: true,minlength: 3,noSpace:true},
                'data[Cocktail][phone]': {'required': true,'minlength': 10,'maxlength': 12,noSpace:true},
                'data[Cocktail][city]': {'required': true,noSpace:true},
                'data[Cocktail][bank_name]': {'required': true,noSpace:true},
                'data[Cocktail][email]':{required: true,email: true,custom_email:true},
                
            },
            messages: {
                'data[Cocktail][first_name]': {required: "Please Provide your first name",minlength: "Full name must be more than 2 characters."},
                'data[Cocktail][last_name]':"Please enter your last name.",
                'data[Cocktail][phone]': {required:"Please enter your phone number",minlength:"Minimum 10 characters are needed!",maxlength:"Maximim 12 characters allowed!"},
                'data[Cocktail][email]': {required:"Please enter your email address",email:"PLease enter a valid email address"},
                'data[Cocktail][bank_name]': {'required':"Please enter your bank name"},
                'data[Cocktail][city]':{required: "Please enter your city"}
            },
            submitHandler: function(form) {
                return true;
            }
        });
    });
    </script>
    <?php echo $this->Html->script(array('jquery.validate.min')); ?>