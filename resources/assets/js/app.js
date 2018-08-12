/**
 * Vanilla JavaScript window.onload event.
 */
import images from './images';
window.addEventListener('load', images);

import baguetteBox from 'baguettebox.js';
window.onload = function() {

    baguetteBox.run('.gallery');

    require('./scripts/trigger');

}