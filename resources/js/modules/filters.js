import {qs, qsa} from './dom.js';

export function initFilters() {
    const bar = qs('[data-filters]');
    const list = qs('[data-posts]');
    if (!bar || !list) return;

    const cards = qsa('[data-game]', list);

    bar.addEventListener('click', ({target}) => {
        const chip = target.closest('[data-filter]');
        if (!chip) return;

        qsa('.chip', bar).forEach((item) => item.classList.toggle('is-active', item === chip));
        const game = chip.dataset.filter;
        cards.forEach((card) => {
            card.hidden = game !== 'all' && card.dataset.game !== game;
        });
    });
}
