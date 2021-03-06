<?php
/*
available variables:
 $page: array of info about the page
 $chapters: array of info about the chapters
*/
template('chapter_head');
?>
<div class="chapters">
    <h3>Chapters</h3>
    <?php if($chapters) { ?>
    <ul>
        <?php foreach($chapters as $chapter) { ?>
        <li><a href="<?php echo url('chapter/' . $chapter['slug']); ?>"><?php echo $chapter['title'] ?></a></li>
        <?php } ?>
    </ul>
    <?php } else { ?>
    <p>No Chapters</p>
    <?php } ?>
</div>
<?php
template('chapter_foot');
?>