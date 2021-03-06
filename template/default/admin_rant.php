<?php template('admin_head'); ?>

<?php

if(isset($preview) && $preview) {
    ?><div class="preview_container"><?php
    template('rant', array(
        'rantid' => $rantid,
        'title' => $title,
        'pub_date' => $pub_date,
        'text' => $text,
    ));
    ?></div><?php
}

?>

<form action="" method="POST" enctype="multipart/form-data">
    <?php echo authtoken_input(); ?>
    <?php if(isset($rantid) && $rantid && $rantid != 'new') { ?>
        <input name="rantid" value=<?php echo $rantid; ?> type="hidden" />
    <?php } ?>
    <label>Title</label>
    <input name="title" value="<?php echo isset($title) ? $title : ''; ?>" />

    <label>Date</label>
    <input name="pub_date" class="datetime" value="<?php echo date('Y-m-d H:i:s', isset($pub_date) ? $pub_date : time()); ?>" />
    <small>YYYY-MM-DD HH:MM:SS. Rants dated in the future will not be published until that time.</small>

    <label>Text</label>
    <textarea name="text" rows="8" cols="40"><?php echo isset($text) ? htmlentities($text) : ''; ?></textarea>

    <div class="submit-block">
        <button name="preview" class="preview" value="1">Preview</button>
        <input type="submit" name="submit" value="Save" />
        <?php if(isset($rantid) && $rantid && $rantid != 'new') { ?>
        <button name="delete" class="delete" value="1">Delete</button>
        <?php } ?>
    </div>
</form>

<?php template('admin_foot'); ?>
