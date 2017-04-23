<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/admit'); ?>

<label for="name">请输入学号</label>

    <input type="text" name="stdnumber" value="<?php echo set_value('stdnumber'); ?>" size="15" /><br />
   <br><br>
   <input type="submit" name="submit" value="登录"> 

</form>