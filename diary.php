<?php include './header.php'; ?>
<title>装修日记</title>
<link rel="stylesheet" type="text/css" href="css/diary.css">
	<div class="content">
		<ul class="diary-tabs clearfix">
			<li><a href="">装修日记</a></li>
			<li><a href="">小兔精选</a></li>
			<li><a href="">业主</a></li>
			<li><a href="">质检验收</a></li>
		</ul>
		<div class="tab-container">
			<div class="tab-content">
				<?php for($i = 0;$i<10;$i++){ ?>
				<div class="item clearfix">
					<div class="user-info">
						<img src="http://pic.to8to.com/user/57/headphoto_6494157_120.jpg?1463486055" width="60" height="60" alt="二小姐"/>
						<p>二小姐</p>
					</div>
					<div class="diary-content">
						<h3>
						  <a href="">「美式乡村」寻一方简素，觅一隅清幽 <span>[ 8篇 ]</span></a>
						</h3>
						<p>D35天。 骨子里住着一个小妖精，就是喜欢这种花里胡哨的撞色😊 铝合金框架安装完毕，东阳台瓷砖ok，卫生间48小时闭水试验结束，物业检查楼下无渗水，嗯，卫生间开始贴砖啦。</p>
						<div>
							<img src="http://pic.to8to.com/live/day_160609/20160609_3a2855fd3df5f4978ea1hbHO1RZIZE3j_180x180M.jpg"/>
							<img src="http://pic.to8to.com/live/day_160609/20160609_0a78b0c588062221b0aarp67g1EEXQdV_180x180M.jpg"/>
						</div>	
					</div>
				</div>
				<?php } ?>
			</div>
			<div class="tab-content"></div>
			<div class="tab-content"></div>
		</div>	
	</div>
	<?php include './footer.php'; ?>