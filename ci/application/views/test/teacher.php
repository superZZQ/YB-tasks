<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/teacher'); ?>

    <label for="zu">老师评价</label>

    <input type="text" name="teacher" value="<?php echo set_value('teacher'); ?>" size="200" /><br />
    <input type="submit" name="submit" value="填写完成" />

</form>