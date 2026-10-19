import {qs} from './dom.js';

const TAGLINES = [
    'Хватит орать в войс «ищу пятого» в 3 часа ночи.',
    'Тиммейты бывают двух видов: carry и «я просто посмотреть».',
    'У нас нет токсиков. Есть только эмоциональные люди с микрофоном.',
    'Найди друзей по игре. Или хотя бы тех, кто не руинит.',
    'GG — это когда проиграли, но ты нашёл команду на TeamQ.',
    'Мы не гарантируем победу. Но гарантируем, что афкашников будет меньше.'
];

const getRandom = (list, exclude) => {
    const pool = list.filter((item) => item !== exclude);
    return pool[Math.floor(Math.random() * pool.length)];
};

export function initTaglines() {
    const target = qs('[data-tagline]');
    const button = qs('[data-tagline-btn]');
    if (!target || !button) return;

    button.addEventListener('click', () => {
        target.textContent = getRandom(TAGLINES, target.textContent);
    });
}
