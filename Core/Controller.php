<?php
class Controller { //extract() trasforma en variaveis os dados dos array.
 
	public function loadView($viewName, $viewData = array()) {
		extract($viewData); // carega os dados controller para views
		require 'Views/'.$viewName.'.php';
	}

	public function loadTemplate($viewName, $viewData = array()) {
		require 'Views/template.php'; // leva template para todas as paginas 
	}

	public function loadViewInTemplate($viewName, $viewData = array()) {
		extract($viewData);// leva o conteudo a toda a pagina ex;css,js
		require 'Views/'.$viewName.'.php';
	}

}