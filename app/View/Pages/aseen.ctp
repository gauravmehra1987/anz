<div class="wrapper">
    <section class="banner-wrap">
        <div class="content-wrap">
            <h1>CAPTURING THE <span>ASEAN OPPORTUNITY</span></h1>
        </div>
    </section>
    <div class="content-wrap">
        <div class="container-area">
            <div class="content-area">
                <h2>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                <button class="makenappointment" onclick="location.href='<?php echo $this->webroot; ?>make-an-appointment'">Download White Paper</button>
            </div>
            <div class="info-graphics">
                <span>Pending infographic <br/>(max width: 1000px)</span>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('.tab').click(function(){
        $('.tab').removeClass('active');
        $(this).addClass('active');
        $('.tc').hide();
        $('.'+$(this).attr('id')).show();
    });
	$('.tab:first-child').trigger('click');
</script>