<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive FAQ Accordion | CodingLab </title>
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="css\style2.css">
    <link rel="stylesheet" href="css\footer.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
<?php include("./include/header.php"); ?>
  <div class="accordion">
    <div class="image-box">
      <img src="img/mainImg.png" alt="">
    </div>
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <?php  
        include('conn.php');                       
        $q="select * from faq";
        $r=mysqli_query($conn,$q);
        $n=mysqli_num_rows($r);
        $a=1;
        while ($row=mysqli_fetch_assoc($r)) {?>
      <li>
        <div class="question-arrow">
          <span class="question"><?php echo $row['que']?></span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p><?php echo $row['ans']?></p>
        <span class="line"></span>
      </li>
      <?php } ?>
    </ul>
    </div>
  </div>
  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>
  
</body>
</html>
