$(document).ready(function(){
  var text = [
    'Programmer',
    'Web Developer',
    'Designer',
    '3D modeller',
    'University Student',
    'Flash Animator',
    'Level Designer'];
  i = 0;
  $location = $('#changing_text');

  $location.text(text[i++ % text.length]);
  setInterval(function ()
  {
    $location.text(text[i++ % text.length]);
  }, 900);
});
