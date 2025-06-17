<head>
    <!--bootstrap.min.css-->
    <title>Player AMANAH</title>
    <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/bootstrap.min.css">
</head>

<?php
    $data_media = $media->row();

?>
<video width="480" height="320" controls>
  <source src="<?php echo base_url('uploads/media/').$data_media->media_file; ?>" type="video/mp4">
Your browser does not support the video tag.
</video>

<a class="btn btn-primary btn-sm" href="<?php echo site_url(); ?>"> Kembali </a>
