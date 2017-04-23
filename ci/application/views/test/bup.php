<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/bup'); ?>

    <label for="zu">部长评价</label>

    <input type="text" name="bu" value="<?php echo set_value('zu'); ?>" size="200" /><br />
    <input type="submit" name="submit" value="填写完成" />

</form>