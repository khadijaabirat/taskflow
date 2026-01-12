<?php

abstract class BaseRepository {
    protected PDO $pdo;
    public function __construct(PDO $pdo){
    $this->pdo=conection::getInstance();
    }
 public function find($team_members){
    $strm=$this->pdo=>prepare("select * from tasks where id=:id ");
    $row=$strm=>excute(":id"=>$team_members->getId());
    if($row->fetch())
        {
    return new TeamMember($row['id'],$row['username'],$row['password_hash'],$row['team_id'],$row['created_at']);
        }
 }
 public function findAll(){
    $strm=$this->pdo=>query("select * from tasks");
    $array=[];
        while($row->fetch())
        {
    $array[]=new TeamMember($row['id'],$row['username'],$row['password_hash'],$row['team_id'],$row['created_at']);
        }
 }
}