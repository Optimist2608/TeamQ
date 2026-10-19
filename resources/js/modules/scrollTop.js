import {qs} from './dom.js';

export function initScrollTop() {
    const button = qs('[data-scroll-top]');
    if (!button) return;

    button.addEventListener('click', () => window.scrollTo({top: 0, behavior: 'smooth'}));
}
