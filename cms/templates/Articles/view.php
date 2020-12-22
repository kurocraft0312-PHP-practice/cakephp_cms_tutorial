<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakePHPの練習2</title>
</head>
<body>
    <h1><?= h($article->title) ?></h1>
    <p><?= h($article->body) ?></p>
    <p><b>Tags:</b> <?= h($article->tag_string) ?></p>
    <p><small>作成日時: <?= $article->created->format(DATE_RFC850) ?></small></p>
    <p><?= $this->Html->link('Edit', ['action' => 'edit', $article->slug]) ?></p>
</body>
</html>
