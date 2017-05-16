<%
/**
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* For full copyright and license information, please see the LICENSE.txt
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @since         0.1.0
* @license       http://www.opensource.org/licenses/mit-license.php MIT License
*/
%>
<?php
/**
 * @var \<%= $namespace %>\View\AppView $this
 */
?>
<%
use Cake\Utility\Inflector;

$fields = collection($fields)
->filter(function($field) use ($schema) {
return !in_array($schema->columnType($field), ['binary', 'text']);
});

if (isset($modelObject) && $modelObject->behaviors()->has('Tree')) {
$fields = $fields->reject(function ($field) {
return $field === 'lft' || $field === 'rght';
});
}

if (!empty($indexColumns)) {
$fields = $fields->take($indexColumns);
}

%>

<?php
$this->Html->addCrumb($titlePage, ['action' => 'index']);
$this->Html->addCrumb($descriptionPage);
?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $descriptionPage?></h3>
        <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <a href="#" data-toggle="dropdown" class="btn btn-box-tool dropdown-toggle" aria-expanded="false">
                <i class="fa fa-bars fa-lg preto"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><?= $this->Html->link(__('<i class="fa fa-plus"></i> New <%= $singularHumanName %>'), ['action' => 'add'], ['escape' => false]) ?></li>
            </ul>
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
<% foreach ($fields as $field): %>
                    <th><?= $this->Paginator->sort('<%= $field %>') ?></th>
<% endforeach; %>
                    <th style="width: 10%"><?= __('Options') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($<%= $pluralVar %> as $<%= $singularVar %>): ?>
            <tr>
<%        foreach ($fields as $field) {
$isKey = false;
if (!empty($associations['BelongsTo'])) {
foreach ($associations['BelongsTo'] as $alias => $details) {
if ($field === $details['foreignKey']) {
$isKey = true;
%>
                <td><?= $<%= $singularVar %>->has('<%= $details['property'] %>') ? $this->Html->link($<%= $singularVar %>-><%= $details['property'] %>-><%= $details['displayField'] %>, ['controller' => '<%= $details['controller'] %>', 'action' => 'view', $<%= $singularVar %>-><%= $details['property'] %>-><%= $details['primaryKey'][0] %>]) : '' ?></td>
<%
break;
}
}
}
if ($isKey !== true) {
if (!in_array($schema->columnType($field), ['integer', 'biginteger', 'decimal', 'float'])) {
%>
                <td><?= h($<%= $singularVar %>-><%= $field %>) ?></td>
<%
} else {
%>
                <td><?= $this->Number->format($<%= $singularVar %>-><%= $field %>) ?></td>
<%
}
}
}

$pk = '$' . $singularVar . '->' . $primaryKey[0];
%>
                <td>
                    <div class="btn-group">
                        <button class="btn btn-default btn-active-pink dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button" aria-expanded="true"><?= __('Options') ?> <i class="fa fa-caret-down" aria-hidden="true"></i></button>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><?= $this->Html->link('<i class="fa fa-eye" aria-hidden="true"></i> '.__('View'), ['action' => 'view', <%= $pk %>], ['escape'=> false]) ?>
                            <li><?= $this->Html->link('<i class="fa fa-pencil-square-o" aria-hidden="true"></i> '. __('Edit'), ['action' => 'edit', <%= $pk %>], ['escape'=> false]) ?></li>
                            <li><?= $this->Form->postLink('<i class="fa fa-trash" aria-hidden="true"></i> '. __('Delete'), ['action' => 'delete', <%= $pk %>], ['confirm' => __('Are you sure you want to delete # {0}?', <%= $pk %>), 'escape'=> false]) ?></li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div><!-- /.box-body -->
    <div class="box-footer">
        <ul class="pagination pagination-sm no-margin pull-right">
            <?= $this->Paginator->prev('« ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' »') ?>
        </ul>
    </div><!-- box-footer -->
</div><!-- /.box -->