<div class="wrapper">
    <section class="banner-wrap">
        <div class="content-wrap">
            <h1>CAPTURING THE <span>ASEAN OPPORTUNITY</span></h1>
        </div>
    </section>
    <div class="content-wrap">
        <div class="container-area">
            <div class="content-area">
                <h2>Navigating ASEAN as it sees the benefits of greater banking integration</h2>
                <p>In 'Shaping the Future of ASEAN Banking', we explore the opportunities present in ASEAN as it emerges as a key manufacturing hub and engine of growth. ANZ has observed three distinct approaches from banks as they navigate an increasingly connected ASEAN, each requiring adaptation as the region evolves.</p>
                <button class="makenappointment download" onclick="location.href='<?php echo $this->webroot; ?>make-an-appointment'">Download White Paper</button>
            </div>
            <div class="info-graphics">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/GhZWaL02hRk" frameborder="0" allowfullscreen></iframe>
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