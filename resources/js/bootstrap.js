import 'bootstrap';

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


        import Echo from 'laravel-echo'

        window.Pusher = require('pusher-js');
        
        window.Echo = new Echo({
            broadcaster: 'pusher',
            key: '93c25d9713d9667e1d19',
            cluster: 'eu',
            forceTLS: true,
            wsHost: window.location.hostname,
            wsPort: 6001,
            disableStats: true,
            enabledTransports: ['ws', 'wss']
        });
        