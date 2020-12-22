<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Articles tagged with
        <?= $this->Text->toList(h($tags), 'or') ?>
    </h1>

    <section>
    <?php foreach ($articles as $article): ?>
        <article>
            <!-- リンクの作成に HtmlHelper を使用 -->
            <h4><?= $this->Html->link(
                $article->title,
                ['controller' => 'Articles', 'action' => 'view', $article->slug]
            ) ?></h4>
            <span><?= h($article->created) ?></span>
        </article>
    <?php endforeach; ?>
    </section>
</body>
</html>
