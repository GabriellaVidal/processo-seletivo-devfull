import Popper from "popper.js";

try {
    window.$ = window.jQuery = require('jquery');
    window.Popper = Popper;
    window.swal = require('sweetalert2');

	require('bootstrap');
	require('jquery-mask-plugin');
} catch (e) {}