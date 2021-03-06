<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div id="login" class="animate form">
    <form action="<?php echo url_for('canciones/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?idcanciones='.$form->getObject()->getIdcanciones() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
      <table>
        <tfoot>
          <tr>
            <td colspan="2" width="50%">
              &nbsp;<a href="<?php echo url_for('canciones/index') ?>">Ver Listas</a>
               &nbsp;<?php if (!$form->getObject()->isNew()): ?>
                &nbsp;<?php echo link_to('Delete', 'canciones/delete?idcanciones='.$form->getObject()->getIdcanciones(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
              <?php endif; ?>
                <p class="signin button">
                    <input type="submit" value="Subir" />
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