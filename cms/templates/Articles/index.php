<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CakePHPの練習</title>
</head>
<body>
    <h1>記事一覧</h1>
    <table>
        <tr>
            <th>タイトル</th>
            <th>作成日時</th>
        </tr>

        <!-- ここで、$articles クエリーオブジェクトを繰り返して、記事の情報を出力します -->

        <?php foreach ($articles as $article): ?>
        <tr>
            <td>
                <?= $this->Html->link($article->title, ['action' => 'view', $article->slug]) ?>
            </td>
            <td>
                <?= $article->created->format(DATE_RFC850) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
