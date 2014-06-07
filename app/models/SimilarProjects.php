<?php




class SimilarProjects extends \Phalcon\Mvc\Model
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
    public $project_id;
     
    /**
     *
     * @var string
     */
    public $similar_project_id;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'project_id' => 'project_id', 
            'similar_project_id' => 'similar_project_id'
        );
    }

}
