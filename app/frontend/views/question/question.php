<?php $i = 1; ?>
<div class="question">
<?php foreach ($questions as $question): ?>
  <div class="">
    Câu <?php echo $i ++; ?> :  <?php echo $question['content'] ?>
    <div class="">
      <input  class="chose" type="radio" name="answer-<?php echo $i ?>" value="a" data-sentence = <?php echo $question['id'] ?>> <?php echo $question['ans_a'] ?>
    </div>
    <div class="">
      <input class="chose" type="radio" name="answer-<?php echo $i ?>" value="b" data-sentence = <?php echo $question['id'] ?>><?php echo $question['ans_b'] ?>
    </div>
    <div class="">
      <input class="chose" type="radio" name="answer-<?php echo $i ?>" value="c" data-sentence = <?php echo $question['id'] ?>><?php echo $question['ans_c'] ?>
    </div>
    <div class="">
    <input class="chose" type="radio" name="answer-<?php echo $i ?>" value="d" data-sentence = <?php echo $question['id'] ?>> <?php echo $question['ans_d'] ?>
    </div>
  </div>
<?php endforeach; ?>
</div>
<style media="screen">
  .answer-y{
    float: left;
    color: red;
    background: blue;
  }
  .question{
    clear: left;
  }
</style>
<script type="text/javascript">
  $(document).ready(function(){
    $('.chose').click(function(){
      answer = $(this).val();
      sentence = $(this).attr('data-sentence');
      $.ajax({
         url:"<?php echo base_url("home/chose_answer")?>",
         type: "POST",
         data: "answer="+answer + "&sentence="+ sentence,
         async: true,
         success: function(kq){
           console.log(kq);
       }
     });
    })
  })
</script>
