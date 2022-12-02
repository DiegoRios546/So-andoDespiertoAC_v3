<?php 
class Usuarios extends Conectar{

    public function getUsuarios(){
        $conectar=parent::Conexion();
        
        $sql = "select * from usuarios";

        $sql = $conectar->prepare($sql);

        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function postUsuarios($nombre, $password, $privilegio)
    {
        $conectar=parent::Conexion();
        $sql="insert into usuarios values(NULL, ?,?,?,NULL,NULL,NULL)";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$password);
        $sql->bindValue(3,$privilegio);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function putUsuarios($nombre, $password, $privilegio, $id)
    {
        $conectar=parent::Conexion();
        $sql="update usuarios set usuario=?, password=?, privilegio=? where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$nombre);
        $sql->bindValue(2,$password);
        $sql->bindValue(3,$privilegio);
        $sql->bindValue(4,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteUsuarios($id)
    {
        $conectar=parent::Conexion();
        $sql="delete from usuarios where id=?";
        $sql=$conectar->prepare($sql);
        //utilizar los parametros en la consulta
        $sql->bindValue(1,$id);
        $sql->execute();

        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>