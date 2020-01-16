const myTags = [
    'JavaScript', 'CSS3', 'HTML',
    'SCSS', 'RWD', 'Bootstrap',
    'WordPress', 'Gulp.js', 'Git',
    'Adobe Package', 'Figma', 'UX',
  ];

  var tagCloud = TagCloud('.cloud-tag', myTags,{

    // radius in px
    radius: 100,

    // animation speed
    // slow, normal, fast
    maxSpeed: 'fast',
    initSpeed: 'normal',

    // 0 = top
    // 90 = left
    // 135 = right-bottom
    direction: 135,
    
    // interact with cursor move on mouse out
    keep: true
    
});