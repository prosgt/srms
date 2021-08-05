<?php
  class Stuclass {
    private $db;

    public function __construct(){
      $this->db = new Database;
      
    }

    // adding new class in the db
    function add($data)
    {
      // Prepare Query
      $this->db->query('INSERT INTO  tblclasses (ClassName,ClassNameNumeric,Section) VALUES(:name,:numeric,:section)');
      // Bind Values
      $this->db->bind(':name', $data['classname']);
      $this->db->bind(':numeric', $data['classnamenumeric']);
      $this->db->bind(':section', $data['section']);
      //Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }

    function view()
    {
      $this->db->query("SELECT * from tblclasses");
      $results = $this->db->resultset();
      return $results;
    }

    function getById($id=null)
    {
      $this->db->query("SELECT * FROM tblclasses WHERE id = :id");
      $this->db->bind(':id', $id);
      $row = $this->db->resultset();
      return $row;
    }


    function update($data)
    {
       // Prepare Query
       $this->db->query('UPDATE  tblclasses SET  ClassName = :name ,
                        ClassNameNumeric = :numeric,Section = :section WHERE id = :id');
       // Bind Values
       $this->db->bind(':name', $data['classname']);
       $this->db->bind(':numeric', $data['classnamenumeric']);
       $this->db->bind(':section', $data['section']);
       $this->db->bind(':id', $data['id']);
       //Execute
       if($this->db->execute()){
         return true;
       } else {
         return false;
       }
    }

    //delete]
    function delete($id)
    {
      $this->db->query("DELETE FROM tblclasses WHERE id = :id ");
      $this->db->bind(':id', $id);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


    function getClassByID($id)
    {
      $this->db->query("SELECT * FROM tblclasses WHERE id = :id ");
      $this->db->bind(':id', $id);
      $row = $this->db->single();
      //Check Rows
      if($this->db->rowCount() > 0){
        return true;
      } else {
        return false;
      }
    }
}
    ?>
