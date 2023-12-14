<?php
 class Upload{
    private $p;
    public function __construct($database,$host,$root,$password)
    {
        try{
            // $this->p を初期化
        $this->p= new PDO('mysql:'.$database.';host'.$host,$root,$password);
        }catch(PDOException $th){
        echo "接続に問題が発生しました！".$th->getMessage();
        } catch(Exception $error2){
        echo "一般的なエラーが発生しました...！";
        }
    }
 }

?>