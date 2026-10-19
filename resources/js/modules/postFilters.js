import {qs, qsa} from './dom.js';

const readFilters = (form) => {
    const data = new FormData(form);
    return {
        rating: data.get('rating'),
        role: data.get('role'),
        mic: data.get('mic') === 'on',
        slots: Number(data.get('slots') || 0)
    };
};

const matches = ({dataset}, f) =>
    (f.rating === 'any' || dataset.rating === f.rating) &&
    (f.role === 'any' || dataset.role === f.role) &&
    (!f.mic || dataset.mic === '1') &&
    Number(dataset.slots) >= f.slots;

export function initPostFilters() {
    const form = qs('[data-posts-filters]');
    const list = qs('[data-posts-list]');
    if (!form || !list) return;

    const sort = qs('[data-posts-sort]');
    const count = qs('[data-posts-count]');
    const empty = qs('[data-posts-empty]');
    const cards = qsa('[data-role]', list);

    const apply = () => {
        const filters = readFilters(form);
        const direction = sort?.value === 'old' ? -1 : 1;
        const ordered = [...cards].sort((a, b) => (b.dataset.date - a.dataset.date) * direction);
        let visible = 0;

        ordered.forEach((card) => {
            card.hidden = !matches(card, filters);
            if (!card.hidden) visible++;
            list.append(card);
        });

        if (count) count.textContent = visible;
        if (empty) empty.hidden = visible > 0;
    };

    form.addEventListener('input', apply);
    form.addEventListener('reset', () => setTimeout(apply));
    sort?.addEventListener('change', apply);
}
