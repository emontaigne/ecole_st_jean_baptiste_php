

var btnGallery1 = document.getElementById('activite1Gallery');
var gallery1 = document.getElementById('gallery1');

btnGallery1.addEventListener('click', (e) => {
    console.log('toto');
    e.preventDefault();
    if (gallery1.style.display !== 'flex') {
      gallery1.style.display = 'flex';
    } else {
      gallery1.style.display = 'none';
    }
  });
  
  
var btnGallery2 = document.getElementById('activite2Gallery');
var gallery2 = document.getElementById('gallery2');

btnGallery2.addEventListener('click', (e) => {
    console.log('toto');
    e.preventDefault();
    if (gallery2.style.display !== 'block') {
      gallery2.style.display = 'block';
    } else {
      gallery2.style.display = 'none';
    }
  });

  var btnGallery3 = document.getElementById('activite3Gallery');
var gallery3 = document.getElementById('gallery3');

btnGallery3.addEventListener('click', (e) => {
    console.log('toto');
    e.preventDefault();
    if (gallery3.style.display !== 'block') {
      gallery3.style.display = 'block';
    } else {
      gallery3.style.display = 'none';
    }
  });