</div>
<div class="navmenu">
    <ul>
        <li><a href="<?php echo url('archive/');?>">Archive</a></li>
        <li><a href="<?php echo url('chapters/');?>">Chapters</a></li>
        <li><a href="<?php echo url('rants/');?>">Rants</a></li>
    </ul>
</div>
<div class="foot">
    <a href="http://github.com/kemayo/simplecomic/">simplecomic</a>
    |
    generated in <?php echo number_format($page->elapsed(), 4); ?>s
</div>
<?php template('frame_bottom'); ?>