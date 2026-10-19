import {initBurger} from './modules/burger.js';
import {initReveal} from './modules/reveal.js';
import {initTaglines} from './modules/taglines.js';
import {initBackground} from './modules/background.js';
import {initCounters} from './modules/counters.js';
import {initFilters} from './modules/filters.js';
import {initScrollTop} from './modules/scrollTop.js';
import {initTabs} from './modules/tabs.js';
import {initModals} from './modules/modal.js';
import {initSearch} from './modules/search.js';
import {initPostFilters} from './modules/postFilters.js';
import {initChat} from './modules/chat.js';
import {initCopy} from './modules/copy.js';
import {initAvatarPreview} from './modules/avatarPreview.js';
import {initPreview} from './modules/preview.js';

const modules = [
    initBurger, initReveal, initTaglines, initBackground, initCounters, initFilters, initScrollTop,
    initTabs, initModals, initSearch, initPostFilters, initChat, initCopy, initAvatarPreview, initPreview
];

document.addEventListener('DOMContentLoaded', () => modules.forEach((init) => init()));
