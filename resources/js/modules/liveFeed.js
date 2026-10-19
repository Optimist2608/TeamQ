import {qs} from './dom.js';

const EVENTS = [
    '🟢 NoScope_Babushka нашёл команду в CS2',
    '🔥 QuackAttack собрал пати в Valorant',
    '⭐ OctoMain получил отзыв 5★',
    '💬 PizzaPudge откликнулся на объявление',
    '🎮 SleepyAWP создал объявление в CS2',
    '🏆 xX_PepeCarry_Xx попал в Зал славы'
];
const FIRST_DELAY = 2500;
const INTERVAL = 7000;
const LIFETIME = 4500;

export function initLiveFeed() {
    const root = qs('[data-live-feed]');
    if (!root) return;

    let index = 0;
    const show = () => {
        if (document.hidden) return;
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.textContent = EVENTS[index++ % EVENTS.length];
        root.append(toast);
        setTimeout(() => toast.remove(), LIFETIME);
    };

    setTimeout(show, FIRST_DELAY);
    setInterval(show, INTERVAL);
}
