<!DOCTYPE html>
<html lang="ko">
<head>
<?php include $g['dir_layout'].'/_includes/_import.head.php' ?>
<!-- snap 서랍형 사이드메뉴 -->
<?php getImport('snap','rc-snap','1.9.3','css')?>
<?php getImport('snap','rc-snap','1.9.3','js')?>

</head>
<body class="rb-layout-blank-drawer">

	<div data-role="edge_android">
		<img src="<?php echo $g['img_core']?>/androidscroll.png" id="topEdge">
		<img src="<?php echo $g['img_core']?>/androidscroll.png" id="bottomEdge">
	</div>

	<div class="page center" id="page-main">
		<div class="snap-drawers">
			<div class="snap-drawer snap-drawer-left" id="drawer-left">
				<?php include $g['dir_layout'].'/_includes/drawer-left.php' ?>
			</div>
			<div class="snap-drawer snap-drawer-right bg-faded" id="drawer-right">
				<?php include $g['dir_layout'].'/_includes/drawer-right.php' ?>
			</div>
		</div>
		<div class="snap-content" data-extension="drawer" data-snap-ignore="true">
			<?php include __KIMS_CONTENT__ ?>
		</div><!-- /.snap-content -->
	</div><!-- /.page -->

	<?php include $g['dir_layout'].'/_includes/component.php' ?>
	<?php include $g['dir_layout'].'/_includes/_import.foot.php' ?>
	<script>
		$(function() {
			RC_initDrawer({
				disable : 'right'
			});  // 드로어 플러그인 초기화
		});
	</script>

</body>
</html>
