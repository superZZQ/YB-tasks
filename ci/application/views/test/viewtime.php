<?php foreach ($news_item as $news ):?>

    <h3><?php 
    echo $news['name']; 
    ?></h3>
    <div class="main">
        <?php  
        /*<p><a href="<?php echo base_url();?>test/view/$news_item['yb_userid'];">
        查看</a></p> */
        		
        		echo $news['time'];
        		echo '      '; 

    //site_url传参问题


   ?>      
    </div>

    <p><a href="<?php echo site_url('test/view/'.$news['id']); ?>">查看</a></p>
    <p><a href="<?php echo site_url('test/delete/'.$news['id']); ?>">查看</a></p>
<?php endforeach; ?>