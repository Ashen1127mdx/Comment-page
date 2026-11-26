
<!DOCTYPE html>
<html>
<head>
    <title>Comments</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="comment-container">

    <h2>Comments</h2>

    <form>
        <input type="text" placeholder="Your username">

        <textarea placeholder="Write a comment..."></textarea>

        <button type="submit">Post Comment</button>
    </form>

    <h3>Recent Comments</h3>
		<?php while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="comment">
            <h4>
                <?php echo htmlspecialchars($row['user']); ?>
            </h4>

            <p>
                <?php echo htmlspecialchars($row['comment']); ?>
            </p>
        </div>
		<?php } ?>

    <div class="comment">
        <h4>John</h4>
        <p>Nice work. Keep it up!</p>
    </div>

</div>

</body>
</html>
