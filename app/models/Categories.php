<?php




class Categories extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var string
     */
    public $name;
     
    /**
     *
     * @var string
     */
    public $internal_name;
     
    /**
     *
     * @var string
     */
    public $category_parent_id;
     
    /**
     *
     * @var int
     */
    public $type;

    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'internal_name' => 'internal_name', 
            'category_parent_id' => 'category_parent_id',
            'type' => 'type'
        );
    }

}
