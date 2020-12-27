let init_carousel = (section) => {
    let carousel = document.querySelector(`${section} .carousel`);

    let books = carousel.querySelectorAll(".book");

    let splits = [0, 3, 6, 7];

    let i = 0;

    let left = document.querySelector(`${section} .header-part .left`);
    let right = document.querySelector(`${section} .header-part .right`);

    let options = {
        inline: "start",
        block: "nearest",
        behavior: "smooth"
    };

    left.addEventListener('click', () => {
        i = (i - 1) % splits.length;
        if (i < 0) i = 0;
        books[splits[i]].scrollIntoView(options);
    });

    right.addEventListener('click', () => {
        i = (i + 1) % splits.length;
        books[splits[i]].scrollIntoView(options);
    });

}

let init_tabs = () => {
    let tabs = [
        'bestsellers-tab', 'favorites-tab', 'upcoming-events-tab'
    ];

    let active_tab = tabs[0];

    tabs.forEach(tab => {
        let el = document.getElementById(tab);
        el.addEventListener('click', () => {
            if (tab != active_tab) {

                // Remove active property from currently active section
                let active = document.getElementById(active_tab);
                active.classList.remove('active');

                // Hide the currently active section
                let section = active_tab.substring(0, active_tab.length - 4);
                let visible_part = document.querySelector(`#${section}`);
                visible_part.style.display = 'none';

                // Show new active section
                let new_section = tab.substring(0, tab.length - 4);
                let hidden_part = document.querySelector(`#${new_section}`);
                hidden_part.style.display = 'block';

                // Add active property to new active section
                el.classList.add('active');
                active_tab = tab;
            }
        })
    });
}

window.onload = () => {
    init_carousel("#bestsellers");
    init_carousel("#favorites");

    init_tabs();
}