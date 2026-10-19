import {qsa} from './dom.js';

export function initCopy() {
    qsa('[data-copy]').forEach((btn) => {
        const label = btn.textContent;
        btn.addEventListener('click', async () => {
            await navigator.clipboard?.writeText(btn.dataset.copy);
            btn.textContent = 'Скопировано ✔';
            setTimeout(() => {
                btn.textContent = label;
            }, 1500);
        });
    });
}
