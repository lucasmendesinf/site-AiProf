<?php
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');
$basePath = $basePath === '/' ? '' : $basePath;
$encodedBase = trim($basePath, '/') === '' ? '' : '/' . implode('/', array_map('rawurlencode', explode('/', trim($basePath, '/'))));
$base = $scheme . '://' . $host . $encodedBase;
header('Content-Type: application/xml; charset=UTF-8');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url><loc><?= htmlspecialchars($base . '/', ENT_XML1) ?></loc></url>
  <url><loc><?= htmlspecialchars($base . '/cadastro/', ENT_XML1) ?></loc></url>
  <url><loc><?= htmlspecialchars($base . '/login/', ENT_XML1) ?></loc></url>
</urlset>
