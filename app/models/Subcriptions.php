<?php




class Subcriptions extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;
     
    /**
     *
     * @var integer
     */
    public $user_id;
     
    /**
     *
     * @var integer
     */
    public $project_id;
     
    /**
     *
     * @var integer
     */
    public $gestion_id;
     
    /**
     *
     * @var integer
     */
    public $entity_id;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'user_id' => 'user_id', 
            'project_id' => 'project_id', 
            'gestion_id' => 'gestion_id', 
            'entity_id' => 'entity_id'
        );
    }

}
