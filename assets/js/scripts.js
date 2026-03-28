/**
 * File scripts.js.
 *
 * Handles diverse scripts
 */
(function () {

    // clickable Description Items

    document.addEventListener("DOMContentLoaded", () => {

        const blocks = document.querySelectorAll(".descriptions");

        blocks.forEach(block => {

            const overviewItems = block.querySelectorAll(".descriptions__overview__item");
            const detailItems = block.querySelectorAll(".descriptions__detail__item");

            overviewItems.forEach(item => {

                item.addEventListener("click", () => {

                    const id = item.dataset.id;

                    // remove active states
                    overviewItems.forEach(el =>
                        el.classList.remove("descriptions__overview__item--active")
                    );

                    detailItems.forEach(el =>
                        el.classList.remove("descriptions__detail__item--active")
                    );

                    // activate clicked overview
                    item.classList.add("descriptions__overview__item--active");

                    // activate matching detail
                    const target = block.querySelector(
                        `.descriptions__detail__item[data-id="${id}"]`
                    );

                    if (target) {
                        target.classList.add("descriptions__detail__item--active");
                    }

                });
                item.addEventListener("keydown", (e) => {
                    if (e.key === "Enter" || e.key === " ") {
                        e.preventDefault(); // prevents page scroll on space
                        item.click(); // reuse your existing click handler
                    }
                });

            });

        });

    });

})();