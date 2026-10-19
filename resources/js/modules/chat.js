import {qs} from './dom.js';

const REPLIES = ['gg', 'Ща зайду, только чай налью', 'Микрофон есть, кот тоже', 'Го в катку 🔥', 'Лол, ну ты даёшь', 'Смоки за мной'];
const pick = (list) => list[Math.floor(Math.random() * list.length)];

const addMessage = (feed, text, own) => {
    const wrap = document.createElement('div');
    const bubble = document.createElement('p');
    wrap.className = own ? 'msg msg--own' : 'msg';
    bubble.className = 'msg__bubble';
    bubble.textContent = text;
    wrap.append(bubble);
    feed.append(wrap);
    feed.scrollTop = feed.scrollHeight;
};

export function initChat() {
    const feed = qs('[data-chat-feed]');
    const form = qs('[data-chat-form]');
    if (!feed || !form) return;

    const input = qs('input', form);
    feed.scrollTop = feed.scrollHeight;

    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const text = input.value.trim();
        if (!text) return;
        addMessage(feed, text, true);
        input.value = '';
        setTimeout(() => addMessage(feed, pick(REPLIES), false), 900);
    });
}
