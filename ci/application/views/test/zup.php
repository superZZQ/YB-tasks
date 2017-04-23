<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/create'); ?>

    <label for="zu">组长评价</label>

    <input type="text" name="zu" value="<?php echo set_value('zu'); ?>" size="10" /><br />
    <input type="submit" name="submit" value="填写完成" />

</form>