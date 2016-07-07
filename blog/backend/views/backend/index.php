<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <!--    <script src=""></script>-->
    <?php foreach($css as $value): ?>
    <link rel="stylesheet" href="<?php echo $base_url.$value; ?>" type="text/css">
    <?php endforeach;?>
    <title>Felix Blog</title>
</head>
<body>
<div class="container">
    <div class="container-login">
        <form nethod="post">
            <div >
                <?php echo anchor('Index/index','click here'); ?>
            </div>
            <div class="form-group">
                <label class="form-label">Account:</label>
                <input type="text" name="account">
            </div>

            <div class="form-group">
                <label class="form-label">Password:</label>
                <input type="password" name="password">
            </div>
            <div class="form-submit">
                <input type="submit" value="Submit">
                <a href=""><button>Front Page</button></a>
            </div>
        </form>

    </div>

</div>
</body>