
 var arrAnswer = ['Elizabeth', 'UK'];


 $('#testform').on('submit', function(e) {

   var thisform = $(this);
   var questionCount = thisform.find('.answer').length; 
   var countRight = 0; 
   var resultText = ''; 
   var inputClass = ''; 
   var percent = 0; 
   var resultTextClass = ''; 
   $('.result').removeClass('good bad');

   thisform.find('.answer').each(function() {
     $(this).removeClass('good bad'); 

     var answerid = $(this).attr('data-id'); 
     var answerval = $(this).val(); 

     var rightAnswer = arrAnswer[answerid]; 

     if (answerval == rightAnswer) {
       countRight = ++countRight; 
       inputClass = 'good'; 
     } else {
       inputClass = 'bad';
     }
     $(this).addClass(inputClass);


   });

   percent = Math.floor((countRight / questionCount) * 100);
   if (percent > 50) {
     resultTextClass = 'good'; 
   } else {
     resultTextClass = 'bad'; 
   }


   resultText = 'правильно ' + percent + '% ' + countRight + ' вопроса из ' + questionCount + '';
   $('.result .result_text').text(resultText);
   $('.result').addClass(resultTextClass);

   return false;
 });