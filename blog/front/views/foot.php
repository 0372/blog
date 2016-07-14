<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close"><span class="ion-ios-close-empty"></span></button>
    <nav>
        <ul>
            <li><?php echo anchor('FrontIndex/index','Home');?></li>
            <li><?php echo anchor('FrontIndex/full_width','Blog');?></li>
            <li><?php echo anchor('FrontIndex/about','About');?></li>
            <li><?php echo anchor('FrontIndex/contact','Contact');?></li>
        </ul>
    </nav>
</div>

<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">&copy; 2016 Felix <a href="" >这里啥都没有,已有<?php echo $ip; ?>位访客</a></p>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="<?php echo $static_url;?>js/script.js"></script>

</html>