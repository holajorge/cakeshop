<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>


<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Crear producto</h2>
        </div>
     
        <?= $this->Form->create($product) ?>
        <fieldset>      
            <?= $this->element('products/fields')?>
        </fieldset>
        <?= $this->Form->button('Crear producto') ?>
        <?= $this->Form->end() ?>
    </div>
</div>
