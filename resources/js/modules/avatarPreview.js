import {qs} from './dom.js';

export function initAvatarPreview() {
    const input = qs('[data-avatar-input]');
    const preview = qs('[data-avatar-preview]');
    const name = qs('[data-avatar-name]');
    if (!input || !preview) return;

    input.addEventListener('change', () => {
        const [file] = input.files;
        if (!file) return;

        const img = new Image();
        img.src = URL.createObjectURL(file);
        img.alt = 'Аватар';
        preview.replaceChildren(img);
        if (name) name.textContent = file.name;
    });
}
