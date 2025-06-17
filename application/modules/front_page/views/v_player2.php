
<?php
    $data_media = $media->row();

?>
<video width="480" height="320" controls>
  <source src="<?php echo base_url('uploads/media/').$data_media->media_file; ?>" type="video/mp4">
Your browser does not support the video tag.
</video>