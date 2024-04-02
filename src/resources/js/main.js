'use strict';

{
    const open = document.getElementById('open');
    const modal = document.getElementById('modal');

    open.addEventListener('click', () => {
        modal.classList.remove('hidden');
    });
}
