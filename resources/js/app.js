import './bootstrap';
// import Datepicker from 'flowbite-datepicker/Datepicker';
import 'tw-elements';
import Alpine from 'alpinejs';
require('flowbite-datepicker');

const datepickerEl = document.getElementById('datepickerId');
new Datepicker(datepickerEl, {
    // options
});


// mix.copy('node_modules/tw-elements/dist/js/index.min.js')

window.Alpine = Alpine;

Alpine.start();
