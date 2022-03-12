$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    responsive:{
        0:{
            items: 1
        },
        600:{
            items: 3
        },
        1000:{
            items: 5
        }
    }
});

var itemSelectedBefore = 'begin';

function setColorSelected(theClass){
    let itemBefore = document.getElementById(itemSelectedBefore);
    itemBefore.style.color = '#AAA';
    let menuItem = document.getElementById(theClass);
    menuItem.style.color = '#37e737';
    itemSelectedBefore = theClass;
}




