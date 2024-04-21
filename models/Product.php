<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string|null $title
 * @property string|null $description
 * @property int|null $category_id
 * @property float|null $price
 * @property float|null $cost
 * @property float|null $stock
 * @property int|null $is_countable
 * @property int|null $bulk
 * @property string|null $sku
 *
 * @property Category $category
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'is_countable', 'bulk'], 'integer'],
            [['price', 'cost', 'stock'], 'number'],
            [['title'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 255],
            [['sku'], 'string', 'max' => 10],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'price' => 'Price',
            'cost' => 'Cost',
            'stock' => 'Stock',
            'is_countable' => 'Is Countable',
            'bulk' => 'Bulk',
            'sku' => 'Sku',
        ];
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
