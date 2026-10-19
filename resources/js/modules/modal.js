import {qs, qsa} from './dom.js';

export function initModals() {
    qsa('[data-modal-open]').forEach((btn) => {
        btn.addEventListener('click', () => qs(`#${btn.dataset.modalOpen}`)?.showModal());
    });
    qsa('[data-modal-close]').forEach((btn) => {
        btn.addEventListener('click', () => btn.closest('dialog').close());
    });
    qsa('dialog').forEach((dialog) => {
        dialog.addEventListener('click', ({target}) => {
            if (target === dialog) dialog.close();
        });
    });
}
