<?php
if(!defined('__KIMS__')) exit;

//***********************************************************************************
// 여기에 이 위젯에서 사용할 변수들을 정의합니다.
// 변수 작성법은 매뉴얼을 참고하세요.
//***********************************************************************************

$d['widget']['dom'] = array(

	'card-default' => array(
		'미디어셋 배너 점보트론',  //위젯명
		array(
			array('title','input','타이틀',''),
			array('category','mediasetcat','미디어셋 카테고리',''),
			array('limit','select','출력 항목수','1개=1,2개=2,3개=3,4개=4,5개=5,6개=6,7개=7,8개=8,9개=9,10개=10,11개=11,12개=12','4'),
			array('autoplay','select','자동실행','2초=2000,3초=3000,4초=4000,5초=5000,안함=false','false'),
			array('linktarget','select','링크타켓','내부=_self,새창=_blank','_self'),
		),
	),
);

?>
