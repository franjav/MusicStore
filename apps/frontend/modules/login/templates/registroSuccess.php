<div id="login" class="animate form">
<H1>Reg&iacute;strate Ya...</H1>
    <table align="center" width="80%">        
            <form name="form_login" id="form_register" action="<?php echo url_for('login/registro') ?>" method="post" >
                <?php echo $form; ?>  
                 <table align="center">
                    <tr>
                       <p class="signin button">
                            <input type="submit" value="Registrarse" />
                       </p>           
                    </tr>

                    <?php if($sf_user->getFlash("error")): ?>
                            <div class="errorL"><?php echo $sf_user->getFlash("error"); ?></div>
                    <?php endif; ?>        
                    <p class="change_link">
                        &iquest; Es tu primer vez en MusicStore ?
                        <?php echo link_to("Regresar","login/login")?>                                    
                    </p>
                </table>                
             </form> 
    </table>
</div>

