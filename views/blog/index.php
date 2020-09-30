<?php
if (isset($posts)) {
    echo '<table border="1">';
    foreach ($posts as $post) {
        echo "<tr>
                <td>$post->title</td>
                <td>$post->body</td>
                <td>$post->date</td>
                <td><a href=/blog/delete?id=$post->id>Удалить</a></td>
            </tr>";
    }
    echo '</table>';
} else {
    echo 'Ты лох как сюда попал';
}