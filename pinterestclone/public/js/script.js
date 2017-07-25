$('#url').bind('input propertychange',function(){
  $('#preview').attr('src',this.value);
  console.log(this.value);
});

$('#alert').delay(3000).fadeOut();