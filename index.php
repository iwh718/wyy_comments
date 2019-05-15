<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>倾听文字的声音</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="res/css/index.css">
</head>
<body>
<div class="btn">网易云每日歌曲热评
    <div class="btn2"></div>
</div>

<p>倾听文字的声音 | <?php  echo  Date("Y/m/d")?></p>
<ul id='timeline'>
        <?php
        require('./wyy.php');
            $g = new GetWangYiYunInfo();
            $res =  $g->returnData();

        foreach ($res as $row) {
            echo "<li class='work'>";
            echo "<p>歌曲名:{$row['name']}</p>";
            echo "<p>By:{$row['user']}</p>";
            echo " <div class=\"relative\">";
            echo "    <span class='date'>日期：{$row['time']}</span>";
            echo " <span class='circle'></span>";
            echo " </div>";
            echo "<div class='content'>";
            echo "  <p>{$row['comments']}";
            echo "</p>";
            //点赞人数
          //  echo "<p> <span class='fa fa-thumbs-up'/>{$row['like']} </p>";
            echo " </div>   </li>";
        }
        ?>
</ul>
<footer><p>数据来自：网易云音乐 | IWH  @API来自Git</p></footer>
</body>
</html>