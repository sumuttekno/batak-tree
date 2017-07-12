<?php

/* @var $this yii\web\View */
use kartik\tree\TreeView;
use app\models\Tree;

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <?php

    echo TreeView::widget([
        // single query fetch to render the tree
        'query' => Tree::find()->addOrderBy('root, lft'),
        'headingOptions' => ['label' => 'Marga Batak'],
        'isAdmin' => false,                       // optional (toggle to enable admin mode)
        'displayValue' => 1,                           // initial display value
        //'softDelete'      => true,                        // normally not needed to change
        //'cacheSettings'   => ['enableCache' => true]      // normally not needed to change
        'rootOptions' => [
            'label' => 'Si Raja Batak',
            'class' => 'text-success'
        ],
        'mainTemplate' => '
            <div class="row">
                <div class="col-sm-7">
                    {wrapper}
                </div>
                <div class="col-sm-5">
                    {detail}
                </div>
            </div>',
    ]);
    ?>

</div>
