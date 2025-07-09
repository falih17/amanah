<head>
    <!-- bootstrap.min.css -->
    <title>Player AMANAH</title>
    <!-- jQuery (required by Bootstrap 4) -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script src="<?php echo base_url('assets_front'); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets_front'); ?>/assets/css/bootstrap.min.css">

</head>

<?php 
    $data_media = $media->row(); 
?>
<body>
  <div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8"><h2><?php echo $data_media->media_title; ?> </h2></div>
        <div class="col-md-8" id="tabs">
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
                <div class="tab-pane active" id="video" role="tabpanel" aria-labelledby="video-tab">
                    <h3>Video Ini Berbahasa Indonesia</h3>
                    <video width="480" height="320" controls preload="metadata" id="v_indo">
                        <source src="<?php echo base_url('uploads/media/').$data_media->media_file; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>

                <div class="tab-pane" id="info" role="tabpanel" aria-labelledby="info-tab">
                    <h3>Video Ini Berbahasa Madura</h3>
                    <video width="480" height="320" controls preload="metadata" id="v_madura">
                        <source src="<?php echo base_url('uploads/media/').$data_media->media_file2; ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>

            <br/><br/>

            <a class="btn btn-primary btn-sm" href="<?php echo site_url(); ?>">Kembali</a>

          </div>
    </div>
</div>

<script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
</script>

</body>