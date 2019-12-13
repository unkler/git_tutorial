<?php
require_once('ReaderFactory.class.php');
?>
<html lang="ja">
<head>
<title>Result</title>
</head>
<body>
<?php
    /**
     * 外部からの入力ファイルです
     */
    $filename = 'Music.xml'; // csvファイルでもOK

    $factory = new ReaderFactory();
    $data = $factory->create($filename);
    $data->read();
    $data->display();
?>
</body>
</html>
