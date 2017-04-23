<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['name'];
    ?></h3>
    <div class="main">
        <?php 
    //site_url传参问题
        echo $news_item['department'];
	echo "<br>";
	echo $news_item['staff'];
	echo "<br>";
	echo $news_item['work'];
	echo "<br>";
	echo $news_item['ow'];
	echo "<br>";
	echo $news_item['app'];
	echo "<br>";
	echo $news_item['oplan'];
	echo "<br>";
	echo $news_item['plan'];
	echo "<br>";?>
	    </div>
    
     <p><a href="<?php echo site_url('test/viewtime/'.$news_item['id']); ?>">评价</a></p>


<?php endforeach; ?>