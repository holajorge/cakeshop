<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>
<?= $this->Html->css(['products.css'])?>
<?= $this->Html->script(['products.js'])?>

        <div class="products index large-10 medium-10 columns content">
            <div class="panel panel-default panel-table">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col col-xs-6">
                            <h3 class="panel-title">Lista de Productos</h3>
                        </div>
                        <div class="col col-xs-6 text-right">
                            <div class="pull-right">
                                <div class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-success btn-filter active" data-target="completed">
                                        <input type="radio" name="options" id="option1" autocomplete="off" checked>
                                        Completed
                                    </label>
                                    <label class="btn btn-warning btn-filter" data-target="pending">
                                        <input type="radio" name="options" id="option2" autocomplete="off"> Pending
                                    </label>
                                    <label class="btn btn-default btn-filter" data-target="all">
                                        <input type="radio" name="options" id="option3" autocomplete="off"> All
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <table id="mytable" class="table table-striped table-bordered table-list">
                        <thead>
                        <tr>                            
                            <th class="col-tools"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                            </th>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($products as $product): ?>
                        <tr data-status="completed">                          
                            <td align="center">
                                <?= $this->Html->link(__('<span class="glyphicon glyphicon-eye-open"</span>'), ['action' => 'view', $product->id], ['class' => 'btn btn-primary', 'escape' => false]) ?>
                                <?= $this->Html->link(__('<span class="glyphicon glyphicon-pencil"</span>'), ['action' => 'edit', $product->id], ['class' => 'btn btn-warning', 'escape' => false]) ?>
                                <?= $this->Form->postLink(__('<span class="glyphicon glyphicon-remove"</span>'), ['action' => 'delete', $product->id],  ['class' => 'btn btn-danger', 'escape' => false], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                            </td>
                            
                            <td><?= $this->Number->format($product->id) ?></td>
                            <td><?= h($product->name) ?></td>
                            <td><?= $this->Number->format($product->quantity) ?></td>
                            <td><?= $this->Number->format($product->price) ?></td>
                            <td><?= h($product->photo) ?></td>
                            <td><?= h($product->photo_dir) ?></td>
                            <td><?= h($product->created) ?></td>
                            <td><?= h($product->modified) ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <div class="row">
                        <div class="col col-xs-offset-3 col-xs-6">
                            <nav aria-label="Page navigation" class="text-center">
                                <ul class="pagination">                                   
                                    <li><?= $this->Paginator->prev('<<') ?></li>
                                    <li><?= $this->Paginator->numbers() ?></li>                                    
                                    <li><?= $this->Paginator->next('>>') ?> </li>                                        
                                </ul>
                                 <p><?= $this->Paginator->counter() ?></p>
                            </nav>
                        </div>
                        <div class="col col-xs-3">
                            <div class="pull-right">            
                             <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller' =>'Products', 'action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false])?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
