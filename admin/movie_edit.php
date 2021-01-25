<?php
$id = $_GET['id'];
$query = $con->query("SELECT * FROM `movies` JOIN grp ON movies.group_id = grp.id JOIN cat on movies.cat_id =cat.id WHERE movies.id = '$id'");
$m = mysqli_fetch_array($query);
?>
<form name="form1" enctype="multipart/form-data" method="POST" action="action.php?act=edit">
<input name="id" value="<?= $m['id'];?>" hidden>
    <div class="form-group">
        <label >Title</label>
        <input type="text" name="title" value="<?= $m['title'];?>" class="form-control" required>
    </div>
    <div class="form-group">
        <label>Category</label>
        <select class="form-control" name="cat_id">
            <option value="<?= $m['cat_id'];?>" selected><?= $m['cat_name'];?></option>
            <?php 
            $cate = $con->query("SELECT * FROM cat");
            while ($c = mysqli_fetch_array($cate)){
            ?>
            <option value="<?= $c['id'];?>"><?= $c['cat_name'];?></option>
            <?php  }?>
        </select>
    </div>
    <div class="form-group">
        <label>Group</label>
        <select class="form-control" name="group_id">
            <option value="<?= $m['group_id'];?>" selected><?= $m['group_name'];?></option>
            <?php
            $grp = $con->query("SELECT * FROM grp");
            while ($c = mysqli_fetch_array($grp)){
                ?>
                <option value="<?= $c['id'];?>"><?= $c['group_name'];?></option>
            <?php  }?>
        </select>
    </div>
    <div class="form-group">
        <label>Short Description</label>
        <textarea class="form-control" name="short_desc"><?= $m['short_desc'];?></textarea>
    </div>
    <div class="form-group">
        <label>Long Description</label>
        <textarea name="long_desc" id="default"><?= $m['long_desc'];?></textarea>
    </div>
    <div class="form-group">
        <label >Thumbnail</label>
        <input name="tupload" type="file" class="form-control">
        <input name="tupload_old" value="<?= $m['thumbnail'];?>" type="text" class="form-control" hidden>
    </div>
    <div class="form-group">
        <label>Video Type</label>
        <input type="radio" name="video_type" value="embed" <?php if($m['video_type']=='1'){echo 'checked';}?> />&nbsp; Embed
        <input type="radio" name="video_type" value="upload" <?php if($m['video_type']=='2'){echo 'checked';}?>/>&nbsp; Uploads
    </div>
    <div class="form-group">
        <label >Embed Video</label>
        <input name="embed" value="<?= $m['video'];?>" class="form-control" required <?php if($m['video_type']=='2'){echo 'disabled';}?>>
    </div>
    <div class="form-group">
        <label>Uploads</label>
        <input name="vupload" type="file" class="form-control" <?php if($m['video_type']=='1'){echo 'disabled';}?>>
        <input name="vupload_old" value="<?= $m['video'];?>" type="text" class="form-control" hidden>
    </div>
    <button type="submit" class="btn btn-primary float-right">Update Movie</button>
</form>