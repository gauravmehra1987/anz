<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
  <tr>
    <td align="center" valign="top">
    <table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="center" valign="top"><img src="http://irisapacdigital.com/stage.anz/img/mail/anz-main-image.jpg" width="600" height="373" alt="Conversations that matter" border="0" style="display:block;"/></td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <table width="500" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
  <tr>
    <td align="center" valign="top" height="40"><img src="http://irisapacdigital.com/stage.anz/img/mail/spacer.gif" width="2" height="2" alt=" " /></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="color:#414042; font-size:14px; font-family:Verdana, Geneva, sans-serif; padding-left:40px;">Dear <?php echo $form['Appointment']['first_name']; ?> <?php echo $form['Appointment']['last_name']; ?>, </td>
  </tr>
  <tr>
    <td align="center" valign="top" height="25"><img src="http://irisapacdigital.com/stage.anz/img/mail/spacer.gif" width="2" height="2" alt=" " border="0" style="display:block;" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="color:#414042; font-size:14px; font-family:Verdana, Geneva, sans-serif; padding-left:40px;">
        First name: <?php echo $form['Appointment']['first_name']; ?><br/>
        Last Name: <?php echo $form['Appointment']['last_name']; ?><br/>
        Title: <?php echo $form['Appointment']['initials']; ?><br/>
        E-mail: <?php echo $form['Appointment']['email']; ?><br/>
        Phone: <?php echo $form['Appointment']['phone']; ?><br/>
        City: <?php echo $form['Appointment']['city']; ?><br/>
        Country: <?php echo $form['Country']['name']; ?><br/>
        Bank name: <?php echo $form['Appointment']['bank_name']; ?><br/>
        <br/><br/>
        Accompanied by: <br/>
        <?php if($form['Appointment']['guest_1']): ?>Representative 1: <?php echo $form['Appointment']['guest_1']; ?> (<?php echo $form['Appointment']['designation_1']; ?>)<br/><?php endif; ?>
        <?php if($form['Appointment']['guest_2']): ?>Representative 2: <?php echo $form['Appointment']['guest_2']; ?> (<?php echo $form['Appointment']['designation_2']; ?>)<br/><?php endif; ?>
        <?php if($form['Appointment']['guest_3']): ?>Representative 3: <?php echo $form['Appointment']['guest_3']; ?> (<?php echo $form['Appointment']['designation_3']; ?>)<br/><?php endif; ?>
        <br/><br/>
        Discussion Topics:<?php echo $form['Topic']['title']; ?><br/><br/>
        
        Other interested topics:
        <?php echo $form['Topic2']['title']; ?><br/>
        <?php echo $form['Topic3']['title']; ?><br/><br/>
        
        We would like to meet with:<br/>
        <?php echo $form['Team']['title']; ?>, <?php echo $form['Person']['title']; ?><br/>
        <?php if($form['Team2']['title']): ?><?php echo $form['Team2']['title']; ?>, <?php echo $form['Person2']['title']; ?><br/><?php endif; ?>
        <?php if($form['Team3']['title']): ?><?php echo $form['Team3']['title']; ?>, <?php echo $form['Person3']['title']; ?><br/><?php endif; ?>
        
        Preferred meeting date and time: <?php echo $form['Date']['title']; ?>, <?php echo $form['Time']['title']; ?><br/>
        Alternative meeting date and time: <?php echo $form['AlternateDate']['title']; ?>, <?php echo $form['AlternateTime']['title']; ?><br/>
    </td>
  </tr>
  <tr>
    <td align="center" valign="top" height="30"><img src="http://irisapacdigital.com/stage.anz/img/mail/spacer.gif" width="2" height="2" alt=" " border="0" style="display:block;" /></td>
  </tr>
  <tr>
    <td align="left" valign="top" style="color:#414042; font-size:14px; font-family:Verdana, Geneva, sans-serif; padding-left:40px;">Yours sincerely,</td>
  </tr>
  <tr>
    <td align="left" valign="top" style="color:#414042; font-size:14px; font-family:Verdana, Geneva, sans-serif; padding-left:40px;padding-bottom: 50px;">ANZ Sibos Meeting Coordinator</td>
  </tr>
</table>
</td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="http://irisapacdigital.com/stage.anz/img/mail/anz-footer.jpg" width="600" heanz-footer.jpgight="58" alt="ANZ" border="0" style="display:block;"/></td>
  </tr>
</table>
    </td>
  </tr>
</table>
</td>
  </tr>
</table>