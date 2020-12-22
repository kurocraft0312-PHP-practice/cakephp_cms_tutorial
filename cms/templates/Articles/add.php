<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakePHPの練習3</title>
</head>
<body>
    <!-- File: templates/Articles/add.php -->
    <h1>記事の追加</h1>
    <?php
        echo $this->Form->create($article);
        // 今はユーザーを直接記述
        echo $this->Form->control('user_id', ['type' => 'hidden', 'value' => 1]);
        echo $this->Form->control('title');
        echo $this->Form->control('body', ['rows' => '3']);
        echo $this->Form->control('tags._ids', ['options' => $tags]);
        echo $this->Form->button(__('Save Article'));
        echo $this->Form->end();
    ?>
</body>
</html>
