<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>b2b</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>

        <?php include './include/b2b/b2b_header.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
        <div class="main__content">
            <?php
            if (isset($_GET['page'])) {
                switch ($_GET['page']) {
                    case "main":
                        include './include/b2b/mainpage.php';
                        break;
                    case "login":
                        include './include/b2b/login.php';
                        break;
                    case "registration":
                        include './include/b2b/registration.php';
                        break;
                    case "profile":
                        include './include/b2b/profile.php';
                        break;
                    case "company":
                        include './include/b2b/company.php';
                        break;
                    case "company_category":
                        include './include/b2b/company_category.php';
                        break;
                    case "company__profile":
                        include './include/b2b/company__profile.php';
                        break;
                    case "owners__goods":
                        include './include/b2b/owners__goods.php';
                        break;
                    case "edit__company":
                        include './include/b2b/edit__company.php';
                        break;
                    case "article":
                        include './include/article.php';
                        break;
                    case "goods":
                        include './include/goods.php';
                        break;
                    case "item":
                        include './include/b2b/item.php';
                        break;


                    default:
                        include './include/b2b/mainpage.php';
                        break;
                }
            } else {
                include './include/b2b/mainpage.php';
            }
            ?>

        </div>


        <?php include './include/footer.php' ?>




    <script src="./scripts/index.js"></script>
</body>
</html>