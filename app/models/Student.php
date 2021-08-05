<?php
  class Student {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    function view()
    {
      $this->db->query("SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,
                        tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses 
                        on tblclasses.id=tblstudents.ClassId");
      $results = $this->db->resultset();
      return $results;
    }

    //by id 
    
    function getById($id=null)
    {
      $this->db->query("SELECT tblstudents.StudentName,tblstudents.RollId,tblstudents.RegDate,tblstudents.StudentId,
      tblstudents.Status,tblclasses.ClassName,tblclasses.Section from tblstudents join tblclasses 
      on tblclasses.id=tblstudents.ClassId where id=:id");
      $this->db->bind(':id', $id);
      $row = $this->db->resultset();
      return $row;
    }


    function add($data)
    {
      // Prepare Query
      $this->db->query('INSERT INTO  tblstudents(StudentName,RollId,StudentEmail,Gender,ClassId,DOB,Status) 
                      VALUES(:studentname,:rollid,:studentemail,:gender,:classid,:dob,:status)');
      // Bind Values
      $this->db->bind(':studentname', $data['studentname']);
      $this->db->bind(':rollid', $data['rollid']);
      $this->db->bind(':studentemail', $data['email']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':classid', $data['class']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':status', $data['status']);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    //updating students
    function update($data)
    {
      $this->db->query('update tblstudents set StudentName=:studentname,RollId=:roolid,StudentEmail=:studentemail,Gender=:gender,DOB=:dob,Status=:status where StudentId=:stid ');
      $this->db->bind(':studentname', $data['studentname']);
      $this->db->bind(':rollid', $data['rollid']);
      $this->db->bind(':studentemail', $data['email']);
      $this->db->bind(':gender', $data['gender']);
      $this->db->bind(':classid', $data['class']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':status', $data['status']);
      $this->db->bind(':stid', $data['id']);
      if($this->db->execute()){return true;} else {return false;}
    }

    function getStuByID($id=null)
    {
      if($id==null)
      {
        return false;
      }
      $this->db->query("SELECT * FROM tblstudents WHERE id = :id");
      $this->db->bind(':id', $id);
      $row = $this->db->resultset();
      return $row;
    }

    function delete($id=null)
    {
      if($id==null)
      {
        return false;
      }
      $this->db->query("DELETE FROM tblstudents WHERE id = :id ");
      $this->db->bind(':id', $id);
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }


}
    ?>