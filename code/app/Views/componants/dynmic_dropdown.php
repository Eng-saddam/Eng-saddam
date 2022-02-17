
<?php $additional = 'id="'.$parameter['id'].'" class="'.$parameter['class'].' custom-select dropdown_lg_custom" '; ?>

<?=  form_dropdown($parameter['name'],  $parameter['items'] , [''.$parameter['selected'].''],$additional) ?>



