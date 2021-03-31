<?php

use baitu\swagger\SwaggerUIAsset;
use yii\helpers\Json;

SwaggerUIAsset::register($this);

/** @var string $configurations */
/** @var string $title */
/** @var array $oauthConfiguration */

?><!-- HTML for static distribution bundle build -->
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="./swagger-ui.css" />
    <link rel="icon" type="image/png" href="./favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./favicon-16x16.png" sizes="16x16" />
    <style>
      html
      {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
      }

      *,
      *:before,
      *:after
      {
        box-sizing: inherit;
      }

      body
      {
        margin:0;
        background: #fafafa;
      }
    </style>
    <?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
<div id="swagger-ui"></div>
<?php $this->endBody() ?>
<script>
    window.onload = function() {
        // Build a system
        window.ui = SwaggerUIBundle(<?= $configurations ?>);
        <?php if ($oauthConfiguration) :?>
        window.ui.initOAuth(<?= Json::encode($oauthConfiguration) ?>);
        <?php endif; ?>
    }
</script>
</body>

</html>
<?php $this->endPage() ?>
