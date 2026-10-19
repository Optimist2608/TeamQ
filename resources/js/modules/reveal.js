import {qsa} from './dom.js';

export function initReveal() {
    const items = qsa('[data-reveal]');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
        });
    }, {threshold: 0.15});

    items.forEach((item) => observer.observe(item));
}
