<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('test/create'); ?>

    <label for="name">名字</label>

    <input type="text" name="name" value="<?php echo set_value('name'); ?>" size="10" /><br />

    <label for="department">部门</label>

    <input type="text" name="department" value="<?php echo set_value('department'); ?>" size="10" /><br />
    <label for="staff">职位</label>

    <input type="text" name="staff" value="<?php echo set_value('staff'); ?>" size="10" /><br />
    <label for="work">工作</label>

    <input type="text" name="work" value="<?php echo set_value('work'); ?>" size="300" /><br />
    <label for="ow">线上</label>

    <input type="text" name="ow" value="<?php echo set_value('ow'); ?>" size="200" /><br />
    <label for="app">APP</label>

    <input type="text" name="app" value="<?php echo set_value('app'); ?>" size="200" /><br />
    <label for="oplan">计划外</label>

    <input type="text" name="oplan" value="<?php echo set_value('oplan'); ?>" size="200" /><br />
    <label for="plan">计划</label>

    <input type="text" name="plan" value="<?php echo set_value('plan'); ?>" size="200" /><br />
    

    <input type="submit" name="submit" value="填写完成" />