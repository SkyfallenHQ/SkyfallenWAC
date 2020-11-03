function fadeinoutapp(selector_app_box){
    anime({
  targets: selector_app_box,
  opacity: ['0%','100%'],
  easing: 'easeInOutQuad'
});
}