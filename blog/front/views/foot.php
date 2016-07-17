<div class="overlay overlay-hugeinc">
    <button type="button" class="overlay-close"><span class="ion-ios-close-empty"></span></button>
    <nav>
        <ul>
            <li><?php echo echo_url('FrontIndex','index');?></li>
            <li><?php echo echo_url('FrontIndex','full_width');?></li>
            <li><?php echo echo_url('FrontIndex','about');?></li>
            <li><?php echo echo_url('FrontIndex','contact');?></li>
        </ul>
    </nav>
</div>

<footer id="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="copyright">&copy; 2016 Felix <a href="" >这里啥都没有,只有<?php echo $ip; ?>位访客</a></p>
            </div>
        </div>
    </div>
</footer>

</body>
<script src="<?php echo $static_url;?>js/script.js"></script>

</html>