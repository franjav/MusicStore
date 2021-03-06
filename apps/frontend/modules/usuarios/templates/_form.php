<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="login" class="animate form">

    <form action="<?php echo url_for('usuarios/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?login='.$form->getObject()->getLogin() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>  
      <table >
        <tfoot>
          <tr>
            <td colspan="2" width="50%">
              <!--&nbsp;<a href="<?php echo url_for('usuarios/index') ?>">Back to list</a>-->
              <?php if (!$form->getObject()->isNew()): ?>
                &nbsp;<?php echo link_to('Delete', 'usuarios/delete?login='.$form->getObject()->getLogin(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
              <?php endif; ?>
                <p></p>
                <p class="signin button">
                    <input type="submit" value="GUARDAR" />
                </p>
            </td>
          </tr>
        </tfoot>
        <tbody>
          <?php echo $form ?>
        </tbody>
      </table>
    </form>
    
</div>

