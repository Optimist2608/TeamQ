import {qsa} from './dom.js';

export function initTabs() {
    qsa('[data-tabs]').forEach((root) => {
        const buttons = qsa('[data-tab]', root);
        const panels = qsa('[data-panel]', root);

        const show = (id) => {
            buttons.forEach((btn) => btn.classList.toggle('is-active', btn.dataset.tab === id));
            panels.forEach((panel) => {
                panel.hidden = panel.dataset.panel !== id;
            });
        };

        buttons.forEach((btn) => btn.addEventListener('click', () => show(btn.dataset.tab)));
    });
}
