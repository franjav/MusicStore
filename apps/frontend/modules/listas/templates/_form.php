<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('listas/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?nombrelistas='.$form->getObject()->getNombrelistas().'&loginduenolista='.$form->getObject()->getLoginduenolista() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2" width="50%">
          &nbsp;<a href="<?php echo url_for('listas/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'listas/delete?nombrelistas='.$form->getObject()->getNombrelistas().'&loginduenolista='.$form->getObject()->getLoginduenolista(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
             <p class="signin button">
                <input type="submit" value="Guardar" />
             </p>
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form ?>
    </tbody>
  </table>
</form>
