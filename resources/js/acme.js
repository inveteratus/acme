
import { acmeTheme } from './acme/theme.js';

class Acme {
    static init(alpine) {
        alpine.data('acmeTheme', acmeTheme)
    }
}

export {
    Acme
}
