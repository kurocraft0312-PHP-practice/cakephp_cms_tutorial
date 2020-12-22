<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakePHPの練習</title>
</head>
<body>
    <h1>記事一覧</h1>
    <p><?= $this->Html->link("記事の追加", ['action' => 'add']) ?></p>
    <table>
        <tr>
            <th>タイトル</th>
            <th>作成日時</th>
            <th>操作</th>
        </tr>

    <!-- ここで、$articles クエリーオブジェクトを繰り返して、記事情報を出力します -->

    <?php foreach ($articles as $article): ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('編集', ['action' => 'edit', $article->slug]) ?>
            </td>
        </tr>
    <?php endforeach; ?>

    </table>
</body>
</html>
