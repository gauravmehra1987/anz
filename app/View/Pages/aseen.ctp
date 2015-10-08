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
                <button class="makenappointment download" onclick="location.href='<?php echo $this->webroot; ?>img/Shaping_the_Future_of_ASEAN_Banking_ANZ_LR.pdf'" target="_blank">Download White Paper</button>
            </div>
             <div class="info-graphics">
                <span>Pending infographic <br/>(max width: 1000px)</span>
            </div>
            <div class="responsive-video">
                <iframe width="560" height="315" src="https://player.vimeo.com/video/141377507" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
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