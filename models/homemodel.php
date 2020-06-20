<?php
 class homemodel extends mysql
 {
     public function __construct()
     {
        //echo "mensaje desde el modelo home"; 
        parent::__construct();
     }
     public function setUser(string $nombre, int $edad)
     {
         $query_insert = "INSERT INTO usuario(nombre, edad) VALUES(?,?)";
         $arrdata = array($nombre, $edad);
         $request_insert = $this->insert($query_insert,$arrdata);
         return $request_insert;
     }

     public function getuser($id)
     {
         $sql = "SELECT * FROM usuario WHERE id = $id";
        $request= $this->select($sql);
        return $request;
     }
     public function updatauser(int $id, string $nombre, int $edad){
         $sql ="UPDATE usuario SET nombre = ?, edad = ? WHERE id = $id";
         $arrdata = array($nombre, $edad);
         $request = $this->update($sql,$arrdata);
         return $request;
     }

     public function getusers()
     {
         $sql = "SELECT * FROM usuario";
         $request = $this->select_all($sql);
         return $request;
     }
     public function deluser($id)
     {
         $sql = "DELETE FROM usuario WHERE id = $id";
         $request = $this->delete($sql);
         return $request;
     }

 }
?>