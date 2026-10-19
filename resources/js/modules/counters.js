import {qsa} from './dom.js';

const DURATION = 1600;
const easeOut = (t) => 1 - (1 - t) ** 3;

const animate = (el) => {
    const target = Number(el.dataset.count);
    const suffix = el.dataset.suffix ?? '';
    const start = performance.now();

    const tick = (now) => {
        const progress = Math.min((now - start) / DURATION, 1);
        el.textContent = Math.round(target * easeOut(progress)).toLocaleString('ru-RU') + suffix;
        if (progress < 1) requestAnimationFrame(tick);
    };
    requestAnimationFrame(tick);
};

export function initCounters() {
    qsa('[data-count]').forEach(animate);
}
