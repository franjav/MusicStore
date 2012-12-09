<div id="login" class="animate form">
<H1>Iniciar Sesion</h1>
    <table align="center" width="80%">        
            <form name="form_login" id="form_register" action="<?php echo url_for('login/login') ?>" method="post" >
                <?php echo $form; ?>                   
                
                 <table align="center">
                    <tr>
                       <p class="signin button">
                            <input type="submit" value="Entrar" />
                       </p>           
                    </tr>

                    <?php if($sf_user->getFlash("error")): ?>
                            <div class="errorL"><?php echo $sf_user->getFlash("error"); ?></div>
                    <?php endif; ?>        
                    <p class="change_link">
                        &iquest; Es tu primer vez en MusicStore ?
                        <?php echo link_to("Registrese","login/registro")?>                                    
                    </p>
                </table>                
             </form> 
    </table>
</div>


    
    
    