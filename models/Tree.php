<?php

namespace app\models;

use Yii;
use kartik\tree\models\TreeTrait;


class Tree extends \kartik\tree\models\Tree
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tree';
    }
}