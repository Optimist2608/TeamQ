import {qs, qsa} from './dom.js';

export function initSearch() {
    const input = qs('[data-search-input]');
    if (!input) return;

    const items = qsa('[data-search-item]');
    const empty = qs('[data-search-empty]');

    input.addEventListener('input', () => {
        const query = input.value.trim().toLowerCase();
        let found = 0;
        items.forEach((item) => {
            const match = item.dataset.name.includes(query);
            item.hidden = !match;
            if (match) found++;
        });
        if (empty) empty.hidden = found > 0;
    });
}
