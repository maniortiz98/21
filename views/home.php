<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $data['page_tag']; ?></title>
</head>
<body>

<?php 
  
    dep($data);

?>
    <section id="<?php echo $data['page_id']; ?>">

        <h1><?php echo $data['page_title']; ?> </h1>
       
        <p><?php echo $data['page_content']; ?></p>
    </section>


    <?php echo SMONEY.formatmoney(52500); ?>
    


</body>
</html>