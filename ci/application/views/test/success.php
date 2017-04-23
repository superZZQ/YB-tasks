<?php
echo '<h2>'.$news_item['name'].'</h2>';
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

<a href="<?php echo site_url('test/change/'.$news_item['id']);?>">修改</a>
