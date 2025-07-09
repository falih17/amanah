<head>
    <!--bootstrap.min.css-->
    <title>Player AMANAH</title>
    <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/bootstrap.min.css">
</head>

<?php
    $data_media = $media->row();

?>
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-bs-toggle="tab" href="#video" role="tab">Bahasa Indonesia</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-bs-toggle="tab" href="#info" role="tab">Bahasa Madura</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content mt-3">
  <div class="tab-pane fade show active" id="video" role="tabpanel">
    <video width="480" height="320" controls>
      <source src="<?php echo base_url('uploads/media/').$data_media->media_file; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>

  <div class="tab-pane fade" id="info" role="tabpanel">
    <video width="480" height="320" controls>
      <source src="<?php echo base_url('uploads/media/').$data_media->media_file; ?>" type="video/mp4">
      Your browser does not support the video tag.
    </video>
  </div>
</div>

<br/>
<br/>
<a class="btn btn-primary btn-sm" href="<?php echo site_url(); ?>"> Kembali </a>
