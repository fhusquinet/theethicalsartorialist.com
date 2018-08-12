let triggers = document.querySelectorAll('.js-trigger');

for ( let i = 0; i < triggers.length; i++ ) {
    // console.log('Trigger found:', triggers[i]);
    triggers[i].addEventListener('click', function(event) {
        event.preventDefault();
        openElement(triggers[i]);
    });
}

function openElement(trigger) {
    let selector = trigger.dataset.element;
    // console.log(selector, event);
    let element = document.querySelector('.' + selector);
    if ( ! element ) {
        return;
    }

    if ( element.classList.contains(selector + '--open') ) {
        // console.log('Element found with class:', element);
        element.classList.remove(selector + '--open');
        document.body.classList.remove('trigger--open');
    } else {
        // console.log('Element found without class:', element);
        element.classList.add(selector + '--open');
        document.body.classList.add('trigger--open');
    }
}