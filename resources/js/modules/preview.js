import {qs, qsa} from './dom.js';

const readValue = (el) => (el.tagName === 'SELECT' ? el.options[el.selectedIndex].text : el.value).trim();

export function initPreview() {
    qsa('[data-preview]').forEach((input) => {
        const target = qs(`[data-preview-target="${input.dataset.preview}"]`);
        if (!target) return;

        const fallback = target.textContent;
        input.addEventListener('input', () => {
            target.textContent = readValue(input) || fallback;
        });
    });
}
