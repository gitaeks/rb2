<footer class="container my-5 border-top py-4">

	<div class="d-flex justify-content-between">
		<span class="text-muted">© <?php echo $d['layout']['company_name']?$d['layout']['company_name']:'company' ?> <?php echo $date['year']?></span>

		<ul class="list-inline">
			<li class="list-inline-item">
				<a href="<?php echo RW('mod=policy')?>" class="muted-link">이용약관</a>
			</li>
			<li class="list-inline-item">
				<a href="<?php echo RW('mod=privacy')?>" class="muted-link">개인정보취급방침</a>
			</li>

			<?php if ($my['uid']): ?>
			<li class="list-inline-item">
				<a href="#" data-act="logout" class="muted-link" title="">
					로그아웃
				</a>
			</li>
			<?php else: ?>
			<li class="list-inline-item">
				<a href="<?php echo RW('mod=login')?>" class="muted-link" title="페이지형 로그인">
					로그인<span class="badge badge-pill badge-light align-middle">P</span>
				</a>
			</li>
			<li class="list-inline-item">
				<a href="#modal-login" data-toggle="modal" class="muted-link" title="모달형 로그인">
					로그인<span class="badge badge-pill badge-light align-middle">M</span>
				</a>
			</li>
			<?php endif; ?>

		</ul>
	</div>

	<!-- 스탠다드 라이센스 없이는 아래 킴스큐 로고를 삭제할 수 없습니다. -->
	<div class="text-center text-muted small">
		powered by <a href="https://kimsq.com" target="_blank" class="text-reset ml-1"><i class="kf kf-bi-01 text-reset"></i></a>
	</div>

</footer>
