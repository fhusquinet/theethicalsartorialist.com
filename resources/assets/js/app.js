/**
 * Vanilla JavaScript window.onload event.
 */
import baguetteBox from 'baguettebox.js';
import Blazy from 'blazy';
import images from './images';

window.addEventListener('load', images);

window.addEventListener('load', function() {
    baguetteBox.run('.gallery');
    
    var blazy = new Blazy();
    
    require('./images');

    require('./scripts/trigger');
});