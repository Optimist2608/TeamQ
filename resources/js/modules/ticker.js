import {qs} from './dom.js';

// Лента крутится на CSS (transform), а JS только ставит её на паузу, когда она вне экрана
export function initTicker() {
    const ticker = qs('[data-ticker]');
    if (!ticker) return;

    const observer = new IntersectionObserver(([entry]) => {
        ticker.classList.toggle('is-paused', !entry.isIntersecting);
    });
    observer.observe(ticker);
}
