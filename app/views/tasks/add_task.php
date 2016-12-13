<h1>Add a Task</h1>
<p>List:<strong> <?php echo $list_name; ?></strong></p>


<?php echo validation_errors('<p class="text-error">'); ?>
<?php echo form_open('tasks/add/'.$this->uri->segment(3).''); ?>

<!--Task Name-->
<p>
<?php echo form_label('Task Name:'); ?>
<?php
$data = array(
              'name'        => 'task_name',
              'placeholder ' => 'Enter task name',
              'value'       => set_value('task_name')
            );
?>
<?php echo form_input($data); ?>
</p>

<!-- Task Body-->
<p>
<?php echo form_label('Task Body:'); ?>
<?php
$data = array(
              'name'        => 'task_body',

              'placeholder ' => 'Little details about your task',
              'value'       => set_value('task_body')
            );
?>
<?php echo form_textarea($data); ?>
</p>

<!-- Date-->
<p>
<?php echo form_label('Date:'); ?>
<input type="date" name="due_date" />
</p>

<!--Submit Buttons-->
<?php $data = array("value" => "Add Task",
                    "name" => "submit",
                    "class" => "btn btn-primary"); ?>
<p>
    <?php echo form_submit($data); ?>
</p>
<?php echo form_close(); ?>
