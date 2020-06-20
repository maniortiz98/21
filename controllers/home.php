<?php
class home extends controllers
{
    public function __construct(){
        parent::__construct();

    }
    public function home()
    {
      $data['page_id'] = 1;
      $data['page_tag'] = "Tienda ";
      $data['page_title'] = "pagina principal";
      $data['page_name'] = "home";
      $data['page_content'] = "lorem gngn gnbirnb tnb";
            $this->views->getview($this,"home", $data);
    }
    
    public function insertar()
    {
        $data = $this->model->setUser("manul",24);
        $data = $this->model->setUser("mani",18);
        print_r($data);

    }
    public function verusuario($id)
    {
        $data = $this->model->getuser($id);
        print_r($data);
    }
    public function actualizar()
    {
        $data = $this->model->updatauser(1,"roberto",20);
        print_r($data);
    }
    public function verusuarios()
    {
        $data = $this->model->getusers();
        print_r($data);
    }
    public function eliminarusuario($id)
    {
        $data = $this->model->deluser($id);
        print_r($data);
    }

}
?>