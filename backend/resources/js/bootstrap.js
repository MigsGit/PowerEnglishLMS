import "bootstrap";
import _ from 'lodash';
import { Modal } from 'bootstrap';
import { useToast } from 'vue-toast-notification';

import axios from 'axios';
import $ from "jquery";

import Swal from 'sweetalert2';


window._ = _;

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


window.Modal = Modal;
window.Toast = useToast;
window.Swal = Swal;


try {
    window.$ = $;

} catch (e) {
    console.log("JQUERY ERROR: " + e);
}
