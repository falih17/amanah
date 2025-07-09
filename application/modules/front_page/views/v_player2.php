<head>
    <!-- bootstrap.min.css -->
    <title>Player AMANAH</title>
    <!-- jQuery (required by Bootstrap 4) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?php echo base_url('assets_front'); ?>/assets/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/bootstrap.min.css">

</head>

<?php 
    $data_media = $media->row(); 
?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="video-tab" data-toggle="tab" href="#video" role="tab" aria-controls="video" aria-selected="true">Bahasa Indonesia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Bahasa Madura</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content mt-3">
    <div class="tab-pane fade show active" id="video" role="tabpanel" aria-labelledby="video-tab">
        <video width="480" height="320" controls>
            <source src="<?php echo base_url('uploads/media/').$data_media->media_file; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>

    <div class="tab-pane fade" id="info" role="tabpanel" aria-labelledby="info-tab">
        <video width="480" height="320" controls>
            <source src="<?php echo base_url('uploads/media/').$data_media->media_file2; ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<br/><br/>

<a class="btn btn-primary btn-sm" href="<?php echo site_url(); ?>">Kembali</a>
