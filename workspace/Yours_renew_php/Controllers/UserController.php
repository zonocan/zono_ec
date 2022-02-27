<?php
require_once(ROOT_PATH .'/Models/User.php'); //User.phpへ

class UserController{//Userに関してのclass関数ー＞viewで呼び起こす時に使う
  private $User; //Fathionモデル
  private $request; //リクエストパラメーター(GET,POST)

  public function __construct() {
    //__construct関数を呼び出している

    //リクエストパラメーターの取得
    $this->request['get'] = $_GET;//ここでGetの受け渡しの定義
    $this->request['post'] = $_POST;//ここでPostの受け渡しを定義

    $this->User = new User();  //モデルオブジェクトの作成
}


  public function index() {//index関数をfunctionで呼び出している
    $page = 0;
    if (isset($this->request['get']['page'])) {
      $page = $this->request['get']['page'];
    }
    $info = $this->User->findAll($page); //findALlはデータの中の選手全員
    $info_count = $this->User->countAll();
    $params = [
      'info' => $info,
      'pages' => $info_count / 20
    ];
    return $params;
  }

  public function view() {
    if(empty($this->request['get']['id'])){
      echo '指定のパラメーターが不正です。このページを表示できません。';
      exit;
    }

    $user = $this->User->findById($this->request['get']['id']); //findByIdは設定（ボタンを押した選手を引き出す時）
    $params =[
      'info' => $user
    ];
    return $params;
  }


  //論理削除した時
   public function Del_flg(){
    $del_flg = $this->User->delFlg($this->request['get']['id']);
    $params=[
      'cafe'=>$del_flg
    ];
    return $params;
  }

   //論理削除でないとき
   public function ALL_delFlg(){
     $all_delFlg = $this->Fathion->all_delFlg($this->request['get']['id']);
   }

  //Fathions_tmpへの情報の転送
   public function ALL_insert(){
     $insert = $this->User->all_insert($this->request['post']);
   }

 //編集した時
  public function Update(){
    //var_dump($_POST);
    //var_dump($_GET);
   $user = $this->User->update($this->request['get']['id'],$this->request['post']);
   $params=[
     'user'=>$user
   ];
   return $params;
 }

}


?>
