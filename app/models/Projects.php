<?php




class Projects extends \Phalcon\Mvc\Model
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
    public $description;
     
    /**
     *
     * @var string
     */
    public $impacto;
     
    /**
     *
     * @var string
     */
    public $indice_transparencia;
     
    /**
     *
     * @var string
     */
    public $adjuntos;
     
    /**
     *
     * @var string
     */
    public $gestion_id;
     
    /**
     * Independent Column Mapping.
     */
    public function columnMap()
    {
        return array(
            'id' => 'id', 
            'name' => 'name', 
            'description' => 'description', 
            'impacto' => 'impacto', 
            'indice_transparencia' => 'indice_transparencia', 
            'adjuntos' => 'adjuntos', 
            'gestion_id' => 'gestion_id'
        );
    }

}
