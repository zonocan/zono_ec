<?php
require_once(ROOT_PATH .'/Models/Db.php');

class User extends Db {
    private $table = 'info';
    public function __construct($dbh = null){
    parent::__construct($dbh);
  }


 //userテーブルからすべてデータを取得

public function findALl($page = 0):Array {
  $sql = 'SELECT * FROM contacts';
  $sql .= ' LIMIT 20 OFFSET '.(20 * $page);
  $sth = $this->dbh->prepare($sql);
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}


public function findById($id = 0):Array{
  //var_dump($id);
  $sql = 'SELECT * FROM contacts'.$this->table;
  $sql .=' WHERE id = :id';
  $sth = $this->dbh->prepare($sql);
  $sth->bindParam(':id', $id, PDO::PARAM_INT);
  $sth->execute();
  $result = $sth->fetchALL(PDO::FETCH_ASSOC);
  return $result;
}


public function countAll():Int {
  $sql = 'SELECT count(*) as count FROM contacts';
  $sth =$this->dbh->prepare($sql);
  $sth->execute();
  $count = $sth->fetchColumn();
  return $count;
}


//個人情報に情報の転送
public function all_insert($user):Array{
  $sql='INSERT INTO contacts(name,kana,tel,email,body)';
  $sql.=' VALUES(:name,:kana,:tel,:email,:body)';
  $sth = $this->dbh->prepare($sql);
  $sth->bindParam(':name', $user[0], PDO::PARAM_STR);
  $sth->bindParam(':kana', $user[1], PDO::PARAM_STR);
  $sth->bindParam(':tel', $user[2], PDO::PARAM_INT);
  $sth->bindParam(':email', $user[3], PDO::PARAM_STR);
  $sth->bindParam(':body', $user[4], PDO::PARAM_STR);
  $sth ->execute();
  $result = $sth->fetchALL(PDO::FETCH_ASSOC);
  return $result;
}


//データを消した時（論理削除）
public function delFlg($id=0){
  $sql = 'DELETE FROM contacts WHERE id = :id';
  $sth = $this->dbh->prepare($sql);
  $sth->bindParam(':id', $id, PDO::PARAM_INT);
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

//論理削除じゃないやつ
public function all_delFlg(){
  $sql = 'DELETE FROM Fathions_tmp';
  $sth = $this->dbh->prepare($sql);
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

//データの更新をする時
public function update($id,$user){
  $sql = 'UPDATE contacts';
  $sql .=' SET name=:name,kana=:kana,tel=:tel,email=:email,body=:body';
  $sql .=' WHERE id = :id';
  $sth = $this->dbh->prepare($sql);
  $sth->bindParam(':id',$id,PDO::PARAM_INT);
  $sth->bindParam(':name', $user["name"], PDO::PARAM_STR);
  $sth->bindParam(':kana', $user["kana"], PDO::PARAM_STR);
  $sth->bindParam(':tel', $user["tel"], PDO::PARAM_INT);
  $sth->bindParam(':email', $user["email"], PDO::PARAM_STR);
  $sth->bindParam(':body', $user["body"], PDO::PARAM_STR);
  $sth->execute();
  $result = $sth->fetchALL(PDO::FETCH_ASSOC);
  return $result;
}

//log_in機能
public function log_in():Array{
  $sql='SELECT * FROM user WHERE email = email';
  $sth = $this->dbh->prepare($sql);
  $sth->execute();
  $result = $sth->fetchAll(PDO::FETCH_ASSOC);
  return $result;
}

}

?>
