<?php
echo '<html><head>
  <link rel="stylesheet" href="threed.css">
</head>
<body class="is-embedded">

  <div class="js-render-shell render-shell">
    <!-- render bar -->
    <div class="js-render-bar render-bar render-bar-with-modes">
      <ul class="js-view-modes render-view-modes">
        <li data-mode="wireframe" class="js-view-mode-item">Wireframe</li>
        <li data-mode="normal" class="js-view-mode-item">Surface Angle</li>
        <li data-mode="solid" class="js-view-mode-item active">Solid</li>
      </ul>
      <span class="render-message" style="display:none;"><a href="/uploads/project/threed/"'.$_REQUEST['stl_image'].'" target="_parent">models</a> rendered with &#10084; by <a href="[comapny website link]" target="_parent">[company name here]</a></span>
    </div>
    <!-- /render bar -->

    <!-- render info -->
    <div class="render-info">
      <div class="js-viewer-health render-health">
        <span class="symbol">&#8854;</span>
        <span class="js-message message"></span>
      </div>
    </div>
    <!-- /render info -->

    <!-- render viewport -->
    <div id="solid-viewer" class="render-viewport" data-file="/uploads/project/threed/"'.$_REQUEST['stl_image'].'"></div>
    <!-- /render viewport -->
  </div>

  <script src="threed.js"></script>
</body>
</html>';