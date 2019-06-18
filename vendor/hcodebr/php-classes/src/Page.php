<?php
	namespace Hcode;
	use Rain\Tpl;
	class Page{
		public funtion __construct(){
			$config=array(
				"tpl_dir"=>$_SERVER["DOCUMENT_ROOT"]."/views/",
				"cache_dir"=>"cache/",
				"debug"=>true
			);
		}
		public funtion __destruct(){
			
		}

	}

?>