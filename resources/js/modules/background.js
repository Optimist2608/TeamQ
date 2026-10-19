import {qs} from './dom.js';

import img1 from '../../images/emoji/1.webp'
import img2 from '../../images/emoji/2.webp'
import img3 from '../../images/emoji/3.webp'
import img4 from '../../images/emoji/4.webp'
import img5 from '../../images/emoji/5.webp'
import img6 from '../../images/emoji/6.webp'
import img7 from '../../images/emoji/7.webp'
import img8 from '../../images/emoji/8.webp'
import img9 from '../../images/emoji/9.webp'
import img10 from '../../images/emoji/10.webp'
import img11 from '../../images/emoji/11.webp'
import img12 from '../../images/emoji/12.webp'
import img13 from '../../images/emoji/13.webp'
import img14 from '../../images/emoji/14.webp'
import img15 from '../../images/emoji/15.webp'
import img16 from '../../images/emoji/16.webp'

const IMAGES = [
    img1, img2, img3, img4, img5, img6, img7, img8, img9, img10, img11, img12, img13, img14, img15, img16
];
const COUNT = 16;
const rand = (min, max) => Math.random() * (max - min) + min;

const createImage = (src) => {
    const el = document.createElement('img');
    el.className = 'bg__emoji';
    el.src = src;
    el.alt = '';
    el.loading = 'lazy';
    el.style.cssText = `left:${rand(0, 95)}%;top:${rand(0, 95)}%;width:${rand(46, 86)}px;height:auto;` +
        `--dur:${rand(10, 22)}s;--dx:${rand(-60, 60)}px;--rot:${rand(-40, 40)}deg;animation-delay:${-rand(0, 12)}s`;
    return el;
};

export function initBackground() {
    const root = qs('[data-bg-emojis]');
    if (!root) return;
    for (let i = 0; i < COUNT; i++) {
        root.append(createImage(IMAGES[i % IMAGES.length]));
    }
}
