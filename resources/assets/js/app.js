/**
 * Vanilla JavaScript window.onload event.
 */
import Blazy from 'blazy';
import baguetteBox from 'baguettebox.js';

window.onload = function() {

    var blazy = new Blazy();

    baguetteBox.run('.gallery');

    require('./scripts/trigger');

}