<?php
namespace Core;

class Controller 
{
	private function getviewName($viewName) 
	{
		if(is_string($viewName)) 
		{
			return $this->viewName = $viewName;
		}
		else
		{
			return $this->viewName = 'erro';		
		}
	}

	private function getviewData($viewData) 
	{
		if(is_array($viewData)) 
		{
			return $this->viewData = $viewData;
		}
		else
		{
			return $this->viewData = array();
		}
	}

	public function setLoadView($viewName, $viewData) 
	{
		$this->getviewName($viewName);
		$this->getviewData($viewData);

		extract($this->viewData);
		require 'Views/'.$this->viewName.'.php';
	}

	public function setLoadTemplate($viewName, $viewData) 
	{
		$this->getviewName($viewName);
		$this->getviewData($viewData);

		require 'Views/template.php';
	}

	public function setLoadViewInTemplate($viewName, $viewData) 
	{
		$this->getviewName($viewName);
		$this->getviewData($viewData);

		extract($this->viewData);
		require 'Views/'.$this->viewName.'.php';
	}
}