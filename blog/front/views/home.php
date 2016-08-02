


		<div class="content-body">
			<div class="container">
				<div class="row">
					<main class="col-md-8">
						<?php foreach ($article as $v): ?>
						<article class="post post-1">
							<header class="entry-header">
								<h1 class="entry-title">
									<a href="single.html"><?php echo $v['title'] ?></a>
								</h1>
								<div class="entry-meta">
									<span class="post-category"><a href="#"><?php echo $v['mname'] ?></a></span>
			
									<span class="post-date"><a href="#"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00"><?php echo $v['lastupdatetime'] ?></time></a></span>
			
									<span class="post-author"><a href="#"><?php echo $v['auth'] ?></a></span>
			
									<span class="comments-link"><a href="#"><?php echo $v['click'] ?></a></span>
								</div>
							</header>
							<div class="entry-content clearfix">
								<p><?php echo $v['content'] ?></p>
								<div class="read-more cl-effect-14">
									<a href="<?php echo $v['url'] ?>" class="more-link">Continue reading <span class="meta-nav">→</span></a>
								</div>
							</div>
						</article>
						<?php endforeach;?>
					</main>
					<aside class="col-md-4">
						<div class="widget widget-recent-posts">		
							<h3 class="widget-title">Recent Posts</h3>		
							<ul>
								<li>
									<a href="#">Adaptive Vs. Responsive Layouts And Optimal Text Readability</a>
								</li>
								<li>
									<a href="#">Web Design is 95% Typography</a>
								</li>
								<li>
									<a href="#">Paper by FiftyThree</a>
								</li>
							</ul>
						</div>
						<div class="widget widget-archives">		
							<h3 class="widget-title">Archives</h3>		
							<ul>
								<?php foreach ($date as $v):?>
								<li>
									<a href="<?php echo $v['url'] ?>"><?php echo $v['name'] ?></a>
								</li>
								<?php endforeach;?>
							</ul>
						</div>

						<div class="widget widget-category">		
							<h3 class="widget-title">Category</h3>		
							<ul>
								<?php foreach ($module as $value): ?>
								<li>
									<a href="<?php echo $value['url'] ?>"><?php echo $value['name'] ?></a>
								</li>
								<?php endforeach;?>
							</ul>
						</div>
					</aside>
				</div>
			</div>
		</div>



