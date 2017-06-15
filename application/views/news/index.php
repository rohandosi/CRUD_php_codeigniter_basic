
//Showing the page where you can view, edit, update, delete


<h2><?php echo $title ?></h2>

<table border="1", cellpadding="5">
    <tr>
        <td>Title</td>
        <td>Content</td>
        <td>Action</td>
    </tr>
    <?php foreach ($news as $news_item): ?>
    <tr>
        <td><?php echo $news_item['title']; ?></td>
        <td><?php echo $news_item['text']; ?></td>
        <td>
            <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a>
            <a href="<?php echo site_url('news/edit/'.$news_item['id']);?>">Edit</a>
            <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Delete</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
