<?php
$pageTitle = "Question Form 1";
include './src/components/templates/head.php';
include './src/components/templates/header.php';
?>

<main>
  <form class="form" action="question-form1.php" method="POST">
    <div class="form__questionField">
      <p class="form__question__text">Do you take nutritional supplements?</p>
      <!-- Check Radio -->
      <label for="q2y">Yes</label>
      <input id="q2y" type="radio" value="yes" name="q2">
      <input id="q2n" type="radio" value="no" name="q2">
      <label for="q2n">No</label>
    </div>
<hr>
    <div class="form__questionField">
      <p class="form__question__text">How important is physical activity to you?</p>
      <label for="q3">Not at all important - Very important</label>
      <!-- Slider -->
      <input id="q3" type="range"  min=0 max=10 name="q3" />
      <!-- Output -->
    </div>
    <a href="index.php">Prev </a><a href="question-form2.php"> Next</a>
  </form>
</main>

<?php
include './src/components/templates/footer.php';
?>

