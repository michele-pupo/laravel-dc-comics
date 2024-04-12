import './bootstrap';

import '~bootstrap/js/index.esm.js'

// Import our custom CSS
import '~resources/scss/app.scss'

// precompilazione immmagini
import.meta.glob([
    '../img/**'
    ])
