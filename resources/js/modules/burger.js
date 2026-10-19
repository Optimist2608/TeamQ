import {qs} from './dom.js';

export function initBurger() {
    const header = qs('[data-header]');
    const burger = qs('[data-burger]');
    if (!header || !burger) return;

    burger.addEventListener('click', () => {
        const isOpen = header.classList.toggle('header--open');
        burger.setAttribute('aria-expanded', String(isOpen));
    });
}
