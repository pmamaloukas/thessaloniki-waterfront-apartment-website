var images = [

    'photos/kitchenTable.JPG',
    'photos/bedroomVase.jpg',
    'photos/tapArtistic.JPG'
    
  
  ];
  
  var index = 0;
  
  setInterval(change_up, 4000);
  
  function change_up(){
  
    index = (index + 1 < images.length) ? index + 1 : 0;
  
    $('main').fadeOut(300, function(){
  
      $(this).css('background-image', 'url('+ images[index] + ')')
  
      $(this).fadeIn(300);
  
    });
  }