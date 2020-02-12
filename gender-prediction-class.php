<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class genderPrediction{

	private $mother_age;
	private $perception_month;

	function __construct($age, $month){
		$this->setMotherAge($age);
		$this->setPerceptionMonth($month);

	}

	function setMotherAge($age){
		$this->mother_age	=	$age;
	}

	function setPerceptionMonth($month){
		$this->perception_month	=	$month;
	}

	function matrix(){
		$matrix['january']	=	array('G','B','G','B','G','B','B','G','B','G','B','G','B','B','B','G','B','B','G','B','G','B','G','B','G','B','B','G');
		$matrix['february']	=	array('B','G','B','G','B','B','G','B','G','B','G','B','G','G','G','B','G','B','B','G','B','G','B','G','B','G','B','B');
		$matrix['march']		=	array('G','B','G','G','B','G','B','B','B','G','B','G','G','B','B','B','B','G','B','B','G','B','G','B','G','B','G','B');
		$matrix['april']		=	array('B','G','B','G','G','B','B','G','G','B','G','G','G','G','G','B','G','B','G','B','B','B','B','G','B','G','B','G');
		$matrix['may']		=	array('B','G','B','G','B','B','G','G','G','G','G','B','G','G','G','G','G','G','B','G','B','B','G','B','G','B','B','G');
		$matrix['june']		=	array('B','B','B','G','G','G','B','B','B','G','G','B','G','G','G','G','G','G','G','B','G','G','B','G','B','G','B','G');
		$matrix['july']		=	array('B','B','B','G','G','B','B','G','G','B','B','B','G','G','G','G','G','G','G','G','B','G','B','B','G','B','G','B');
		$matrix['august']	=	array('B','B','B','G','B','G','G','B','B','B','B','B','G','G','G','B','G','B','G','B','G','B','G','B','B','G','B','G');
		$matrix['september']=	array('B','B','B','G','G','B','G','B','G','B','B','B','G','G','G','G','G','G','B','G','B','G','B','G','B','B','G','B');
		$matrix['october']	=	array('B','B','G','G','G','B','G','B','G','B','B','G','G','G','G','G','G','G','B','B','G','B','G','B','G','B','B','G');
		$matrix['november']	=	array('B','G','B','G','G','B','G','B','G','G','G','G','B','G','G','G','B','B','B','G','B','G','B','G','B','B','G','B');
		$matrix['december']	=	array('B','G','B','G','G','G','G','B','G','B','G','G','B','B','B','B','B','B','B','B','G','G','G','B','G','B','G','B');

		return $matrix;

	}

	function predictGender(){
		$matrix_data	=	$this->matrix();
		$prediction		=	 $matrix_data[$this->perception_month][$this->mother_age-18];
		if($prediction=='B'){
			return 'You will have a baby boy';
		}else{
			return 'You will have a baby girl';
		}

	}

}




?>
