<h2><?php echo '$title'; ?></h2>
<?php echo 'validation_errors()'; ?>
<?echo form_open('news/create');?>
<table>
    <tr>
        <td><label for="title">Title</label></td>
        <td><input name="title" size="50" /></td>
    </tr>
    <tr>
        <td><label for="text">Text</label></td>
        <td><textarea name="text" row="10" column="40"></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="submit" value="Create news item"/></td>
    </tr>
</table>
</form>

