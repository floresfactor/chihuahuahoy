  <?php 
/**
* Easy Crud  -  This class kinda works like ORM. Just created for fun :) 
*
* @author       Author: Vivek Wicky Aswal. (https://twitter.com/#!/VivekWickyAswal)
* @version      0.1a
*/
require_once(__DIR__ . '/Db.class.php');
class Crud {

    private $db;

    public $variables;

    public function __construct($data = array()) {
        $this->db =  new DB();  
        $this->variables  = $data;
    }

    public function __set($name,$value){
        if(strtolower($name) === $this->pk) {
            $this->variables[$this->pk] = $value;
        }
        else {
            $this->variables[$name] = $value;
        }
    }

    public function __get($name)
    {   
        if(is_array($this->variables)) {
            if(array_key_exists($name,$this->variables)) {
                return $this->variables[$name];
            }
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name .
            ' in ' . $trace[0]['file'] .
            ' on line ' . $trace[0]['line'],
            E_USER_NOTICE);
        return null;
    }

    public function save($id = "0") {
        $this->variables[$this->pk] = (empty($this->variables[$this->pk])) ? $id : $this->variables[$this->pk];

        $fieldsvals = '';
        $columns = array_keys($this->variables);

        foreach($columns as $column)
        {
            if($column !== $this->pk)
                $fieldsvals .= $column . " = :". $column . ",";
        }

        $fieldsvals = substr_replace($fieldsvals , '', -1);

        if(count($columns) > 1 ) {
            $sql = "UPDATE " . $this->table .  " SET " . $fieldsvals . " WHERE " . $this->pk . "= :" . $this->pk;
            return $this->db->query($sql,$this->variables);
        }
    }

    public function create() { 
        $bindings       = $this->variables;

        if(!empty($bindings)) {
            $fields     =  array_keys($bindings);
            $fieldsvals =  array(implode(",",$fields),":" . implode(",:",$fields));
            $sql        = "INSERT INTO ".$this->table." (".$fieldsvals[0].") VALUES (".$fieldsvals[1].")";
        }
        else {
            $sql        = "INSERT INTO ".$this->table." () VALUES ()";
        }

        return $this->db->query($sql,$bindings);
    }

    public function delete($id = "") {
        $id = (empty($this->variables[$this->pk])) ? $id : $this->variables[$this->pk];

        if(!empty($id)) {
            $sql = "DELETE FROM " . $this->table . " WHERE " . $this->pk . "= :" . $this->pk. " LIMIT 1" ;
            return $this->db->query($sql,array($this->pk=>$id));
        }
    }

    public function find($id = "") {
        $id = (empty($this->variables[$this->pk])) ? $id : $this->variables[$this->pk];

        if(!empty($id)) {
            $sql = "SELECT * FROM " . $this->table ." WHERE " . $this->pk . "= :" . $this->pk . " LIMIT 1"; 
            $this->variables = $this->db->row($sql,array($this->pk=>$id));
        }
    }





    public function all(){
        return $this->db->query("SELECT * FROM " . $this->table);
    }

     
    
    public function min($field)  {
        if($field)
            return $this->db->single("SELECT min(" . $field . ")" . " FROM " . $this->table);
    }

    public function max($field)  {
        if($field)
            return $this->db->single("SELECT max(" . $field . ")" . " FROM " . $this->table);
    }

    public function avg($field)  {
        if($field)
            return $this->db->single("SELECT avg(" . $field . ")" . " FROM " . $this->table);
    }

    public function sum($field)  {
        if($field)
            return $this->db->single("SELECT sum(" . $field . ")" . " FROM " . $this->table);
    }

    public function count($field)  {
        if($field)
            return $this->db->single("SELECT count(" . $field . ")" . " FROM " . $this->table);
    }   


    public function findField($campo,$row,$lim) {

        return $this->db->query("SELECT * FROM noticias WHERE ".$campo." = '".$row."' ORDER BY id DESC LIMIT ".$lim);
        
    }
    public function findId($id) {

        return $this->db->query("SELECT * FROM noticias WHERE id = '".$id."' ORDER BY date DESC LIMIT 1");
        
    }

     public function findIdOpinion($id) {

        return $this->db->query("SELECT * FROM opinion WHERE id = '".$id."' ORDER BY date DESC LIMIT 1");
        
    }

    public function findIdEditorial($id) {

        return $this->db->query("SELECT * FROM opinion WHERE ISNULL(rumbo) and id=".$id." order by date  desc limit 1");
        
    }
    

    public function allDescCardinales() {

        return $this->db->query("SELECT * FROM opinion WHERE NOT ISNULL(rumbo) order by date  desc limit 30");
        
    }

    public function allDescEditorial() {

        return $this->db->query("SELECT * FROM opinion WHERE ISNULL(rumbo) order by date  desc limit 30");
        
    }


    public function findIdCardinales($id) {

        return $this->db->query("SELECT * FROM opinion WHERE NOT ISNULL(rumbo) and id=".$id." order by date  desc limit 1");
        
    }

    public function countRow($tabla){

        return $this->db->query("SELECT count(id) FROM ".$tabla);


    }

    public function findSelect($select,$campo,$row,$lim) {

        return $this->db->query("SELECT ".$select." FROM noticias WHERE ".$campo." = '".$row."' ORDER BY id DESC LIMIT ".$lim);
        $this->db->CloseConnection();

    }

     public function findVideo($type) {

        return $this->db->query("SELECT * FROM noticias WHERE videotype = '".$type."' ORDER BY id DESC LIMIT 1");
        $this->db->CloseConnection();

    }

    public function findDesc($select,$campo,$row,$indice,$limit) {

    //return $this->db->query();

    return $this->db->query("SELECT ".$select." FROM noticias WHERE ".$campo." = '".$row."' ORDER BY date DESC LIMIT ".$indice.",".$limit);//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
    
}

    

    public function selectDesc($campo,$registro,$limit) {

    //return $this->db->query();

    return $this->db->query("SELECT * FROM noticias WHERE ".$campo." = '".$registro."' ORDER BY date DESC LIMIT ".$limit);//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
}
public function allDescDateOneOpinion() {

    //return $this->db->query();

    return $this->db->query("SELECT * FROM opinion order by date desc limit 1");//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
}  

public function allDescDateOne() {

    //return $this->db->query();

    return $this->db->query("SELECT * FROM noticias order by date desc limit 1");//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
}  

public function allDescDate20($tabla) {

    //return $this->db->query();

    return $this->db->query("SELECT * FROM ".$tabla." order by date desc limit 44");//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
}  





public function allDescDate($tabla) {

    //return $this->db->query();

    return $this->db->query("SELECT * FROM ".$tabla." order by date desc limit 15");//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
}  

public function getCardinal($rumbo){

return $this->db->query("SELECT * FROM opinion where rumbo='".$rumbo."' order by date desc limit 1");

}

    public function selectUbicacion($ubicacion,$registroU,$limit) {

    //return $this->db->query();

   // return $this->db->query("SELECT * FROM noticias WHERE ".$ubicacion." = '".$registroU."' and ".$clasificacion." = '".$registroC."' ORDER BY date DESC LIMIT ".$limit);//PDO::query() returns a PDOStatement on success or false on failure.
    return $this->db->query("SELECT * FROM noticias WHERE ".$ubicacion." = '".$registroU."' ORDER BY date DESC LIMIT ".$limit);

    $this->db->CloseConnection();
}


 public function getHour($date) {

    //return $this->db->query();

   // return $this->db->query("SELECT * FROM noticias WHERE ".$ubicacion." = '".$registroU."' and ".$clasificacion." = '".$registroC."' ORDER BY date DESC LIMIT ".$limit);//PDO::query() returns a PDOStatement on success or false on failure.
    $time = strtotime($date);
    $hora =  date('h', $time);
    $minutos = date('i', $time);
    echo $hora.":".$minutos;
    //return   $hora.":".$minutos;
   
}

public function updateEdit($id,$titulo,$imagen,$parrafo,$autor)
{

return $this->db->query("UPDATE opinion set titulo='".$titulo."',imagenautor='".$imagen."', cuerpo='".$parrafo."',autor='".$autor."'  where id=".$id);


}

public function updateCard($id,$titulo,$parrafo,$autor,$rumbo)
{

return $this->db->query("UPDATE opinion set titulo='".$titulo."', cuerpo='".$parrafo."',autor='".$autor."', rumbo='".$rumbo."'  where id=".$id);


}

public function updateNota($id,$clasificacion,$ciudad,$ubicacion,$titulo,$imagen,$parrafo,$imagen2,$parrafo2,$imagen3,$parrafo3,$imagen4,$parrafo4,$imagen5,$parrafo5,$video/*,$palabra,$palabra2*/)
{

return $this->db->query("UPDATE noticias set clasificacion='".$clasificacion."', ciudad='".$ciudad."',ubicacion='".$ubicacion."', titulo='".$titulo."',imagen='".$imagen."', parrafo='".$parrafo."', imagen2='".$imagen2."', parrafo2='".$parrafo2."', imagen3='".$imagen3."', parrafo3='".$parrafo3."', imagen4='".$imagen4."', parrafo4='".$parrafo4."',imagen5='".$imagen5."',parrafo5='".$parrafo5."', video='".$video."' where id=".$id);


}

public function printHour($var){

$hora = $this->getHour($var);

return $hora;

}



public function findDescPag($select,$campo,$row,$pag) {

 if ($pag > 1)
 {
  //        $pag = ($pag*7);
        // $indice=1+$pag;
  //        $limit=7+$pag;  

        //$indice = ($pag*7);
    $pag = ($pag*7);
    $indice = $pag-7;   
    $limite = 7;   
}
else
{

    $indice = 0;
    $limite = 7;
}

    //return $this->db->query();

    return $this->db->query("SELECT ".$select." FROM noticias WHERE ".$campo." = '".$row."' ORDER BY date DESC LIMIT ".$indice.",".$limite);//PDO::query() returns a PDOStatement on success or false on failure.
    //return $this->db->query("SELECT ".$select." FROM noticias WHERE ".$campo." = '".$row."' ORDER BY date DESC LIMIT 0,".$pag);//PDO::query() returns a PDOStatement on success or false on failure.
    $this->db->CloseConnection();
}

public function findmMasVisitas() {


    return $this->db->query("SELECT * FROM noticias WHERE DATE > NOW() - INTERVAL 3 DAY ORDER BY VISITAS DESC LIMIT 10");
    //return $this->db->query("SELECT * FROM noticias ORDER BY VISITAS DESC LIMIT 10");
    $this->db->CloseConnection();
    
}

public function update($campo,$set,$id) {

    //return $this->db->query();

    return $this->db->query("UPDATE noticias SET ".$campo." = '".$set." WHERE id=".$id);
    //PDO::query() returns a PDOStatement on success or false on failure.
}

public function contador($id) {

    //return $this->db->query();

    return $this->db->query("UPDATE noticias SET `visitas` = `visitas`+1 WHERE id=".$id);
    $this->db->CloseConnection();

}

public function contadorOpinion($id) {

    //return $this->db->query();

    return $this->db->query("UPDATE opinion SET `visitas` = `visitas`+1 WHERE id=".$id);
    $this->db->CloseConnection();

}

public function insertNews($clasificacion,$ciudad,$ubicacion,$titulo,$imagen,$parrafo,$imagen2,$parrafo2,$imagen3,$parrafo3,$imagen4,$parrafo4,$imagen5,$parrafo5,$video,$videotype) {

    

    $test = $this->db->query("CALL insertar('".$clasificacion."','".$ciudad."','".$ubicacion."','".$titulo."','".$imagen."','".$parrafo."','".$imagen2."','".$parrafo2."','".$imagen3."','".$parrafo3."','".$imagen4."','".$parrafo4."','".$imagen5."','".$parrafo5."','".$video."','".$videotype."')");
    
    return ($test);
    $this->db->CloseConnection();
    //PDO::query() returns a PDOStatement on success or false on failure.
}

public function insertCardinales($titulo,$cuerpo,$autor,$imagenautor,$rumbo) {

    

    $test = $this->db->query("CALL insertarop('".$titulo."','".$cuerpo."','".$autor."','".$imagenautor."','".$rumbo."')");
    
    return ($test);
    $this->db->CloseConnection();
    //PDO::query() returns a PDOStatement on success or false on failure.
}

public function insertEditorial($titulo,$cuerpo,$autor,$imagenautor) {

    

    $test = $this->db->query("CALL insertarop('".$titulo."','".$cuerpo."','".$autor."','".$imagenautor."',NULL)");
    
    return ($test);
    $this->db->CloseConnection();
    //PDO::query() returns a PDOStatement on success or false on failure.
}



public function test() 
{
  echo "hola mundo";
}

public  function getIdVisita(){

     $array= $this->db->query("select id from noticias order by visitas desc limit 1");

foreach ($array as $key) {
    $id= $key['id'];
}

return $id;


}

public function findRel($id) {

        $res = $this->db->query("SELECT * FROM noticias  WHERE id = ".$id." ORDER BY id DESC LIMIT 1");
        if (!empty($res))
        {
            $cont = 0;
            $i = 1;
            $pal ="";
            $Query = "SELECT * FROM (select * from noticias where id!=".$id." order by id desc)x where titulo like ";

            for ($x=0;$x<strlen($res['0']['titulo']);$x++)
            {
                if($res['0']['titulo'][$x] == " ")
                {
                    $cont++;
                    $palabras[$i] = $pal;
                    $pal = "";
                    $i++;
                }
                else
                {
                    $pal .= $res['0']['titulo'][$x];
                }
            }
            $palabras[$i] = $pal;

            function sortx($a,$b){
                return strlen($b)-strlen($a);
            }

            usort($palabras,'sortx');

            $Query .= "'%".$palabras[0]."%' or titulo like '%".$palabras[1]."%' order by id desc limit 2;";

            //print_r($Query."<br>");

            return $this->db->query($Query);
        }

    }

public function deleteNota($id) {

    return $this->db->query("DELETE FROM noticias where id=".$id);

    $this->db->CloseConnection();
}

public function deleteOpinion($id) {

    return $this->db->query("DELETE FROM opinion where id=".$id);

    $this->db->CloseConnection();
}





}
?>
