<?php 

//画面の表示処理を行うクラス
class View{
	public $base_template_filename;
	public $content;
	
	function __construct(){}
	
	function setBaseTemplate($filename){
		//メンバ変数 $base_template_filenameに $filenameを代入
		$this->base_template_filename = $filename;
	}
	
	function render($data){
		//ob_start 出力のバッファリングを有効にする
		ob_start();
		//ob_implicit_flush 自動フラッシュをオンまたはオフにする
		ob_implicit_flush(0);
		//メンバ変数 base_template_filenameを読み込む
		require_once($this->base_template_filename);
		//ob_get_clean() 現在のバッファの内容を取得し、出力バッファを削除する
		$content = ob_get_clean();
		//メンバ変数 contentに$contentを代入
		$this->content = $content;
	}
	function show(){
		echo $this->content;
	}
}

?>