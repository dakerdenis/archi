<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/styles.css">
</head>

<body>

    <?php include './include/header.php' ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <div class="main__content">
        <?php
        if (isset($_GET['page'])) {
            switch ($_GET['page']) {
                case "main":
                    include './include/mainpage.php';
                    break;
                case "login":
                    include './include/login.php';
                    break;
                case "registration":
                    include './include/registration.php';
                    break;
                case "profile":
                    include './include/profile.php';
                    break;
                case "under_construction":
                    include './include/under_construction.php';
                    break;
                case "search":
                    include './include/search.php';
                    break;
                case "pages":
                    include './include/pages.php';
                    break;
                case "article":
                    include './include/article.php';
                    break;
                case "goods":
                    include './include/goods.php';
                    break;
                case "item":
                    include './include/item.php';
                    break;
                case "new_buisness":
                    include './include/new_buisness.php';
                    break;
                case "new_item":
                    include './include/new_item.php';
                    break;

                case "my_article":
                    include './include/my_article_list.php';
                    break;

                case "change_status":
                    include './include/change_status.php';
                    break;


                default:
                    include './include/main.php';
                    break;
            }
        } else {
            include './include/mainpage.php';
        }
        ?>

    </div>


    <?php include './include/footer.php' ?>




    <script src="./scripts/index.js"></script>
</body>

</html>