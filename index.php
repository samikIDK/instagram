<?php
$posts = [
    [
        "user" => [
            "username" => "samohyl_s",
            "profile_pic" => "https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/z/u/Zugpsitze_mountain.jpg?crop=0%2C176%2C3008%2C1654&wid=1300&hei=715&scl=2.313846153846154",
        ],
        "date" => "10.března",
        "img" => "https://natureconservancy-h.assetsadobe.com/is/image/content/dam/tnc/nature/en/photos/w/o/WOPA160517_D056-resized.jpg?crop=864%2C0%2C1728%2C2304&wid=600&hei=800&scl=2.88",
        "icons" => "♡  💬  ⌲",
        "likes" => "10 000 To se mi líbí",
        "caption" => "Another hike",
        "comments" => [
            ["author" => "adrian_kozacek", "content" => "Super!!"],
            ["author" => "honza🥱🥱", "content" => "Dobryy!!"],
        ]
    ],
    [
        "user" => [
            "username" => "adrian_kozacek",
            "profile_pic" => "https://i.pinimg.com/236x/60/ef/be/60efbe9d4eaabad6613a97e798ebff87.jpg",
        ],
        "date" => "67.března",
        "img" => "https://thumbs.dreamstime.com/b/man-scoring-goal-soccer-match-rear-view-young-33901151.jpg",
        "icons" => "♡  💬  ⌲",
        "likes" => "1 To se mi líbi",
        "caption" => "Dneska vyhra!!",
        "comments" => [
            ["author" => "honza🥱🥱", "content" => "legit!!"],
            ["author" => "samohyl_s", "content" => "broo!"],
        ]
    ],
    [
        "user" => [
            "username" => "honza🥱🥱",
            "profile_pic" => "https://www.makingofchamps.com/wp-content/uploads/2022/11/images-17.jpeg",
        ],
        "date" => "100.března",
        "img" => "https://upload.wikimedia.org/wikipedia/commons/3/33/Usain_Bolt_2012_Olympics_1.jpg",
        "icons" => "♡  💬  ⌲",
        "likes" => "3 To se mi líbí",
        "caption" => "To jsem já!!",
        "comments" => [
            ["author" => "samohyl_s", "content" => "cool!!"],
            ["author" => "adrian_kozacek", "content" => "damn!"],
        ]
    ],
];
$menu = [
    "logo" => "logo.png",
    "home" =>[
        "img-home" => ""
    ]
]
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="posts">
    <?php foreach ($posts as $post) { ?>
        <div class="post-up">
            <img src="<?= $post['user']['profile_pic'] ?>" alt="profile picture">
            <div>
                <p class="username"><?= $post['user']['username'] ?></p>
                <p class="date"><?= $post['date'] ?></p>
            </div>
        </div>
        <img src="<?=$post['img']?>" class="main-img" alt="main img">
        <div class="post-down">
            <p class="icons"><?=$post['icons'] ?></p>
            <p class="likes"><?=$post['likes'] ?></p>
            <p class="captions"><?=$post['caption'] ?></p>
            <div class="comments">
                <?php foreach ($post['comments'] as $comment) { ?>
                    <div class="comment">
                        <span class="comment-author"><?=$comment['author']?>:</span>
                        <?=$comment['content']?>
                    </div>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>

</body>
</html>

