<h2><?php echo $title; ?></h2>

<?php foreach ($news as $news_item): ?>

    <h3><?php echo $news_item['name'];
    ?></h3>
    <div class="main">
        <?php 
    //site_url传参问题
        $a=$news_item['name'];
        echo $news_item['stdposition'];
        //echo "<td><a> href=site_url('test/viewtime/'.$news_item['id']); > $news_item['name'];
    //</a></td>";
        ?>
       
    </div>
    
     <p><a href="<?php echo site_url('test/viewtime/'.$news_item['id']); ?>"><?php echo $news_item['name'];
    ?></a></p>


<?php endforeach; ?>