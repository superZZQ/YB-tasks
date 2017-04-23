<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/judge'); ?>

<label for="name">身份选择</label>
   <input type="radio" name="gender" value="1">组长
   <input type="radio" name="gender" value="2">部长
   <input type="radio" name="gender" value="3">老师
   <br><br>
   <input type="submit" name="submit" value="提交"> 

</form>