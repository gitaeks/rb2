<?php
if(!defined('__KIMS__')) exit;

$d['widget']['dom'] = array(

	'gallery-default' => array(
		'나의 프로필 카드',  //위젯명
		array(
			array('title','input','타이틀','인기 포스트'),
			array('subtitle','input','보조 타이틀',''),
			array('sort','select','정렬기준','조회순=hit,좋아요순=likes,댓글순=comment','hit'),
			array('term','select','출력기간','최근 1주=-1 week,최근 2주=-2 week,최근 3주=-3 week,최근 1달=-4 week'),
			array('margin_top','select','상단여백','적용=true,미적용=false','true'),
			array('show_header','select','헤더출력','출력=show,숨김=hide','show'),
			array('vtype','select','보기타입','모달형=modal,페이지형=page','modal'),
			array('author','select','등록자 표시','표시함=true,표시안함=false','false'),
			array('duration','select','동영상 표시','재생시간 표시=show,재생버튼 표시=hide','hide'),
			array('ranking','select','강조 랭킹표시','강조안함=false,전체강조=1000,1개=1,2개=2,3개=3,4개=4,5개=5,10개=10','3'),
			array('limit','select','출력 항목수','2개=2,4개=4,6개=6,8개=8,10개=10,12개=12','4'),
		),
	),
);

?>
