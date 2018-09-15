/**
 * Vanilla JavaScript window.onload event.
 */
import baguetteBox from 'baguettebox.js';
import Blazy from 'blazy';

window.addEventListener('load', function() {
    baguetteBox.run('.gallery');
    
    var blazy = new Blazy();
    
    require('./images');

    require('./scripts/trigger');
});