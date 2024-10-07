
class Acme {
    static init(alpine) {
        alpine.data('acmeMenu', () => ({
            open: false,
            close() {
                this.open = false
            },
            toggle() {
                this.open = !this.open
            },
            visible() {
                return this.open
            }
        }))
    }
}

export {
    Acme
}
