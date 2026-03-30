/**
 * File circle-animation.js
 *
 * Handles the circle animation script
 */
(function() {
    document.addEventListener("DOMContentLoaded", function() {

const svg = document.querySelector(".segments");
const labels = document.querySelectorAll(".label");
const floatingText = document.querySelector(".floating-text");

const segments = 5;
const radius = 60;
const center = 100;

let activeIndex = 0;
let midAngles = [];

function polarToCartesian(cx, cy, r, angle) {
  const rad = (angle - 90) * Math.PI / 180;
  return {
    x: cx + r * Math.cos(rad),
    y: cy + r * Math.sin(rad)
  };
}

function describeArc(cx, cy, r, start, end) {

  const startPos = polarToCartesian(cx, cy, r, end);
  const endPos = polarToCartesian(cx, cy, r, start);

  const largeArcFlag = end - start <= 180 ? "0" : "1";

  return `
    M ${startPos.x} ${startPos.y}
    A ${r} ${r} 0 ${largeArcFlag} 0 ${endPos.x} ${endPos.y}
  `;
}

function createSegments() {

  const slice = 360 / segments;

  for (let i = 0; i < segments; i++) {

    const start = i * slice + 6;
    const end = (i + 1) * slice - 6;
    const mid = (start + end) / 2;

    midAngles.push(mid);

    const path = document.createElementNS(
      "http://www.w3.org/2000/svg",
      "path"
    );

    path.setAttribute("d", describeArc(center, center, radius, start, end));
    path.classList.add("segment");

    if (i === 0) path.classList.add("active");

    svg.appendChild(path);
  }
}

const mediaQuery = window.matchMedia('(max-width: 560px)');

function setDistances(e) {
    if (e.matches) {
        distancex = 130;
        distancey = 70;
    } else {
        distancex = 200;
        distancey = 120;
    }
}

let distancex, distancey;

setDistances(mediaQuery);
mediaQuery.addEventListener('change', setDistances);

function moveText(index) {

const angle = midAngles[index] - 180;

const rad = angle * Math.PI / 180;

const x = Math.cos(rad) * distancex;
const y = Math.sin(rad) * distancey;

  floatingText.style.transform =
    `translate(calc(-50% + ${x}px), calc(-50% + ${y}px))`;
}

function rotateHighlight() {

  const segs = document.querySelectorAll(".segment");

  segs.forEach(s => s.classList.remove("active"));
  labels.forEach(l => l.classList.remove("active"));

  activeIndex = (activeIndex + 1) % segments;

  segs[activeIndex].classList.add("active");
  labels[activeIndex].classList.add("active");

  moveText(activeIndex);
}

createSegments();
moveText(0);

setInterval(rotateHighlight, 2500);
});
})();