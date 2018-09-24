const $$ = selectors => [...document.querySelectorAll(selectors)];

function setImageSizes(image) {
    // Take object-fit into account: size needed can be bigger when image is clipped on it's sides
    const imageWidthRatio = image.naturalWidth / image.naturalHeight;

    const width = Math.max(image.getBoundingClientRect().width, image.getBoundingClientRect().height * imageWidthRatio);

    image.setAttribute('sizes', `${width}px`);
}

function prepareForPrint() {
    $$('[srcset][sizes="1px"]').forEach(image => {
        setImageSizes(image);
    });
}

export default function() {
    $$('[srcset][sizes="1px"]').forEach(image => {
        setImageSizes(image);
    });
    $$('[data-srcset][sizes="1px"]').forEach(image => {
        setImageSizes(image);
    });

    let resizeTimer;

    window.addEventListener('resize', () => {
        window.clearTimeout(resizeTimer);

        resizeTimer = window.setTimeout(() => {
            $$('[srcset]:not([sizes="1px"])').forEach(image => {
                setImageSizes(image);
            });
        }, 250);
    });

    /* Try to load images on print for Webkit and others */

    window.matchMedia('print').addListener(mql => {
        if (mql.matches) {
            prepareForPrint();
        }
    });

    window.addEventListener('beforeprint', () => {
        prepareForPrint();
    });
}